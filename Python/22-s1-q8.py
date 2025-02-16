class Length:
    def __init__(self,len):
        self.len=len
        self.feet=0
        self.inch=0
        
    def setLength(self):
        whole,decimal = str(self.len).split('.')
        self.feet = int(whole)
        self.inch = int(decimal)
        
    def getLength(self):
        return (self.feet,self.inch)
        
    def __add__(self,other):
        f=self.feet + other.feet
        i=self.inch + other.inch
        
        if self.inch+other.inch >=12 :
            f+=1
            i=i-12
        return (f,i)
    def __str__(self):
        return f"{self.feet} feet and {self.inch} inches"
        
len1 = Length(5.6)
len2 = Length(4.8)
len1.setLength()
len2.setLength()
print(len1+len2)
