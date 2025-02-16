def expo(b,p):
    if p==0:
        return
    return b + expo(b,p-1)
    
res = expo(2,5)
print(res)
