import cv2
import numpy as np

l1 = int(input("Enter L1 :"))
l2 = int(input("Enter L2 :"))

img = cv2.imread("Lena.tif",0)
res_img_bg = img.copy()
res_img = img.copy()

for i in range(img.shape[0]):
    for j in range(img.shape[1]):
        if(l1 <= res_img_bg[i,j] and res_img_bg[i,j]<= l2):
            res_img_bg[i,j] = 255
        
for i in range(img.shape[0]):
    for j in range(img.shape[1]):
        if(l1 <= res_img[i,j] and res_img[i,j]<= l2):
            res_img[i,j] = 255
        else:
            res_img[i,j] = 0


cv2.imshow("original image",img)
cv2.imshow("Intensity level slicing with background",res_img_bg)
cv2.imshow("Intensity level slicing without background",res_img)
