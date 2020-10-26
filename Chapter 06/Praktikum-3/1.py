from operation import *

#Modifikasilah kode program dari nomor 3 untuk menghitung dan menampilkan operasi berikut ini menggunakan function-function yang ada dalam operation.py
#2 + 4 * 6 – 4
#(4 + 7) * (6 - 9)
#(10 + 2) / (7 + 5) / (12 - 34) 

# KUKABATAKU
print('2 + 4 * 6 – 4=',kurang(jumlah(2,kali(4,6)),4))
print('(4 + 7) * (6 - 9)=',kali(jumlah(4,7),kurang(6,9)))

# A / B / C = A / (B*C)
print('(10 + 2) / (7 + 5) / (12 - 34)=',bagi(jumlah(10,2),kali(jumlah(7,5),kurang(12,34))))