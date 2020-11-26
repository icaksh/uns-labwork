def jarak(veEnol,jikan,perucerupatan):
    hasil = (veEnol * jikan) + ((perucerupatan)*(jikan**2))/2
    return float(hasil)
    
def gasIn(kecepatanMula, percepatan):
    i = 1
    while (i<=10):
        print("t = {0},     S(t)={1}".format(i,jarak(kecepatanMula,i,percepatan)))
        i += 1
    return ""

print("--------------------------------------")
print("Aplikasi Penghitung Jarak Tempuh Mobil")
print("------------------------------------\n")
print("Catatan:")
print("Untuk menghindari kesalahan, mohon masukkan hanya angka\n")
kecepatanMula = int(input("Masukkan kecepatan mula-mula (v0) (m/s) : "))
percepatan = int(input("Masukkan percepatan (m/s^2)             : "))
print()
print("Jarak yang sudah ditempuh mobil untuk setiap detiknya (mulai dari t=1 hingga t = 10):")
print(gasIn(kecepatanMula, percepatan))
