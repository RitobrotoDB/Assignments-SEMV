##password check
##ABd1234@l,aFl#,2w3E*,2We3345
def check(password):
    chs,has_lower = "abcdefghijklmnopqrstuvwxyz",False
    uchs,has_upper ="abcdefghijklmnopqrstuvwxyz".upper(),False
    nos,hasno="0123456789",False
    schs,has_special="S#@",False
    if 6<=len(password)<=12:
        for ch in password:
            if ch in chs:
                has_lower = True
            if ch in uchs:
                has_upper=True
            if ch in nos:
                hasno = True
            if ch in schs:
                has_special = True
                
        return has_lower and has_upper and hasno and has_special

    else:
        return False
        

string = input("Enter the passwords separated by comma: ")
passwords = string.split(",")


for password in passwords:
    if check(password):
        print(f"{password} is correct")
    else:
        print(f"{password} is incorrect")
