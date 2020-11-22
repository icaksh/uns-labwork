nilaiMhs = [{'nim' : 'A01', 'nama' : 'Amir', 'mid' : 50, 'uas' : 80},
{'nim' : 'A02', 'nama' : 'Budi', 'mid' : 40, 'uas' : 90},
{'nim' : 'A03', 'nama' : 'Cici', 'mid' : 50, 'uas' : 50},
{'nim' : 'A04', 'nama' : 'Dedi', 'mid' : 20, 'uas' : 30},
{'nim' : 'A05', 'nama' : 'Fifi', 'mid' : 70, 'uas' : 40}]

nilaiDewa = 0
for i in nilaiMhs:
    nilaiMid = i.get('mid')
    nilaiFin = i.get('uas')
    nilaiAkhir = (nilaiMid + 2*nilaiFin)/3
    if(nilaiAkhir>nilaiDewa):
        nilaiDewa = nilaiAkhir
        getNumber = i.get('nim')
        getNama = i.get('nama')

print("Mahasiswa dengan nama {0} dan NIM {1} mendapatkan nilai akhir tertinggi".format(getNama,getNumber))
