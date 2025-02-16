class Stack:
    def __init__(self):
        self.stack = []
        
    def push(self,val):
        self.stack.append(val)
    def pop(self):
        return self.stack.pop()
    def display(self):
        for item in self.stack:
            print(item)

class Queue:
    def __init__(self):
        self.queue = []
        
    def push(self,val):
        self.queue.append(val)
    def pop(self):
        if not self.queue:
            return "Nothing"
        return self.queue.pop(0)
    def display(self):
        for item in self.queue:
            print(item, end=' ')

ch = int(input("\n1. Queue Operations\n2. Stack Operations\n Enter choice: "))

if ch==1:
    q = Queue()
    while True:
        chq =int(input("\n1. Insert\n2. Delete\n3. Display\n4. Exit\n Enter choice: "))
        if chq==1:
            val =int(input("Enter value :"))
            q.push(val)
        elif chq==2:
            x=q.pop()
            if x=="Nothing":
                print("Empty Queue")
            print(f"{x} popped")
        elif chq==3:
            q.display()
        else:
            break
elif ch==2:
    s = Stack()
    while True:
        chq =int(input("\n1. Push\n2. Pop\n3. Display\n4. Exit\n Enter choice: "))
        if chq==1:
            val =int(input("Enter value :"))
            s.push(val)
        elif chq==2:
            x=s.pop()
            print(f"{x} popped")
        elif chq==3:
            s.display()
        else:
            break    

