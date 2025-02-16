def gen_anagram(s,anagram=""):
    anagrams=[]
    
    if not s:
        print(anagram)
        anagrams.append(anagram)
    else:
        for i in range(len(s)):
            gen_anagram(s[:i]+s[i+1:],anagram+s[i])
    return anagrams

anagrams=gen_anagram("abcd")
print(anagrams)
