import cv2
import numpy as np
import math

img = cv2.imread("Lena.tif",0)



c = 255/np.log(1+np.max(img))

res = c* np.log(1+img.astype(np.float32))

res = cv2.normalize(res,None,0,255,cv2.NORM_MINMAX)


cv2.imshow("Power law",res.astype(np.uint8))
