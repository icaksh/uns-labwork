namaFile = str(input("Masukkan nama file: "))
#namaFile = "/home/icaksh/Coolyeah/Python-Projects-Protek/Chapter 07/Latihan/contohfile.txt"
try:
    selesai = False
    while not(selesai):
        dataTambah = str(input("Data yang mau ditambahkan: "))
        f = open(namaFile, "a")
        f.write("{0}\n".format(dataTambah)) # I dont know why a not make a new line
        f.close()
        choice = None
        while choice not in("y","n"):
            choice = str(input("Mau lagi (y/n)?: "))
            if(choice == "y"):
                selesai = False
            elif(choice == "n"):
                selesai = True
            else:
                print("Mohon masukkan pilihan (y/n)")

except FileNotFoundError:
    print("File tidak ditemukan, apakah lokasi file sudah benar?")