import cv2
import numpy as np

img = cv2.imread("Lena.tif",0)
res=img.copy()
print(img)
s = int(input("Enter seed pixel :"))
t = int(input("Enter threshold value :"))

depth = img.dtype.itemsize*8
l=2**depth

points = []

for num in range(0,l):
    if abs(num-s)<=t :
        points.append(num)


for i in range(img.shape[0]):
    for j in range(img.shape[1]):
        for point in points:
            if res[i,j]==point:
                res[i,j]=0
    
cv2.imshow("Original Image",img)
cv2.imshow("Result Image",res)
