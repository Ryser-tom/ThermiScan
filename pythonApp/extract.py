# Importing all necessary libraries
import cv2
import os
import image
import csv
# Read the video from specified path
path = "..//video//vidTest.mp4"
def extractFrames(path, folderSource):
    print('start extract.py')
    cam = cv2.VideoCapture(path)
    try:
        os.unlink('value.csv')
        # creating a folder named data
        if not os.path.exists('/data'):
            os.makedirs('/data')
            

    # if not created then raise error
    except OSError:
        print('Error: Creating directory of data')

    # frame
    currentframe = 0
    print(cam)

    while (True):

        # reading from frame
        ret, frame = cam.read()

        if ret:
            # if video is still left continue creating images
            name = './data/frame' + str(currentframe) + '.jpg'
            #print('Creating...' + name)

            # writing the extracted images
            cv2.imwrite(name, frame)
            image.read_break_image(currentframe, frame, folderSource)
            # increasing counter so that it will
            # show how many frames are created
            currentframe += 1
        else:
            break

    # Release all space and windows once done
    cam.release()
    cv2.destroyAllWindows()
