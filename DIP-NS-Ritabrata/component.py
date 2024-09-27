import cv2
import numpy as np

img = cv2.imread('rgb2.jpg')

blue,green,red = cv2.split(img)

zeros=np.zeros(blue.shape,np.uint8)

blueBGR=cv2.merge([blue,zeros,zeros])
greenBGR=cv2.merge([zeros,green,zeros])
redBGR=cv2.merge([zeros,zeros,red])

cv2.imshow('RGB image',img)
cv2.imshow('Blue Channel',blueBGR)
cv2.imshow('Green Channel',greenBGR)
cv2.imshow('Red Channel',redBGR)
