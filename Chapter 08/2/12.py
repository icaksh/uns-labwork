buah = {'apel' : 5000, 'jeruk' : 8500, 'mangga' : 7800, 'duku' :6500}

def printDataBuah(databaseBuah):
    print("Data buah:\n")
    for i, j in databaseBuah.items():
        print("- {0} (Harga Rp{1} / kg)".format(i,j))
    print("")

def checkOut(databaseBuah,namaBuah,banyakKilo):
    hargaBuah = databaseBuah.get(namaBuah)
    totalHarga = hargaBuah * banyakKilo
    return totalHarga

while True:
    print("Menu :\nA. Tambah Data Buah\nB. Beli Buah\nC. Hapus Data Buah\nD. Keluar")
    choice = None
    while choice not in("A","B","C","D"):
        choice = str(input("\nPilihan Menu: "))
        if(choice == "A"):
            printDataBuah(buah)
            namaBuahTambahan = str(input("\nMasukkan nama buah yang ingin ditambahkan: "))
            if namaBuahTambahan in buah.keys():
                print("Nama buah telah terdaftar dalam database")
            else:
                while True:
                    try:
                        hargaBuahTambahan = int(input("Masukkan harga buah (hanya angka): "))
                    except ValueError:
                        print("Mohon masukkan hanya angka")
                        continue
                    else:
                        break
                buah[namaBuahTambahan] = hargaBuahTambahan
                print("{0} dengan harga {1} telah ditambahkan dalam database".format(namaBuahTambahan,hargaBuahTambahan))
                print("")
                printDataBuah(buah)
        elif(choice == "B"):
            printDataBuah(buah)
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
        elif(choice == "C"):
            printDataBuah(buah)
            namaBuahHapus = str(input("\nMasukkan nama buah yang ingin ditambahkan: "))
            if namaBuahHapus in buah.keys():
                del buah[namaBuahHapus]
                print("Nama buah {0} telah terhapus dalam database".format(namaBuahHapus))
                print("")
                printDataBuah(buah)
            else:
                print("Nama buah tidak ditemukan\n")
        elif(choice == "D"):
            exit()
        else:
            print("Mohon masukkan pilihan yang tersedia")