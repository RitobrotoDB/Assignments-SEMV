

def find_sequence(arr):

    all = []
    current = [arr[0]]

    for i in range(1,len(arr)):
        if arr[i] >= arr[i-1]:
            current.append(arr[i])
        else:
            all.append(current)
            current = [arr[i]]

    all.append(current)

    return all
    
lst = [int(input()) for i in range(7)]

sequence = find_sequence(lst)

longest = max(sequence,key=len)

print(longest)
