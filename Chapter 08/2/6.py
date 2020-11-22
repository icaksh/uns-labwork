def sortStringByChar(x):
    x.sort(reverse=True, key=len)
    return x
myData = ['apel', 'rambutan', 'jeruk']
print(sortStringByChar(myData))