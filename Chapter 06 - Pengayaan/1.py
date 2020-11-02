def isPrime(x):
    n = 1
    while True:
        lolosTahapSatu = terbagiHabis = False
        if(x-n <= 1):
            break
        if((x//1) == x):
            lolosTahapSatu = True
        if(x % (x-n) == 0 ):
            terbagiHabis = True
        print("{0} membagi habis bilangan {1} ? {2}".format((x-n),x,terbagiHabis))
        if(terbagiHabis):
            break
        n += 1
    if(x == 2): # JALUR PRESTASI
        lolosTahapSatu = True
        terbagiHabis = False
    if(lolosTahapSatu and not(terbagiHabis)):
        print("{0} merupakan bilangan prima".format(x))
    else:
        print("{0} bukan merupakan bilangan prima".format(x))
        
print("Aplikasi pencari bilangan prima")
bilInput= int(input("Masukkan bilangan bulat: "))

isPrime(bilInput)