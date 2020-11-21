file = open("c:\myfile.txt", "r")
bil1 = int(file.readline())
bil2 = int(file.readline())
hasil = bil1/bil2
print("{0} dibagi {1} sama dengan {2}".format(bil1, bil2, hasil))
