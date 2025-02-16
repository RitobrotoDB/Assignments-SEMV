
def vowels(line):
    counter=0
    vstr = "aeiou"
    for char in line.lower():
        for vc in vstr:
            if char == vc:
                counter += 1
    return counter


# src_path = input()
# dest_path = input()

src = open("source.txt",mode='r')
# text = src.read()
# print(text)
with open("destination.txt", mode='w') as dest:
    for line in src:
        cvl = vowels(line)
        line = line.strip()
        line += f" vowels: {cvl}"
        print(line)
        dest.write(line)
src.close()
