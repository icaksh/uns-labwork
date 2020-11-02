def bin2Dec(n):
    i = desimal = 0
    while (n!=0):
        sisa = n % 10
        n = n // 10
        desimal += sisa*(2**i)
        i += 1
    return desimal

print(bin2Dec(100000000000000000000000000000000))