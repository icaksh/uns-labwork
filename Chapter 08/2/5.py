def kuadrat(bil):
    hasil = []
    for i in bil:
        hasil = hasil + [i**2]
    return hasil
bil = [2, 4, 5, 6]
hasil = kuadrat(bil)
print(hasil)