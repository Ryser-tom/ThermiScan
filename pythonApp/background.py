import logging # To create easy log file
import time # For the time.sleep

# For the file detection, It doesn't work on 64-bit
from watchdog.observers import Observer 
from watchdog.events import FileSystemEventHandler

# configuration for the logging function
# filemode='a' is for append
logging.basicConfig(filename='\\testPython/app.log', filemode='a', format='%(asctime)s - %(message)s', datefmt='%d-%b-%y %H:%M:%S')

#class that wait for an event, when it get's an event it call the Handler class and give him the event
class Watcher:
    DIRECTORY_TO_WATCH = "\\testPython"

    def __init__(self):
        self.observer = Observer()

    def run(self):
        event_handler = Handler()
        self.observer.schedule(event_handler, self.DIRECTORY_TO_WATCH, recursive=True)
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
            #caller.some_func(event.src_path)
            logging.warning('The file at %s has been added' % event.src_path)


if __name__ == '__main__':
    w = Watcher()
    w.run()