money=int(input("Enter money : "))

if(money<0):
    print("Negative taka hoyna syar")
    exit(1)
if(money==0):
    print("no money")
    exit(1)


fivehundred=money//500
money=money%500

twohundred=money//200
money=money%200

hundred=money//100
money=money%100money=int(input("Enter money : "))

if(money<0):
    print("Negative taka hoyna syar")
    exit(1)
if(money==0):
    print("no money")
    exit(1)

twenty=money//20
money=money%20

if(money!=0):
    print("invalid amount")
    exit(1)

print("500 : ",fivehundred)
print("200 : ",twohundred)
print("100 : ",hundred)
print("20 : ",twenty)
