import os, sys

def apiCari(file,nim):
    file = open(file,'r')
    fileLine = file.read().splitlines()
    tercari = False
    for i in fileLine:
        data = i.split("|")
        if (data[0] == nim):
            resultSearch = {
                "status" : "sukses",
                "nim": data[0],
                "nama": data[1],
                "alamat": data[2]
                }
            tercari = True
    if tercari:
        return resultSearch
    else:
        return {"status" : "failed"}

def isFileExist(file):
    if(os.path.isfile(file)):
        return True
        
file = os.path.join(sys.path[0],"txt/2.txt").replace("/","\\")
selesai = False
while not(selesai):
    if(not(isFileExist(file))):
        print("File data tidak ditemukan")
        exit()
    else:
        nim = str(input("Masukkan NIM yang mau dicari:"))
        cariData = apiCari(file,nim)
        if(cariData['status']=="sukses"):
            print("\nData Mahasiswa")
            print("NIM      : {0}\nNama     : {1}\nAlamat   : {2}".format(cariData['nim'],cariData['nama'],cariData['alamat']))
        else:
            print("Data mahasiswa tidak ditemukan")
    pilihan = None
    while pilihan not in("y","n"):
        pilihan = str(input("\nCari data mahasiswa lagi (y/n)?"))
        if(pilihan =="y"):
            selesai = False
        elif(pilihan == "n"):
            selesai = True
        else:
            print("Mohon masukkan pilihan (y/n)")
