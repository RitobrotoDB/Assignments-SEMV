import cv2
import numpy as np
import matplotlib.pyplot as plt

img = cv2.imread("Lena.tif",0)

hist = cv2.calcHist([img],[0],None,[256],[0,256])
frequencies = hist.ravel()

n = sum(frequencies)

pdf = frequencies/n

cdf = np.cumsum(pdf)

points=np.round(cdf*255)

points = points.astype(np.uint8)

eqimg = points[img]

cv2.imshow("Original image",img)
cv2.imshow("Equalized image",eqimg)

histeq = cv2.calcHist([eqimg],[0],None,[256],[0,256])

plt.plot(hist)
plt.title("Original Histogram")
plt.xlabel("Intensity Level")
plt.ylabel("Frequency")

plt.plot(histeq)
plt.title("Equalized Histogram")
plt.xlabel("Intensity Level")
plt.ylabel("Frequency")

plt.show()
