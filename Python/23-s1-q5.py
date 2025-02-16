info ={
0:{'Name':'Ashish Biswas','CGPA':2.77},
1:{'Name':'Ron Swanson','CGPA':8.67},
2:{'Name':'Dwight K. Schrute','CGPA':7.89}
}
cgpa=[]

for student in info.keys():
    initial = info[student]['Name'][0]+"."
    space = info[student]['Name'].find(" ")
    cgpa.append(info[student]['CGPA'])
    print(initial,info[student]['Name'][space+1:len(info[student]['Name'])])

max_cgpa = max(cgpa)

print("\nStudent with highest cgpa")
for student in info.keys():
    if info[student]['CGPA'] == max_cgpa:
        for key,value in info[student].items():
            print(key,": ",value)

print("\nStudent with cgpa less than 3")
for student in info.keys():
    if info[student]['CGPA'] <= 3.0:
        for key,value in info[student].items():
            print(key,": ",value)

