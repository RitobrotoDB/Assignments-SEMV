import cv2
import numpy as np

img = cv2.imread("Lena.tif",0)

g = float(input("Enter gamma value : "))

depth = img.dtype.itemsize*8
l = 2**depth - 1

c = 255/(255**g)

res1 = c * (img**g)
res2 = c * (img.astype(np.float32)**g)

res2 = cv2.normalize(res2,None,0,255,cv2.NORM_MINMAX)

cv2.imshow("original",img)
cv2.imshow("res1",res1.astype(np.uint8))
cv2.imshow("res2",res2.astype(np.uint8))

