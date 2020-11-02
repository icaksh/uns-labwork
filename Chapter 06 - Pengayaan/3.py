def dec2Bin(n):
    i = biner = 1
    while (n!=0):
        mod = n % 2
        n = n//2
        biner += mod * i
        i *= 10
    return biner

print(dec2Bin(4294967296))
