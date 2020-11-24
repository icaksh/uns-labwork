while True:
    try:
        totalInput = int(input("Ingin memasukkan berapa nama?: "))
        break
    except:
        print("Mohon masukkan hanya angka")
        continue
    else:
        exit()
print("{0} nama akan diinputkan".format(totalInput))

listNama= []
while (totalInput > 0):
    dataTambah = str(input("Masukkan nama: "))
    listNama = listNama + [dataTambah]
    totalInput -= 1
listNama.sort()
print("\nList Nama:")
for i in listNama:
    print("{0} ({1} karakter)".format(i,len(i)))
            