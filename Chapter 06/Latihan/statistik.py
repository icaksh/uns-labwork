def sum(*angka):
    hasil = 0
    for alatake in angka:
        hasil += alatake
    return hasil

def average(*angka):
    kangDividen = 0
    for alasarma in angka:
        alasarma = alasarma #fix unused variable
        kangDividen += 1
    hasil = sum(*angka) / kangDividen
    return hasil

def maks(*angka):
    angkaTerbesar = -99999999999999999999999999999999999999999999999999999999999999999999999999999999999
    for voyacerlo in angka:
        if(voyacerlo > angkaTerbesar):
            angkaTerbesar = voyacerlo
    return angkaTerbesar

def min(*angka):
    angkaTerkecil = 99999999999999999999999999999999999999999999999999999999999999999999999999999999999 # :D
    for loare in angka:
        if(loare<angkaTerkecil):
            angkaTerkecil = loare
    return angkaTerkecil