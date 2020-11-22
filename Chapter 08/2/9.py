def buy(x,buahBeli,kilo):
    harga = x.get(buahBeli)
    totalHarga = harga * kilo
    return totalHarga

buah ={'apel' : 5000, 'jeruk' : 8500, 'mangga' : 7800, 'duku' :6500}
print("Daftar buah:")
for i in buah.keys():
    print("{0}".format(i))
while True:
    namaBuah= str(input("Nama buah yang akan dibeli             : "))
    if(not(namaBuah in buah.keys())):
        print("Nama buah tidak ditemukan")
        continue
    else:
        break

while True:
    try:
        kiloan = float(input("Berapa kg (gunakan . pengganti koma)   : "))
    except ValueError:
        print("Mohon masukkan hanya angka")
        continue
    else:
        break
print("\nRekap Pembelian\n")
print("Buah yang dibeli  : {0}".format(namaBuah))
print("Banyak buah (dlm kg) :")
print("-------------------------")
print("Total Harga          :{0}".format(buy(buah,namaBuah,kiloan)))

