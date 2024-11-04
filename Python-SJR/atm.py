currency ={

    '500':5,
    '200':10,
    '100':7,
    '20':9

}


money=int(input("Enter money : "))

if(money<0):
    print("Negative taka hoyna syar")
    exit(1)
if(money==0):
    print("no money")
    exit(1)


def avaiable(a):

    if(a<currency['a']):

