import os, sys

def printText(file):
    file = open(file,'r')
    fileLine = file.read().splitlines()
    dataMhs = []
    for i in fileLine:
        data = i.split("|")
        dataTambah = {
            "nim": data[0],
            "nama": data[1],
            "alamat": data[2]
            }
        dataMhs = dataMhs +[dataTambah]
    return dataMhs
        

file = os.path.join(sys.path[0],"txt/2.txt")

print(printText(file))
