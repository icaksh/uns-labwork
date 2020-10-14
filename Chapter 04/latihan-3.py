import math
#VOLUME TANGKI
tangkiFull = 50
print("Volume tangki (dalam liter): %d" %(tangkiFull))
#JARAK KOTA 
jarakKota = 795
print("Jarak Kota A - C (dalam kilometer): %d" %(jarakKota))

#KONSUMSI BENSIN
konsumsiBensin = 1/12
print("Konsumsi Bensin: 1 Liter untuk 12 Kilometer")

#BENSIN YANG DIPERLUKAN
bensinMinimal = jarakKota * konsumsiBensin

#MINIMAL PENGISIAN
print("Asumsi tangki full sebelum perjalanan")
minimalPengisian = (bensinMinimal // tangkiFull)
print("Minimal Pak Budi harus mengisi bensin penuh: %d" %(math.floor(minimalPengisian)))