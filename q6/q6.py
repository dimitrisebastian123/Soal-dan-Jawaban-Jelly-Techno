# Program to display the Fibonacci sequence up to n-th term

nterms = int(input("masukan angka "))
n1, n2 = 0, 1
count = 0

if nterms <= 0:
    print("Masukan Angka Integer Positif")
elif nterms == 1:
    print("Fibonacci sequence upto", nterms, ":")
    print(n1)
else:
    print("Fibonacci sequence:")
    while count < nterms:
        print(n1)
        nth = n1 + n2
        n1 = n2
        n2 = nth
        count += 1
