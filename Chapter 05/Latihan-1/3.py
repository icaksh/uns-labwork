# APLIKASI PENGHITUNG SYARAT KELULUSAN

# INPUT NILAI
nilaiBahasaIndonesia = int(input("Masukkan nilai bahasa Indonesia  : "))
nilaiIlmuNaturalSains = int(input("Masukkan nilai IPA               : "))
nilaiMatematika = int(input("Masukkan nilai Matematika        : "))

# MEMULAI PERHITUNGAN
lulusBahasaIndonesia = False
lulusMatematika = False
lulusIlmuNaturalSains = False

if(nilaiBahasaIndonesia>=60):
    lulusBahasaIndonesia = True
if(nilaiIlmuNaturalSains>=60):
    lulusIlmuNaturalSains = True
if(nilaiMatematika>70):
    lulusMatematika = True

# REKAP
rangeNilai = range(0,101)
if((nilaiBahasaIndonesia or nilaiIlmuNaturalSains or nilaiMatematika) in rangeNilai):
    if(lulusBahasaIndonesia and lulusIlmuNaturalSains and lulusMatematika):
        statusKelulusan = "LULUS"
    else:
        statusKelulusan = "TIDAK LULUS"
    print("Status Kelulusan: {0}".format(statusKelulusan))
    print("Sebab:")
    if(not lulusBahasaIndonesia):
        print("- Nilai Bahasa Indonesia kurang dari 60")
    if(not lulusIlmuNaturalSains):
        print("- Nilai IPA kurang dari 60")
    if(not lulusMatematika):
        print("- Nilai Matematika kurang dari 70")
else:
    print("Maaf, input ada yang tidak valid")