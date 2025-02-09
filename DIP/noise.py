import cv2
import numpy as np

def add_gaussian_noise(img,mean,std):
    noise = np.random.normal(mean,std,img.shape).astype(np.uint8)
    img = cv2.add(img,noise)
    
    return img
    
def add_salt_and_pepper_noise(img,noise_ratio):
    noisy_img = img.copy()
    h,w = img.shape
    noise_pixels = int(h*w*noise_ratio)

    for _ in range(noise_pixels):
        row, col = np.random.randint(0,h),np.random.randint(0,w)
        if np.random.rand() < 0.5:
            noisy_img[row,col] = 0
        else:
            noisy_img[row,col] = 255
    return noisy_img

def padding(img):
    return np.pad(img,1,mode='constant')
        
def remove_gaussian_noise(img):
    padded=padding(img)
    gauss_filter = np.array([[1,2,1],[2,4,2],[1,2,1]])
    res_img = np.zeros(img.shape)

    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            neighbour_pixels = np.array([ [ padded[i-1,j-1],padded[i-1,j],padded[i-1,j+1] ],
                            [ padded[i,j-1],  padded[i,j],  padded[i,j+1] ],
                            [ padded[i+1,j-1],padded[i+1,j],padded[i+1,j+1] ]
                           ])
            res_img[i,j]=(1/16)*np.sum(gauss_filter*neighbour_pixels)
            
    cv2.imshow("Smooth image(Gauss)",res_img.astype(np.uint8))


def remove_snp(img):
    padded=padding(img)
    
    res_img = np.zeros(img.shape)

    for i in range(img.shape[0]):
        for j in range(img.shape[1]):
            neighbour_pixels = np.array([ [ padded[i-1,j-1],padded[i-1,j],padded[i-1,j+1] ],
                            [ padded[i,j-1],  padded[i,j],  padded[i,j+1] ],
                            [ padded[i+1,j-1],padded[i+1,j],padded[i+1,j+1] ]
                           ])
            res_img[i,j]=np.median(neighbour_pixels)

    
    cv2.imshow("Smooth image(SNP)",res_img.astype(np.uint8))



    
img = cv2.imread("Lena.tif",0)

ch=int(input("""
                1.Add Gaussian noise
                2.Add salt-and-pepper noise
                3.Remove Gaussian noise
                4.Remove salt-and-pepper noise\nEnter choice: """))

if ch == 1:  
    agn_img = add_gaussian_noise(img, mean=0, std=1)
    cv2.imshow("Image with Gaussian Noise",agn_img)
elif ch == 2: 
    snp_img= add_salt_and_pepper_noise(img, noise_ratio=0.02)
    cv2.imshow("Image with Salt and Pepper noise",snp_img)
elif ch == 3:
    
    noisy_img = add_gaussian_noise(img, mean=0, std=1)
    cv2.imshow("Image with Gaussian Noise",noisy_img.astype(np.uint8))
    remove_gaussian_noise(noisy_img)
    
    
elif ch == 4:
    noisy_img = add_salt_and_pepper_noise(img, noise_ratio=0.02)
    cv2.imshow("Image with SNP Noise",noisy_img.astype(np.uint8))
    remove_gaussian_noise(noisy_img)

