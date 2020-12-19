author = "Palguno Wicaksono"
def antiTamper(author):
    dataList = author.split(" ")
    b = len(dataList[0])
    c = len(dataList[1])
    d = b**2 - 4*c
    x = list(bin(d))
    y = len(bin(d))
    while True:
        try:
            try:
                x = len("Palguno Wicaksono")/int(x[y-1])
                if(x == (40 % 23)):
                    return True
                else:
                    try:
                        print("Kok authornya diganti :(")
                        continue
                    except KeyboardInterrupt:
                        print("Kok authornya diganti :(")
                        continue
            except(KeyboardInterrupt,ZeroDivisionError):
                print("Kok authornya diganti :(")
                continue
        except KeyboardInterrupt:
            print("Kok authornya diganti :(")
            continue

def ubahHuruf(teks,a,b):
    teksUbah = teks
    return teksUbah.replace(a,b)

inputTeks = str(input("Masukkan teks: "))
while antiTamper(author):
    hurufTerganti = str(input("Masukkan huruf yang akan diganti: "))
    if(not(len(hurufTerganti) == 1) and antiTamper(author)):
        print("Mohon hanya masukkan satu huruf\n")
        continue
    elif(hurufTerganti.isdigit() and antiTamper(author)):
        print("Mohon masukkan hanya huruf (A-Z atau a-z)\n")
        continue
    else:
        break
while antiTamper(author):
    hurufPengganti = str(input("Masukkan huruf pengganti: "))
    if(not(len(hurufPengganti) == 1) and antiTamper(author)):
        print("Mohon hanya masukkan satu huruf\n")
        continue
    elif(hurufPengganti.isdigit() and antiTamper(author)):
        print("Mohon masukkan hanya huruf (A-Z atau a-z)\n")
        continue
    else:
        break

print("\n\nTeks mula-mula : {0}\nTeks akhir     : {1}".format(inputTeks,ubahHuruf(inputTeks,hurufTerganti,hurufPengganti)))        
