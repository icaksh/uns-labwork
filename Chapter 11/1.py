from datetime import date

def diffDate(ymd):
    [y,m,d] = ymd.split("-")
    today = date.today()
    serday = date(int(y),int(m),int(d))
    return ((serday-today).days)

print(diffDate("2021-11-29"))
