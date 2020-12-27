import os, sys

''' JANGAN CUMA COPAS DAN GANTI VARIABEL! '''

def writeToText(nim,nama,alamat,file):
    file = open(file,'a')
    file.write("{0}|{1}|{2}\n".format(nim,nama,alamat))
    file.close()
    return True
def printText(file):
    print("\nData Mahasiswa\n")
    file = open(file,'r')
    print(file.read())
    file.close()
    return True
def isFileExist(file):
    if(os.path.isfile(file)):
        return True

file = os.path.join(sys.path[0],"txt/2.txt").replace("/","\\")
while True:
    pilihan = None
    while pilihan not in ("A","B","C"):
        print("Menu :\nA. Tambah Data Mahasiswa\nB. Tampilkan Data Mahasiswa\nC. Keluar")
        pilihan = str(input("\nPilihan Menu: "))
        if(pilihan == "A"):
            if(not(isFileExist(file))):
                print("File tidak ditemukan, sedang membuat file baru")
                if not(os.path.isdir(os.path.join(sys.path[0],"txt"))):
                    os.mkdir(os.path.join(sys.path[0],"txt"))
                open(file, 'a').close()
            selesai = False
            while not(selesai):
                nim = str(input("Masukkan NIM          :"))
                nama = str(input("Masukkan Nama Mhs     :"))
                alamat = str(input("Masukkan Alamat     :"))
                if writeToText(nim,nama,alamat,file):
                    print("\nBerhasil menambahkan data ke file\n")
                else:
                    print("Terjadi suatu kesalahan\n")
                    exit()
                pilihan = None
                while pilihan not in("y","n"):
                    pilihan = str(input("Ulangi input lagi (y/n)?"))
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
