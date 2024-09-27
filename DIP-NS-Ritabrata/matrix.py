import cv2

img_red = cv2.imread('image_red.png')
img_green = cv2.imread('image_green.png')
img_blue = cv2.imread('image_blue.png')
img_red = cv2.cvtColor(img_red,cv2.COLOR_BGR2RGB)
img_green = cv2.cvtColor(img_green,cv2.COLOR_BGR2RGB)
img_blue = cv2.cvtColor(img_blue,cv2.COLOR_BGR2RGB)

def display(channel,color,img):
    col=["Red","Green","Blue"]
    print("\nMatrix for ",col[channel],"channel of ",color,"rectangle is ")
    for i in img:
        for j in i:
            print(j[channel], end=' ')
        print()

print("Red Image dimensions : ",img_red.shape)
display(0,'Red',img_red)
display(1,'Red',img_red)
display(2,'Red',img_red)
print("\nGreen Image dimensions : ",img_green.shape)
display(0,'Green',img_red)
display(1,'Green',img_red)
display(2,'Green',img_red)
print("\nBlue Image dimensions : ",img_blue.shape)
display(0,'Blue',img_red)
display(1,'Blue',img_red)
display(2,'Blue',img_red)



