import extract  # For the image script

import logging  # To create easy log file
import time  # For the time.sleep
import threading # For 
import os
import shutil #To move the folder
import pytesseract as pyt

# For the file detection, It doesn't work on 64-bit
from watchdog.observers import Observer
from watchdog.events import FileSystemEventHandler

# configuration for the logging function
logging.basicConfig(filename='app.log',
                    filemode='a',# filemode='a' is for append
                    format='%(asctime)s - %(message)s',
                    datefmt='%d-%b-%y %H:%M:%S')


#class that wait for an event, when it get's an event it call the Handler class and give him the event
class Watcher:
    DIRECTORY_TO_WATCH = "../web/file/toDo"
    
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


#called if an event occured
class Handler(FileSystemEventHandler):
    @staticmethod
    def on_any_event(event):

        # global is used to tell that we will modifiy the global variable
        global folderName

        # event_type can be : created, modified, deleted
        # is_directory is used to tel if the event concern a folder or not by a boolean
        if event.event_type == 'created' and event.is_directory == False:

            # example of event.src_path '../web/file/toDo\8675ab54b50cc355a5665dd33827806c14fbe71b\video.mp4'
            path = event.src_path.split('/')
            print(event.src_path)
            path2 = path[3].split('\\')

            # example of source '../web/file/toDo/8675ab54b50cc355a5665dd33827806c14fbe71b'
            source = path[0] + "/" + path[1] + "/" + path[2] + "/" + path2[0] + "/" + path2[1]

            # example of destination '../web/file/done'
            #destination is used when moving the folder at the end.
            destination = path[0] + "/" + path[1] + "/" + path[2] + "/" + "done"
            
            # test if the file is the video.mp4, and the folder is diffrent than the last one (to prevent the script from running twice on the same video)
            if path2[-1] == 'video.mp4' and folderName != path2[-2]:
                folderName = path2[-2]
                print('event type: ' + event.event_type + ' and is a directory: ' + str(event.is_directory) + ' name is: ' + path2[-1] + ' source is :' + folderName)

                # prepare the function that will be called as a thread, and then start the thread
                thread = threading.Thread(target=extract.extractFrames(event.src_path, source))
                thread.start()

                # wait here for the end of the thread before continuing
                thread.join()
                logging.warning('The file at %s has been added' % event.src_path)


                # Try to move the folder now that the script is almost finished.
                try:
                    shutil.move(source, destination)
                    print('The folder as been moved.')
                except:
                    pass
                    print("An exception occurred, could not move the folder")
            
            


if __name__ == '__main__':
    folderName = ''
    scriptDirectory = os.path.dirname(os.path.realpath(__file__))
    print('start: background script for Thermiscan project!')
    w = Watcher()
    w.run()