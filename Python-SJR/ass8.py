def descending_bubble_sort(arr):


    n = len(arr)
    for i in range(n):
        for j in range(0, n-i-1):
            if arr[j] < arr[j + 1]:
                arr[j], arr[j + 1] = arr[j + 1], arr[j]
    return arr


def ascending_bubble_sort(arr):

    n = len(arr)
    for i in range(n):
        for j in range(0, n-i-1):
            if arr[j] > arr[j + 1]:
                arr[j], arr[j + 1] = arr[j + 1], arr[j]
    return arr

def merge(arr):
    merged=0
    for digit in arr:
        merged=(merged*10)+digit

    return merged

def numbertoarr(num):
    a=[0,0,0,0]
    i=0
    while num>0:
        b=num%10
        a[i]=b
        num=num//10
        i=i+1
    return a[::-1]
#   return a

num=int(input("Enter number : "))

if(num<=0):
    print("Negative number not allowed")
    exit(0)

if(len(numbertoarr(num))<4):
    print("4 digit number required")
    exit(0)


copy=num
arr=[0,0,0,0]
i=0

arr=numbertoarr(num)


    
print(descending_bubble_sort(arr))
print(ascending_bubble_sort(arr))
result=0
c=0


while True:
    desc_number=0
    asc_number=0
    
    desc_arr=descending_bubble_sort(arr)
    desc_number=merge(desc_arr)

    asc_arr=ascending_bubble_sort(arr)
    asc_number=merge(asc_arr)

    result=desc_number-asc_number
    
    c=c+1

    if(result==6174):
        break
    arr=numbertoarr(result)


print("Number of iterations :",c)

    
