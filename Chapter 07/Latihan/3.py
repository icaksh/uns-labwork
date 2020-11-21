print("-----------------------------")
print(" PROGRAM HITUNG RATA-RATA")
print("-----------------------------")

inputan = 0
kangBagi = 0
selesai = False
while not(selesai):
        try:
            dataTambah = int(input("Masukkan bilangan bulat: "))
            inputan = inputan + dataTambah
            kangBagi += 1
            choice = None
            while choice not in("y","n"):
                choice = str(input("Lagi (y/n)?: "))
                if(choice == "y"):
                    selesai = False
                elif(choice == "n"):
                    selesai = True
                else:
                    print("Mohon masukkan pilihan (y/n)")
        except ValueError:
            print("Bukan bilangan bulat")

print("Rata-ratanya adalah: {0}".format(inputan/kangBagi))