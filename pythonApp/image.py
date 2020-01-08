import csv
import re
import cv2
import pytesseract as pyt
from PIL import Image
pyt.pytesseract.tesseract_cmd = r'C:\\Program Files\\Tesseract-OCR\\Tesseract.exe'

def init(file_name):
    print (file_name, 'ready for treatment')

def read_break_image():
    img = cv2.imread('capture.png')
    #im = Image.open('break.png')
    text=pyt.image_to_string(img)
    #print(text)
    write_csv(text)

def write_csv(row):

    listOfNumbers = [float(s) for s in re.findall(r'-?\d+\.?\d*', row)]
    print(listOfNumbers)

    with open('value.csv', mode='w') as employee_file:
        employee_writer = csv.writer(employee_file, delimiter=',', quotechar='"', quoting=csv.QUOTE_MINIMAL)

        employee_writer.writerow(['Min', 'Moy', 'Max'])

if __name__ == '__main__':
    read_break_image()
    print ('End of image.py script')