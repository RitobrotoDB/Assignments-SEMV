def compute_gcd(x, y):

   while(y):
       x, y = y, x % y
   return x


def compute_lcm(x, y):
   lcm = (x*y)//compute_gcd(x,y)
   return lcm


num1=int(input("Enter first number : "))
num2=int(input("Enter second number : "))
print("The H.C.F is", compute_gcd(num1, num2))
print("The L.C.M. is", compute_lcm(num1, num2))
