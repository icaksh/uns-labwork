import os

def caesarDecrypt(file,n,filer):
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
                    asciiText = 65 + (((ord(j) % 65)-n) % 26)
                elif(j.islower()):
                    asciiText = 97 + (((ord(j) % 97)-n) % 26)
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

selesai = False
while not(selesai):
    lokasiFile = str(input("\nMasukkan lokasi file yang ingin didekripsi (contoh D:/text.txt)   :"))
    if(not(isFileExist(lokasiFile))):
        print("File tidak ditemukan, apakah lokasi file sudah benar?\n")
        continue
    else:
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
        filer = file.replace(".txt","-decrypt.txt")
        if(not(caesarDecrypt(file,n,filer))):
            print("Terjadi suatu kesalahan\n")
            break
        else:
            print("File dalam teks berhasil disandikan, file hasil sandi dapat ditemukan di {0}".format(filer))
            break
