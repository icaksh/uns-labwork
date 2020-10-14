x = 10
print(type(x))
y = 10
print(type(y))
print(type(x+y))

print("================")

a = 10
p = y = x = z = a
print(a)
print(z)
print(x)
print(y)
print(p)

print("================")
print("\n")
bilInteger1 = 10
bilInteger2 = 15
bilFloat1 = 10.9374
bilFloat2 = 8.3836

## PENJUMLAHAN
print("Penjumlahan")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1+bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1+bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1+bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1+bilFloat2),"\n")

## PENGURANGAN
print("Pengurangan")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1-bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1-bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1-bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1-bilFloat2),"\n")

## PEMBAGIAN
print("Pembagian")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1/bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1/bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1/bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1/bilFloat2),"\n")

## OPERASI DIV PADA MATEMATIKA (PEMBAGIAN LALU DI FLOOR)
print("Operasi div()")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1/bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1/bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1/bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1/bilFloat2),"\n")

## MODULO
print("Modulo")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1%bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1%bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1%bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1%bilFloat2),"\n")

## PANGKAT
print("Pangkat")
operasiAritmatika = "+"
print("Int",operasiAritmatika,"Int:",type(bilInteger1**bilInteger2))
print("Int",operasiAritmatika,"Flo:",type(bilInteger1**bilFloat2))
print("Flo",operasiAritmatika,"Int:",type(bilFloat1**bilInteger2))
print("Flo",operasiAritmatika,"Flo:",type(bilFloat1**bilFloat2),"\n")