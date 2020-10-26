def isPythagoras(a,b,c):
    if (a**2 + b**2 == c**2):
        return True
    else:
        return False

# TERIMA INPUT
nilaiA=(int(input("Masukkan nilai A: ")))
nilaiB=(int(input("Masukkan nilai B: ")))
nilaiC=(int(input("Masukkan nilai C: ")))

print("a={0}, b={1}, c={2}  -> {3}".format(nilaiA,nilaiB,nilaiC,isPythagoras(nilaiA,nilaiB,nilaiC)))