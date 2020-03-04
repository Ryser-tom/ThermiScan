import logging  # To create easy log file
import time  # For the time.sleep
import extract  # For the image script
#import extract  # For the video script
import threading
import os
import csv
import shutil
import pytesseract as pyt
# For the file detection, It doesn't work on 64-bit
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

# configuration for the logging function
# filemode='a' is for append
logging.basicConfig(filename='app.log',
                    filemode='a',
                    format='%(asctime)s - %(message)s',
                    datefmt='%d-%b-%y %H:%M:%S')


#class that wait for an event, when it get's an event it call the Handler class and give him the event
class Watcher:
    # TODO change the directory to watch for the definitive directory
    DIRECTORY_TO_WATCH = "../web/file/toDo"
    #DIRECTORY_TO_WATCH = 'C:/Users/ryser/Documents/ThermiScan/web/file/toDo'
    def __init__(self):
        self.observer = Observer()
        pass

    def run(self):
        event_handler = Handler()
        self.observer.schedule(event_handler,
                               self.DIRECTORY_TO_WATCH,
                               recursive=True)
        self.observer.start()
        try:
            while True:
                time.sleep(5)
        except:
            self.observer.stop()
            print("Error")

        #self.observer.join()


#called if an event occured
class Handler(FileSystemEventHandler):
    @staticmethod
    def on_any_event(event):
        global folderName

        if event.event_type == 'created' and event.is_directory == False:
            path = event.src_path.split('/')
            path2 = path[3].split('\\')
            source = path[0] + "/" + path[1] + "/" + path[2] + "/" + path2[0] + "/" + path2[1]
            destination = path[0] + "/" + path[1] + "/" + path[2] + "/" + "done"
            
            if path2[-1] == 'video.mp4' and folderName != path2[-2]:
                folderName = path2[-2]
                print('event type: ' + event.event_type + ' and is a directory: ' + str(event.is_directory) + ' name is: ' + path2[-1] + ' source is :' + folderName)

                thread = threading.Thread(target=extract.extractFrames(event.src_path, source))
                thread.start()

                # wait here for the result to be available before continuing
                thread.join()
                logging.warning('The file at %s has been added' % event.src_path)



                try:
                    shutil.move(source, destination)
                    print('The folder as been moved.')
                except:
                    pass
                    #print("An exception occurred, cannot move folder")
            
            


if __name__ == '__main__':
    folderName = ''
    scriptDirectory = os.path.dirname(os.path.realpath(__file__))
    print('start: ' + scriptDirectory)
    w = Watcher()
    w.run()