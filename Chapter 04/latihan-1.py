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
print("Jam mulai sewa: %d.%d" %(mulaiJamSewa,mulaiMenitSewa))
print("Jam akhir sewa: %d.%d" %(akhirJamSewa,akhirMenitSewa))
print("Total waktu sewa: %d jam" %(totalWaktuSewa))
print("=============================================")

## KALKULASI BIAYA
print("Rincian Biaya")
waktuSewaPertama = 12
waktuSewaBerikutnya = totalWaktuSewa - waktuSewaPertama
biayaSewaPertama = 200000
biayaSewaBerikutnya = tarifSewaBerikutnya * math.floor(waktuSewaBerikutnya)
biayaTotal = biayaSewaPertama + biayaSewaBerikutnya
print("Biaya sewa pertama: %d" %(biayaSewaPertama))
print("Biaya sewa %d jam: %d" %(totalWaktuSewa,biayaSewaBerikutnya))
print("Total biaya yang harus dibayarkan: %d" %(biayaTotal))