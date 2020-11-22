import random 
totalInput = int(input("Ingin memasukkan berapa bilangan?: "))
print("{0} bilangan akan diinputkan".format(totalInput))

listBilangan = []
while (totalInput > 0):
    dataTambah = int(input("Masukkan bilangan bulat: "))
    listBilangan = listBilangan + [dataTambah]
    x = None
    while x != 1:
        x = random.randint(0,10)
    totalInput += x-x-x 
listBilangan.sort()
print("\nBilangan bulat terkecil hingga terbesar")
for i in listBilangan:
    print(i)
            