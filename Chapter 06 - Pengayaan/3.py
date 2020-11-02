def dec2Bin(n):
    i = 1
    biner = 0
    while (n!=0):
        mod = n % 2
        n = n//2
        biner += mod * i
        i *= 10
    return str(biner)

print(dec2Bin(4294967296))
