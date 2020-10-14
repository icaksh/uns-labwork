import math

#JARAK
jarakKotaAB = 125
jarakKotaBC = 256

#KECEPATAN (DALAM KM/MENIT)
vKotaAB = 62 / 60
vKotaBC = 70 / 60

#PERKIRAAN WAKTU TEMPUH
waktuAwal = 6
perkiraanWaktuTempuhAB = math.ceil(jarakKotaAB/vKotaAB)
perkiraanWaktuTempuhBC = math.ceil(jarakKotaBC/vKotaBC)
waktuIstirahat = 45
totalPerkiraanWaktuTempuh = perkiraanWaktuTempuhAB + perkiraanWaktuTempuhBC + waktuIstirahat
totalPerkiraanMenitTempuh = totalPerkiraanWaktuTempuh % 60

totalPerkiraanJamTempuh = (totalPerkiraanWaktuTempuh // 60) + waktuAwal
print("Pak Amir sampai di Kota C pada Pukul %d.%d" %(totalPerkiraanJamTempuh,totalPerkiraanMenitTempuh))