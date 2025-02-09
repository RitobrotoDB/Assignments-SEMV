import cv2
import numpy as np



def laplacian(img):
    lap_filter = np.array([[0,-1,0],[-1,4,-1],[0,-1,0]])
    padded = np.pad(img,1,mode='constant')
    edge_img = np.zeros(img.shape)
    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            neighbour_pixels = np.array(padded[i:i+3,j:j+3])
            edge_img[i,j] = np.sum(lap_filter*neighbour_pixels)

    sharpened_img=np.zeros(img.shape)
    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            sharpened_img[i,j] = img[i,j] + edge_img[i,j]

    cv2.imshow("Laplacian Edge detected",edge_img.astype(np.uint8))
    cv2.imshow("Laplacian Sharpened",sharpened_img.astype(np.uint8))

def unsharp(img):
    smooth_img = np.zeros(img.shape)
    padded = np.pad(img,1,mode='constant')
    
    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            neighbour = np.array(padded[i:i+3,j:j+3])
            smooth_img[i,j] = np.median(neighbour)

    detail_img = img - smooth_img.astype(np.uint8)
    sharpened_img = img + 2*detail_img

    cv2.imshow("Unsharp Edge detected",detail_img)
    cv2.imshow("Unsharp Sharpened",sharpened_img.astype(np.uint8))    
    

img = cv2.imread("Lena.tif",0)
ch = int(input("""
1. Laplacian Edge detection and Sharpening
2. Unsharp masking edge detection and sharpening
\nEnter choice:"""))

if ch==1 :
    laplacian(img)
else :
    unsharp(img)

