import math

def sqNumbers(a,b):
    sqrtAwal = math.ceil(math.sqrt(a))
    sqrtAkhir = math.ceil(math.sqrt(b))
    if(isinstance(sqrtAwal,int)):
        sqrtAwal +=1
    if(isinstance(sqrtAkhir,int)):
        sqrtAkhir -= 1
    hasilPow = "Bilangan kuadrat antara {0} dan {1}:".format(a,b)
    while sqrtAwal <= sqrtAkhir:
        hasilPow = hasilPow +" {0}".format(int(math.pow(sqrtAwal,2)))
        sqrtAwal += 1
    return hasilPow

print("Aplikasi pencari bilangan kuadrat di antara dua bilangan")
bilPertama = int(input("Masukkan bilangan pertama: "))
bilKedua = int(input("Masukkan bil kedua: "))

print(sqNumbers(bilPertama,bilKedua))