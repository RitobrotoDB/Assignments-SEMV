def factorial(a):
    fact=1
    for i in range (1,a+1,1):
        fact=fact*i
    return fact



num=int(input("Enter a number : "))
c=num
k=0
while num > 0:
    b=num%10
    k=k+factorial(b)
    num=num//10

if(k==c):
    print("Number is a Krishnamurthy number")
else:
    print("Not Krishnamurthy")
