size = int(input("Masukan panjang array : "))

arr = []

for i in range(size):

    element = int(input(f'\n array index ke {i} : '))

    arr.append(element)

print("Element Terkecil (Smallest) : ", min(arr))

print("Element Terbesar (Largest) : ", max(arr))
