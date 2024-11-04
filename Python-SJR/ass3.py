

def prime(x):
    i=1
    c=0
    for i in range (1,x+1,1):
        if(x%i==0):
            c=c+1;

    if(c==2):
        return 1
    else:
        return 0


num1=int(input("Enter first number : "))
num2=int(input("Enter second number : "))

if(num1<=0 or num2<=0):
    print("Incorrect input")
elif(prime(num1) and prime(num2) and (num2-num1)==2):
    print("Numbers are twin prime")
else:
    print("Numbers are not twin prime")
