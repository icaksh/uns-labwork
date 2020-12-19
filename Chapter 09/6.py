def tabelisasi(data):
    print("=" * 80)
    print("{:<5}\t{:<10}\t{:>6}\t\t{:>6}\t\t{:>7}\t\t{:>7}".format("NIM","NAMA","N.MID","N.UAS","N.AKHIR","STATUS"))
    print("-" * 80)
    for i in nilai:
        nilaiAkhir = (i.get('mid') + 2 * i.get('uas')) / 3
        if(nilaiAkhir>=60):
            statusKelulusan = "LULUS"
        else:
            statusKelulusan = "TIDAK LULUS"
        print("{:<5}\t{:<10}\t{:>6}\t\t{:>6}\t\t{:>7.2f}\t\t{:>7}".format(i.get('nim'),i.get('nama').upper(),i.get('mid'),i.get('uas'),nilaiAkhir,statusKelulusan))
    print("-" * 80)

nilai = [{'nim' : 'A01', 'nama' : 'Agustina', 'mid' : 50, 'uas' : 80},
{'nim' : 'A02', 'nama' : 'Budi', 'mid' : 40, 'uas' : 90},
{'nim' : 'A03', 'nama' : 'Chicha', 'mid' : 100, 'uas' : 50},
{'nim' : 'A04', 'nama' : 'Donna', 'mid' : 20, 'uas' : 100},
{'nim' : 'A05', 'nama' : 'Fatimah', 'mid' : 70, 'uas' : 100}]

tabelisasi(nilai)
