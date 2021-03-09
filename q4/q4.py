num = int(input("Masukan Angka: "))

factorial = 1

if num < 0:
    print("Faktorial tidak boleh minus")
elif num == 0:
    print("Faktorial 0 adalah 1")
else:
    for i in range(1, num + 1):
        factorial = factorial*i
    print("Faktorial ", num, "adalah", factorial)
