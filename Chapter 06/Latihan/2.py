def starFormation1(n):
    i = 0
    while (i<n):
        j = 0
        while (j <= i):
            print('* ', end='')
            j += 1
        print('')
        i +=1

berapaBanyak = int(input("Tentukan banyaknya baris: "))
starFormation1(berapaBanyak)