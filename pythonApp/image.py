import csv
import re
import os
import sys
import numpy as np
from PIL import Image
import cv2
import pytesseract as pyt

# Path to 
pyt.pytesseract.tesseract_cmd = r'C:\\Program Files\\Tesseract-OCR\\Tesseract.exe'
regex = r"\d+\,\d+"

def read_break_image(frame, image, folderSource):
    
    # Set minimum and max HSV values to display
    lower = np.array([0, 0, 250])#0,0,0
    upper = np.array([179, 70, 255])#179,70,255

    # Create HSV Image and threshold into a range.
    hsv = cv2.cvtColor(image, cv2.COLOR_BGR2HSV)
    mask = cv2.inRange(hsv, lower, upper)
    output = cv2.bitwise_and(image,image, mask= mask)
    img_to_read = cv2.bitwise_not(output)
    img_to_read = img_to_read[0:110, 10:240]

    cv2.imwrite('out.png', img_to_read)
    text = pyt.image_to_string(img_to_read)
    write_csv(text, frame, folderSource)

# function to write the data 
def write_csv(row, frame, folderSource):
    with open(folderSource + '/value.csv', 'a', newline='') as outfile:
        writer = csv.writer(outfile,  delimiter=';',
                            quotechar=' ', quoting = csv.QUOTE_NONNUMERIC)
        #data_writer.writerow(['Min', 'Moy', 'Max'])
        
        matches = re.findall("\d+\,\d+", row)
        if len(matches) == 3:
            writer.writerow([frame, matches[2], matches[0], matches[1]])
            #print(frame, 'OK')
        else:
            print('dead')
            print(matches)

if __name__ == '__main__':
    #print('image file.started.')
    read_break_image("capture.png")
    #print('End of image.py script')
