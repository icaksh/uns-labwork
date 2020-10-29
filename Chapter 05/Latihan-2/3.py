i = 0
j= 0
k=0

while (i <= 100):
    if((i % 2) == 1):
        print(i)
        j +=1
        k +=i
    i += 1
print("Banyaknya bilangan ganjil: {0}".format(j))
print("Jumlah seluruh bilangan ganjil: {0}".format(k))
 