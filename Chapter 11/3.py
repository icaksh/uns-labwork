import os, sys
from datetime import date

def diffDate(ymd):
    [y,m,d] = ymd.split("-")
    today = date.today()
    serday = date(int(y),int(m),int(d))
    return ((serday-today).days)

def apiCari(file,kode):
    file = open(file,'r')
    fileLine = file.read().splitlines()
    tercari = False
    for i in fileLine:
        data = i.split("|")
        if (data[0] == kode):
            resultSearch = {
                "status" : "sukses",
                "kode": data[0],
                "nama": data[1],
                "judul": data[2],
                "tglpinjam": data[3],
                "tglbalik": data[4]
                }
            tercari = True
    if tercari:
        return resultSearch
    else:
        return {"status" : "failed"}

def isFileExist(file):
    if(os.path.isfile(file)):
        return True
        
file = os.path.join(sys.path[0],"database.txt").replace("/","\\")
selesai = False
while not(selesai):
    if(not(isFileExist(file))):
        print("File data tidak ditemukan")
        exit()
    else:
        kode = str(input("Masukkan Kode Member :"))
        cariData = apiCari(file,kode)
        if(cariData['status']=="sukses"):
            penentuan = diffDate(cariData["tglbalik"])
            if(penentuan<0):
                terlambat = "Ya, {0} hari".format(abs(penentuan))
                denda = "Rp." + str(2000*abs(penentuan))
            else:
                terlambat = "Tidak"
                denda = "-"
            print("\nData Peminjaman Buku")
            print("Kode\t\t\t\t: {0}\nNama\t\t\t\t: {1}\nJudul Buku\t\t\t: {2}".format(cariData['kode'],cariData['nama'],cariData['judul']))
            print("Tanggal Mulai Peminjaman\t: {0}\nTanggal Selesai Peminjaman\t: {1}".format(cariData["tglpinjam"],cariData["tglbalik"]))
            print("Tanggal Pengembalian\t\t: {0}\nTerlambat\t\t\t: {1}\nDenda\t\t\t\t: {2}".format(date.today(),terlambat,denda))
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
