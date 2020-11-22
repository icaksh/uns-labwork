buah ={'apel' : 5000, 'jeruk' : 8500, 'mangga' : 7800, 'duku' :6500}

def checkOut(databaseBuah,namaBuah,banyakKilo):
    hargaBuah = databaseBuah.get(namaBuah)
    totalHarga = hargaBuah * banyakKilo
    return totalHarga

print("Daftar buah:")
for i in buah.keys():
    print("{0}".format(i))

totalHarga = 0
selesai = False
while not(selesai):
    while True:
        namaBuah= str(input("Nama buah yang akan dibeli             : "))
        if(not(namaBuah in buah.keys())):
            print("Nama buah tidak ditemukan")
            continue
        else:
            break
    while True:
        try:
            kiloan = float(input("Berapa kg (gunakan . pengganti koma)   : "))
        except ValueError:
            print("Mohon masukkan hanya angka")
            continue
        else:
            break
    totalHarga = totalHarga + checkOut(buah,namaBuah,kiloan)
    choice = None
    while choice not in("y","n"):
        choice = str(input("\nBeli lagi (y/n)?: "))
        if(choice == "y"):
            selesai = False
            print("")
        elif(choice == "n"):
            selesai = True
        else:
            print("Mohon masukkan pilihan (y/n)")
print("\n--------------------")
print("Total harga: {0}".format(totalHarga))