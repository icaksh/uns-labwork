#MENERIMA INPUT
countMahasiswa = int(input("Jumlah Mahasiswa Laki-laki  : "))
countMahasiswi = int(input("Jumlah Mahasiswa Perempuan  : "))

#HITUNG BATAS DIAGRAM
grafikMahasiswa = countMahasiswa // 10
grafikMahasiswi = countMahasiswi // 10

#TAMPILKAN OUTPUT
print("Laki-laki: ",('*'*grafikMahasiswa))
print("Perempuan: ",('*'*grafikMahasiswi))