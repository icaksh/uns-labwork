def bintang(n):
    i = -1 + 2*n
    j = 1
    while j <= i:
        bintang = "*" * j
        print(bintang.center(i))
        j += 2

while True:
    try:
        n = int(input("Masukkan bilangan bulat positif: "))
        if(n<0):
            print("Bilangan bulat tidak positif")
            continue
    except ValueError:
        print("Mohon masukkan hanya angka")
        continue
    else:
        break
bintang(n)
