def uniqueCharacters(str):
    for i in range(len(str)):
        for j in range(i + 1, len(str)):
            if(str[i] == str[j]):
                return False
    return True


str = "Jelly Techno"

if(uniqueCharacters(str)):
    print("Text ", str, " termasuk uniq karakter")
else:
    print("Text ", str, " termasuk duplikat karakter")
