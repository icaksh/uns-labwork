import os, sys, random

''' JANGAN CUMA COPAS DAN GANTI VARIABEL! '''

def gacha(n,file):
    file = open(file,'w')
    for i in range(n):
        file.write("{0}\n".format(random.randint(1,100)))
    file.close()
    return True

def ganjilGenap(file):
    file = open(file,'r')
    number = file.readlines()
    ganjil = genap = 0
    for i in number:
        number = i
        try:
            if(int(float(number.replace("\n","")))%2==0):
                ganjil +=1
            else:
                genap +=1
        except:
            print("Ada data yang tidak valid")
    file.close()
    return [ganjil,genap]

def isFileExist(file):
    if(os.path.isfile(file)):
        return True

file = os.path.join(sys.path[0],"txt/1.txt").replace("/","\\")
while True:
    pilihan = None
    while pilihan not in ("A","B","C"):
        print("Menu :\nA. Generate Random Number\nB. Tampilkan Ganjil Genap\nC. Keluar")
        pilihan = str(input("\nPilihan Menu: "))
        if(pilihan == "A"):
            if(not(isFileExist(file))):
                print("File tidak ditemukan, sedang membuat file baru")
                if not(os.path.isdir(os.path.join(sys.path[0],"txt"))):
                    os.mkdir(os.path.join(sys.path[0],"txt"))
                open(file, 'a').close()
            n = int(input("Masukkan jumlah baris bilangan   :"))
            if gacha(n,file):
                print("\nBerhasil menambahkan data random\n")
            else:
                print("Terjadi suatu kesalahan\n")
                exit()
        elif(pilihan == "B"):
            file = os.path.join(sys.path[0],file)
            if(not(isFileExist(file))):
                print("File tidak ditemukan\n")
                exit()
            dataList = ganjilGenap(file)
            print("\nBanyaknya bilangan genap : {0}\nBanyaknya bilangan ganjil: {1}\n".format(dataList[0],dataList[1]))
        elif(pilihan == "C"):
            exit()
        else:
            print("Pilihan tidak ditemukan\n")
            continue

