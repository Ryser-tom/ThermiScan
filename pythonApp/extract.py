import image

# Importing all necessary libraries
import cv2 # For the text recognition
import os 
import csv # To write the csv

# Read the video from specified path
path = "..//video//vidTest.mp4"
def extractFrames(path, folderSource):
    print('start extract.py')
    cam = cv2.VideoCapture(path)
    try:
        # creating a folder named data
        if not os.path.exists('/data'):
            os.makedirs('/data')
            
    # if not created then raise error
    except OSError:
        print('Error: Creating directory of data')

    # frame counter
    currentframe = 0
    print(cam)

    while (True):

        # reading from frame
        ret, frame = cam.read()

        if ret:
            # if video is still left continue creating images
            name = './data/frame' + str(currentframe) + '.jpg'

            # writing the extracted images to be processed in image.py
            cv2.imwrite(name, frame)
            image.read_break_image(currentframe, frame, folderSource)
            currentframe += 1
        else:
            break

    # Release all space and windows once done
    print('extract done')
    cam.release()
    cv2.destroyAllWindows()
