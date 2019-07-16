#!C:\ProgramData\Anaconda3\python.exe


import pycurl
import json



from io import BytesIO



f= open("flightsearch.txt","r+")

string=f.read()
arr=string.split()
appid='3d3ffde9'
appkey='a98fbafe90078aa84518673c58b15d00'
formats='json'

seatingclass='E'

destination=str(arr[0])
source=str(arr[1])
dateofdeparture=arr[2]
buffer = BytesIO()
c = pycurl.Curl()
c.setopt(c.URL, 'http://developer.goibibo.com/api/search/?app_id='+appid+'&app_key='+appkey+'&format='+formats+'&json&source='+source+'&destination='+destination+'&dateofdeparture='+dateofdeparture+'&seatingclass='+seatingclass+'&adults=1&children=0&infants=0&counter=100')
c.setopt(c.WRITEDATA, buffer)
c.perform()
c.close()
body = buffer.getvalue()
data=(body.decode('iso-8859-1'))
with open('searchResults.txt', 'w') as outfile:  
    json.dump(data, outfile)
    

