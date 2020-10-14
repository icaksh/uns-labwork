import math

## TARIF SEWA
tarifSewaPertama = 200000
tarifSewaBerikutnya = 10000
print("Aplikasi Penghitung Sewa Rental Mobil")
print("Rp.",tarifSewaPertama," untuk 12 jam pertama")
print("Rp.",tarifSewaBerikutnya," untuk setiap 1 jam")
print("=============================================")

## WAKTU SEWA
mulaiMenitSewa = 00
akhirMenitSewa = 50
mulaiJamSewa = 6
akhirJamSewa = 23
totalWaktuSewa = (akhirJamSewa - mulaiJamSewa) + ((akhirMenitSewa-mulaiMenitSewa)/60)
print("Rincian Waktu Sewa")
print("Jam mulai sewa: ",mulaiJamSewa,"\b.",mulaiMenitSewa)
print("Jam akhir sewa: ",akhirJamSewa,"\b.",akhirMenitSewa)
print("Total waktu sewa: ",totalWaktuSewa," jam")
print("=============================================")

## KALKULASI BIAYA
print("Rincian Biaya")
waktuSewaPertama = 12
waktuSewaBerikutnya = totalWaktuSewa - waktuSewaPertama
biayaSewaPertama = 200000
biayaSewaBerikutnya = tarifSewaBerikutnya * math.floor(waktuSewaBerikutnya)
biayaTotal = biayaSewaPertama + biayaSewaBerikutnya
print("Biaya sewa pertama:",biayaSewaPertama)
print("Biaya sewa",totalWaktuSewa,"jam:",biayaSewaBerikutnya)
print("Total biaya yang harus dibayarkan:",biayaTotal)