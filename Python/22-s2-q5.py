import random

nums = [random.choice([0,1]) for _ in range(15)]


zeros = []
c=0

for i in range(len(nums)-1):
    if nums[i] == nums[i+1] == 0:
        start = i
        c += 1
    else:
        end=i+1
        zeros.append(c)
        c=0

        
print(nums)
print(zeros)
print(max(zeros))

print(f"start: {start} end: {end}")
