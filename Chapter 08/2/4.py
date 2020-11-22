dataSayur = ["bayam","kangkung","wortel","selada"]

def printData(x):
    print("Data Sayur")
    for i in x:
        print("{0}".format(i))
    print("")
while True:
    print("Menu :\nA. Tambah Data Sayur\nB. Hapus Data Sayur\nC. Tampilkan Data Sayur\nD. Keluar")
    choice = None
    while choice not in("A","B","C","D"):
        choice = str(input("\nPilihan Menu: "))
        if(choice == "A"):
            printData(dataSayur)
            namaSayurTambahan = str(input("Masukkan nama sayur yang ingin ditambahkan: "))
            if namaSayurTambahan in dataSayur:
                print("Nama sayur telah terdaftar dalam database")
            else:
                dataSayur.append(namaSayurTambahan)
                print("{0} telah ditambahkan dalam list".format(namaSayurTambahan))
                print("")
                printData(dataSayur)
        elif(choice == "B"):
            printData(dataSayur)
            namaSayurHapus = str(input("\nMasukkan nama sayur yang ingin dihapus: "))
            if namaSayurHapus in dataSayur:
                dataSayur.remove(namaSayurHapus)
                print("{0} telah dihapus dalam list".format(namaSayurHapus))
                print("")
                printData(dataSayur)
            else:
                print("Nama sayur tidak ditemukan\n")
        elif(choice == "C"):
            printData(dataSayur)
        elif(choice == "D"):
            exit()
        else:
            print("Mohon masukkan pilihan yang tersedia")