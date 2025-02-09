import cv2
import numpy as np
import math

img = cv2.imread("Lena.png",0)
padded = np.pad(img,1,mode='constant')

res_img = np.zeros(img.shape)

sobel_gx = np.array([ [-1,0,1],[-2,0,2],[-1,0,1] ])
sobel_gy = sobel_gx.T

for i in range(img.shape[0]):
    for j in range(img.shape[1]):
       neighbour_pixels = np.array([ [ padded[i-1,j-1],padded[i-1,j],padded[i-1,j+1] ],
                            [ padded[i,j-1],  padded[i,j],  padded[i,j+1] ],
                            [ padded[i+1,j-1],padded[i+1,j],padded[i+1,j+1] ]
                           ])
       gx=np.sum(sobel_gx*neighbour_pixels)
       gy=np.sum(sobel_gy*neighbour_pixels)
       g=math.sqrt((gx**2)+(gy**2))
       res_img[i,j]=g

print(padded)
cv2.imshow("Sobel Image",res_img.astype(np.uint8))
