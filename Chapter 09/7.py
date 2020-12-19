def tabelisasi(data):
    print("=" * 65)
    print("{:<4}\t{:<17}\t{:<10}\t{:<10}".format("NIM","NAMA MAHASISWA","TANGGAL LAHIR","TEMPAT LAHIR"))
    print("-" * 65)
    for i in data:
        dataList = i.split(':')
        ubahTglLahir = dataList[2].split('-')
        ddMmYy = ubahTglLahir[2]+'/'+ubahTglLahir[1]+'/'+ubahTglLahir[0]
        print("{:<4}\t{:<17}\t{:<10}\t{:<10}".format(dataList[0],dataList[1],ddMmYy,dataList[3]))
    print("-" * 65)
    
mhs = ['K001:ROSIHAN ARI:1979-09-01:SOLO',
'K002:DWI AMALIA FITRIANI:1979-09-17:KUDUS',
'K003:FAZA FAUZAN:2005-01-28:KARANGANYAR']

tabelisasi(mhs)
