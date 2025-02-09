import cv2
import numpy as np

img = cv2.imread("Lena.tif",0)
res = np.zeros(img.shape)

depth = img.dtype.itemsize*8
L=2**depth
##print(L)

r1 = float(input("Enter r1 :"))
r2 = float(input("Enter r2 :"))
s1=float(input("Enter s1 :"))
s2=float(input("Enter s2 :"))

alpha = s1/r1
beta = (s2-s1)/(r2-r1)
gamma = ((L-1)-s2)/((L-1)-r2)

for i in range(img.shape[0]):
    for j in range(img.shape[1]):
        r=img[i,j]
        if(r>=0 and r<r1):
            res[i,j]=alpha*r
        elif(r>=r1 and r<r2):
            res[i,j]=beta*(r-r1) + s1
        elif(r>=r2 and r<L):
            res[i,j]=gamma*(r-r2) + s2

cv2.imshow("Original image",img)
cv2.imshow("resultant image",res.astype(np.uint8))

