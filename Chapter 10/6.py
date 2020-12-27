import os, sys

def writeToText(pesan,file):
    file = open(file,'a')
    file.write("{0}\n".format(pesan))
    file.close()
    return True

def caesarEncrypt(file,n,filer):
    file = open(file,'r')
    filer = open(filer,'w')
    data = file.readlines()
    for i in data:
        i = i.replace("\n","")
        dataLis = list(i)
        dataList =[]
        for j in dataLis:
            if(j.isalpha()):
                if(j.isupper()):
                    asciiText = 65 + (((ord(j) % 65)+n) % 26)
                elif(j.islower()):
                    asciiText = 97 + (((ord(j) % 97)+n) % 26)
                else:
                    print("Error")
                    exit()
                dataListNew = chr(asciiText)
            else:
                dataListNew = j
            dataList = dataList + [dataListNew]
        result = ''.join(dataList)
        filer.write("{0}\n".format(result))
    file.close()
    filer.close()
    return True

def isFileExist(file):
    if(os.path.isfile(file)):
        return True
    
file = os.path.join(sys.path[0],"txt/6.txt").replace("/","\\")
while True:
    pilihan = None
    while pilihan not in ("A","B","C"):
        print("Menu :\nA. Tulis Pesan Asli\nB. Enkripsi Pesan \nC. Keluar")
        pilihan = str(input("\nPilihan Menu: "))
        if(pilihan == "A"):
            print("\nLokasi default ditetapkan di {0}".format(file))
            pilihan = None
            while pilihan not in("y","n"):
                pilihan = str(input("Apakah ingin menginput lokasi file teks secara manual? (y/n)       :"))
                if(pilihan =="y"):
                    lokasiFile = str(input("Masukkan lokasi file untuk menulis pesan teks (contoh D:/text.txt)  :"))
                    file = lokasiFile
                    selesai = False
                elif(pilihan == "n"):
                    break
                else:
                    print("Mohon masukkan pilihan (y/n)")
                    continue
            if(not(isFileExist(file))):
                open(file, 'a').close()
            selesai = False
            while not(selesai):
                pesan = str(input("Masukkan pesan:"))
                if writeToText(pesan,file):
                    print("\nBerhasil menambahkan pesan ke file")
                else:
                    print("Terjadi suatu kesalahan\n")
                    exit()
                pilihan = None
                while pilihan not in("y","n"):
                    pilihan = str(input("\nUlangi input lagi? (y/n):"))
                    if(pilihan =="y"):
                        selesai = False
                    elif(pilihan == "n"):
                        selesai = True
                    else:
                        print("Mohon masukkan pilihan (y/n)")
        elif(pilihan == "B"):
            selesai = False
            while not(selesai):
                lokasiFile = str(input("\nMasukkan lokasi file yang ingin dienkripsi (contoh D:/text.txt)   :"))
                if(not(isFileExist(lokasiFile))):
                    print("File tidak ditemukan, apakah lokasi file sudah benar?\n")
                    continue
                else:
                    break
            file = lokasiFile
            while True:
                try:
                    n = int(input("Masukkan nilai n (bilangan bulat)    :"))
                    break
                except ValueError:
                    print("Mohon masukkan hanya angka")
                    continue
                else:
                    exit()
            filer = file.replace(".txt","-encrypt.txt")
            if(not(caesarEncrypt(file,n,filer))):
                print("Terjadi suatu kesalahan\n")
                break
            else:
                print("File dalam teks berhasil disandikan, file hasil sandi dapat ditemukan di {0}".format(filer))
        elif(pilihan == "C"):
            exit()
        else:
            print("Pilihan tidak ditemukan\n")
            continue
