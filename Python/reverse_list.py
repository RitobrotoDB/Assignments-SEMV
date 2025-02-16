def reverse(lst):
    if not lst:
        return []
    return [reverse(lst[-1]) if isinstance(lst[-1],list) else lst[-1]]+reverse(lst[:-1])

lst = [[1,2],[3,[4,5]],6]
new = reverse(lst)
print(new)
