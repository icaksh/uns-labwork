namaFile = str(input("Masukkan nama file: "))
#namaFile = "/home/icaksh/Coolyeah/Python-Projects-Protek/Chapter 07/Latihan/contohfile.txt"
try:
    fopen = open(namaFile, "r")
    print(fopen.read())
except FileNotFoundError:
    print("File tidak ditemukan, apakah lokasi file sudah benar")