import cv2
import numpy as np

img = cv2.imread("Lena.tif",0)

for i in range(8):
    plane = img & 2**i
    cv2.imshow(f"Bit Plane {i}",plane)
    cv2.waitKey(0)
    
