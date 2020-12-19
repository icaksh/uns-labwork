def tabelisasi(data):
    print("=" * 47)
    print("{:5}\t{:<10}\t{:>6}\t\t{:>6}".format("NIM","NAMA","N.MID","N.UAS"))
    print("-" * 47)
    for i in data:
        print("{:<5}\t{:<10}\t{:>6}\t\t{:>6}".format(i.get('nim'),i.get('nama').upper(),i.get('mid'),i.get('uas')))
    print("-" * 47)

nilai = [{'nim' : 'A01', 'nama' : 'Agustina', 'mid' : 50, 'uas' : 80},
{'nim' : 'A02', 'nama' : 'Budi', 'mid' : 40, 'uas' : 90},
{'nim' : 'A03', 'nama' : 'Chicha', 'mid' : 100, 'uas' : 50},
{'nim' : 'A04', 'nama' : 'Donna', 'mid' : 20, 'uas' : 100},
{'nim' : 'A05', 'nama' : 'Fatimah', 'mid' : 70, 'uas' : 100}]

tabelisasi(nilai)
