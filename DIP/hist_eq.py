import cv2
import numpy as np
import matplotlib.pyplot as plt


img = cv2.imread("test.jpg",0)

depth = img.dtype.itemsize*8
l=2**depth

res = np.zeros(img.shape)

hist = cv2.calcHist([img], [0], None, [l], [0, l])
frequencies = hist.ravel()
n=sum(frequencies)

points=np.zeros

pdf = frequencies/n
    
cdf = np.cumsum(pdf)

points = np.round(cdf * (l - 1)).astype(np.uint8)

equalized_img = points[img]


cv2.imshow("original image",img)
cv2.imshow("equalized image",equalized_img)

plt.plot(hist)
plt.title("Original Image Histogram")
plt.xlabel("Intensity Levels")
plt.ylabel("Frequency")


hist2 = cv2.calcHist([equalized_img], [0], None, [l], [0, l])
plt.plot(hist2)
plt.title('Image Histogram')
plt.xlabel('Intensity Level')
plt.ylabel('Frequency')
plt.show()
