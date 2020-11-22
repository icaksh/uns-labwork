def averageHarga(x):
    listHarga = list(x.values())
    jumlahan = 0
    pembagi = 0
    for i in listHarga:
        jumlahan = jumlahan + i
        pembagi += 1
    average = jumlahan/pembagi
    return average

buah ={'apel' : 5000, 'jeruk' : 8500, 'mangga' : 7800, 'duku' :6500}
print(averageHarga(buah))