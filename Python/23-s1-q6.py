src = open("source.txt",mode='r')

data = src.read()

while True:
    ch = input("Enter character : ")

    if ch in data:
        print("Character found in file")
        removed = data.replace(ch,'')
        with open("destination.txt",'w') as dest:
            dest.write(removed)
        break
    else:
        print("Character not found, re-enter")


   
