def length(a):
    c=0
    while a > 0:
        b=a%10
        c=c+1
        a=a//10
    return c

num=int(input("Enter a number : "))

if(num<=0):
    exit(1)

sqr=num**2
numl=length(num)
slc=pow(10,numl)
sumdigit=0
while sqr > 0:
    b=sqr%slc
    sumdigit=sumdigit+b
    sqr=sqr//slc


if(sumdigit==num):
    print("Kaprekar")
else:
    print("Not")
