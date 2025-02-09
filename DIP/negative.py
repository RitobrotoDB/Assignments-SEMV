import cv2
import numpy as np

img = cv2.imread("Lena.tif",0)


depth = img.dtype.itemsize*8
l = 2**depth - 1

res = l - img



cv2.imshow("",res.astype(np.uint8))
