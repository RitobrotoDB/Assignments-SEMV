def reverse(num):
    rev=0
    while num>0:
        b=num%10
        rev=(rev*10)+b
        num=num//10

    return rev

def palindrome(num):

    if reverse(num)==num:
        return 1
    else:
        return 0

num=int(input("Enter number : "))
count=0

if num<=0:
    print("Positive/Non-zero number")
    exit(1)

while True:
    rev=reverse(num)
    num=num+rev
    count=count+1
    if palindrome(num)==1:
        print("Iterations :",count)
        break
    elif count>1000:
        print("Reverse not possible")
        break

print("Palindrome is ",num)
