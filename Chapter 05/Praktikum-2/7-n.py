from random import randint
k = 0
while True:
    bil = randint(0, 10)
    print(bil)
    k += 1
    if bil == 5:
        print("Jumlah perulangan: {0}".format(k))
        break