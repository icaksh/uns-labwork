def bintang1(n):
    i = -1 + 2*n
    j = 1
    while j < i:
        bintang = "*" * j
        print(bintang.center(i))
        j += 2
def bintang2(n):
    j = -1 + 2*n
    k = j
    i = 1
    while j >= i:
        bintang = "*" * j
        print(bintang.center(k))
        j -= 2

def bintang(n):
    first = second = (n //2) + 1
    bintang1(first)
    bintang2(second)

while True:
    try:
        n = int(input("Masukkan bilangan bulat positif ganjil: "))
        if(n<0):
            print("Bilangan bulat tidak positif")
            continue
        if((n%2)==0):
            print("Bilangan bulat tidak ganjil")
            continue
    except ValueError:
        print("Mohon masukkan hanya angka")
        continue
    else:
        break
bintang(n)
