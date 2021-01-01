from datetime import date, timedelta
import os, sys


def cekGanda(file,kode):
    file = open(file,'r')
    fileLine = file.read().splitlines()
    tercari = False
    for i in fileLine:
        data = i.split("|")
        if (data[0] == kode):
            return True
        else:
            return False
def writeToText(kode,nama,title,file):
    file = open(file,'a')
    file.write("{0}|{1}|{2}|{3}|{4}\n".format(kode,nama,title,date.today(),(date.today() + timedelta(days=7))))
    file.close()
    return True
def printText(file):
    print("\nData Peminjaman Buku\n")
    file = open(file,'r')
    print(file.read())
    file.close()
    return True
def isFileExist(file):
    if(os.path.isfile(file)):
        return True

file = os.path.join(sys.path[0],"database.txt").replace("/","\\")
while True:
    pilihan = None
    while pilihan not in ("A","B","C"):
        print("Menu :\nA. Tambah Data Peminjam\nB. Tampilkan Data Peminjam\nC. Keluar")
        pilihan = str(input("\nPilihan Menu: "))
        if(pilihan == "A"):
            if(not(isFileExist(file))):
                print("File tidak ditemukan, sedang membuat file baru")
                open(file, 'a').close()
            selesai = False
            while not(selesai):
                kode = str(input("Masukkan Kode Member      : "))
                if cekGanda(file,kode):
                    print("Kode {0} telah ada dalam database\n".format(kode))
                    break
                nama = str(input("Masukkan Nama Member      : "))
                title = str(input("Masukkan Judul Buku       : "))
                if writeToText(kode,nama,title,file):
                    print("\nBerhasil menambahkan data ke file\n")
                else:
                    print("Terjadi suatu kesalahan\n")
                    exit()
                pilihan = None
                while pilihan not in("y","n"):
                    pilihan = str(input("Ulangi input lagi (y/n)? :"))
                    if(pilihan =="y"):
                        selesai = False
                    elif(pilihan == "n"):
                        selesai = True
                    else:
                        print("Mohon masukkan pilihan (y/n)")
        elif(pilihan == "B"):
            if(not(isFileExist(file))):
                print("File tidak ditemukan\n")
                exit()
            if(not(printText(file))):
                print("Terjadi suatu kesalahan\n")
                exit()
        elif(pilihan == "C"):
            exit()
        else:
            print("Pilihan tidak ditemukan\n")
            continue
