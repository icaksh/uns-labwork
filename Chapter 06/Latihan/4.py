import statistik

def hasembuh(*angka):
    print(*angka)
    print("Rata-rata : {0}".format(statistik.average(*angka)))
    print("Nilai Maks: {0}".format(statistik.maks(*angka)))
    print("Nilai Min : {0}".format(statistik.min(*angka)))

hasembuh(5, 10, 4, 9, 30, 16, 2, 11)
print('')
hasembuh(81, 98, 12, 83, 45, 77, 69, 30, 56)