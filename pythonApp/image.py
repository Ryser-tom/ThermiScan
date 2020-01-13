import csv
import re
import cv2
import pytesseract as pyt
import numpy as np
from PIL import Image
import matplotlib.pyplot as plt
#uncomment the next line to execute on Windows
#pyt.pytesseract.tesseract_cmd = r'C:\\Program Files\\Tesseract-OCR\\Tesseract.exe'

def init(file_name):
    print (file_name, 'ready for treatment')

def read_break_image():
    #image = cv2.imread('capture.png')
    #text=pyt.image_to_string(image)
    #print(text)
    #write_csv(text)

    image = Image.open('capture.png')
    cropped = image.crop((40,0, 330,170))

    cropped.save("Out.png")
    text=pyt.image_to_string(cropped)
    print(text)
    write_csv(text)

def write_csv(row):
    splitted = row.split()
    print(splitted)

    with open('value.csv', mode='w') as employee_file:
        employee_writer = csv.writer(employee_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)

        employee_writer.writerow(['Min', 'Moy', 'Max'])
        employee_writer.writerow([splitted[7],splitted[1],splitted[4]])

if __name__ == '__main__':
    read_break_image()
    print ('End of image.py script')