import logging  # To create easy log file
import time  # For the time.sleep
import extract  # For the image script
#import extract  # For the video script
import threading

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

    def __init__(self):
        self.observer = Observer()

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

        self.observer.join()


#called if an event occured
class Handler(FileSystemEventHandler):
    @staticmethod
    def on_any_event(event):
        if event.is_directory:
            return None

        elif event.event_type == 'created':
            path = event.src_path.split('/')
            path2 = path[3].split('\\')
            source = path[0] + "/" + path[1] + "/" + path[2] + "/" + path2[0] + "/" + path2[1]
            destination = path[0] + "/" + path[1] + "/" + path[2] + "/" + "done"
            print(path2)
            print(source)

            thread = threading.Thread(target=extract.extractFrames(event.src_path, source))
            thread.start()

            # wait here for the result to be available before continuing
            thread.join()
            extract.extractFrames(event.src_path, source)
            logging.warning('The file at %s has been added' % event.src_path)
            print('the CSV is done.')
            f = open(source + '/value.csv', "r+w")
            lines=f.readlines()
            lines=lines[:-1]
            cWriter = csv.writer(f, delimiter=';')
            for line in lines:
                cWriter.writerow(line)
            try:
                shutil.move(source, destination)
                print('The folder as been moved.')
            except:
                print("An exception occurred, cannot move folder")


if __name__ == '__main__':
    w = Watcher()
    w.run()