import cv2

img_red = cv2.imread('image_red.png',cv2.COLOR_BGR2RGB)



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

