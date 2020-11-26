def statusBmi(nilaiBmi):
    if(nilaiBmi < 18):
        return "KURUS"
    elif((18 <= nilaiBmi) and (nilaiBmi < 23)):
        return "IDEAL"
    elif((23 <= nilaiBmi) and (nilaiBmi < 27)):
        return "GEMUK"
    elif((27 <= nilaiBmi) and (nilaiBmi < 35)):
        return "OBESITAS"
    elif((nilaiBmi >= 35)):
        return "OBESITAS MORBID"
    else:
        print("Terjadi suatu kesalahan")
        exit()

def hitungBmi(beratBadan,tinggiBadan):
    tinggiBadan = tinggiBadan / 100
    hasil = (beratBadan)/(tinggiBadan*tinggiBadan)
    #print("Nilai BMI: {0}\n".format(hasil))
    status = statusBmi(hasil)
    return status

print("--------------------------------------")
print("Aplikasi Penghitung Status Berat Badan")
print("--------------------------------------\n")
print("Catatan:")
print("Untuk menghindari kesalahan, mohon masukkan hanya angka\n")
beratBadan = int(input("Masukkan berat badan (kg): "))
tinggiBadan = int(input("Masukkan tinggi badan (cm): "))
print()
print("Status berat badan anda {0}".format(hitungBmi(beratBadan,tinggiBadan)))