import os, sys, random

def gacha(n,file):
    file = open(file,'w')
    for i in range(n):
        file.write("{0}|{1}\n".format(random.randint(1,100),random.randint(1,100)))
    file.close()
    return True

def jumlahkan(file,filer):
    file = open(file,'r')
    number = file.readlines()
    filer = open(filer,'w')
    for i in number:
        number = i.split('|')
        hasilOperasi = int(number[0]) + int(number[1].replace("\n",""))
        filer.write("{0}\n".format(hasilOperasi))
    filer.close()
    file.close()
    return True

def isFileExist(file):
    if(os.path.isfile(file)):
        return True

file = os.path.join(sys.path[0],"txt/5.txt").replace("/","\\")
while True:
    pilihan = None
    while pilihan not in ("A","B","C"):
        print("Menu :\nA. Generate Random Number\nB. Jumlahkan A|B\nC. Keluar")
        pilihan = str(input("\nPilihan Menu: "))
        if(pilihan == "A"):
            if(not(isFileExist(file))):
                print("File tidak ditemukan, sedang membuat file baru")
                if not(os.path.isdir(os.path.join(sys.path[0],"txt"))):
                    os.mkdir(os.path.join(sys.path[0],"txt"))
                open(file, 'a').close()
            while True:
                try:
                    n = int(input("Masukkan jumlah baris bilangan:"))
                    break
                except ValueError:
                    print("Mohon masukkan hanya angka")
                    continue
                else:
                    exit()
            if gacha(n,file):
                print("\nBerhasil menambahkan data random")
            else:
                print("Terjadi suatu kesalahan\n")
                exit()
        elif(pilihan == "B"):
            filer = file.replace(".txt","-result.txt")
            if(not(isFileExist(file))):
                print("File tidak ditemukan\n")
                exit()
            else:
                print("File data sumber ditemukan\nSedang melakukan aksi penjumlahan")
            if(jumlahkan(file,filer)):
                print("Berhasil melakukan aksi, file hasil tersimpan di {0}\n".format(filer))
        elif(pilihan == "C"):
            exit()
        else:
            print("Pilihan tidak ditemukan\n")
            continue
