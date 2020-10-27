def faktorial(a):
    if(a == 0):
        hasil = 1
        return hasil
    elif(a>0):
        i = 1
        for j in range(a):
            i = i * (j+1)
            hasil = i
        return hasil
    else:
        print("Bilangan yang diinputkan bukan bilangan positif atau 0")
        exit()

def C(a,b):
    hasil = faktorial(a)/(faktorial(a-b)*faktorial(b))
    return hasil

def P(a,b):
    hasil = faktorial(a)/faktorial(a-b)
    return hasil

print("Nilai dari C(5,3) adalah {0}".format(C(5,3)))
print("Nilai dari P(10,7) adalah {0}".format(P(10,7)))
