import random
def shuffleString(x,n):
    kata = str(x)
    try:
        n = int(n)
    except ValueError:
        print("n bukan bilangan bulat")
    dataList = []
    for x in range(n):
        string = ''.join(random.sample(kata,len(kata)))
        if string not in dataList:
            dataList = dataList + [string]
    return dataList

print(shuffleString("eki",15))
