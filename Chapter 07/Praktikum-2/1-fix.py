try:
    file = open("/home/icaksh/Coolyeah/Python-Projects-Protek/Chapter 07/Praktikum-2/data.txt", "r")
    bil1 = int(file.readline())
    bil2 = int(file.readline())
    hasil = bil1/bil2
    print("{0} dibagi {1} sama dengan {2}".format(bil1, bil2, hasil))
except FileNotFoundError:
    print("File tidak ditemukan")
except ZeroDivisionError:
    print("Tidak boleh dibagi sama dengan 0")

