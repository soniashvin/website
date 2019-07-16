#!C:\ProgramData\Anaconda3\python.exe


import json
from selenium import webdriver
from selenium.webdriver.common.keys import Keys
import numpy

from selenium.webdriver.common.action_chains import ActionChains

driver=webdriver.Chrome(executable_path='C:/chromium/chromedriver.exe')


f= open("file.txt","r+")

string=f.read()
string+=" hotels"
string=string.replace(' ','+')
driver.get('https://www.google.com/search?q='+string)

p_element=""
p2_element=""
#if len(p_element)==0:
	#actions = ActionChains(driver)
	#actions.move_to_element(driver.find_elements_by_class_name('LC20lb'))
	#actions.click(driver.find_elements_by_class_name('LC20lb'))
	#actions.perform()
	#p_element = driver.find_elements_by_class_name('Dhct3d')
	#p2_element=driver.find_elements_by_class_name('rZkgAd')
	#p_element = driver.find_elements_by_class_name('jQkXof') 
	#p2_element=driver.find_elements_by_class_name('BTPx6e')
  
   
    
x=[]
gs=[]
n=0;
p_element = driver.find_elements_by_class_name('Ba8ysd')#single hotel prices
if len(p_element)>0: #if it is a SINGLE HOTEL 
    x.append("XXXX")
    if len(driver.find_elements_by_class_name('M4dUYb')) >0 :
        p_photos=driver.find_element_by_class_name('M4dUYb').get_attribute('src')
        x.append(p_photos)    
    for element in p_element: #links
        x.append(element.get_attribute('href'))
        #XmKKw
    for sitename in p_element: #sites
        gs.append(sitename.text)
        
    for i in gs:  
        i= (i.split('\n'))
        
        try:
            i=i[0]+"\n"+i[1]
            x.append(i)
        except IndexError:
            print("errr")
       # n+=1;
       # if n<4:
        #    break;
        

    p_address=driver.find_elements_by_class_name('Z1hOCe') #address and telno
    for element in p_address:
        x.append(element.text)
    reviews=driver.find_elements_by_class_name('b4vunb')
    for r in reviews:
        x.append(r.text)

p_hname=driver.find_elements_by_class_name('EaHP9c')

for ps in p_hname:
    x.append(ps)


p_element = driver.find_elements_by_class_name('rtng') #Ratings
#if p_element.count==0:

for element in p_element:
	x.append(element.text)
p_element = driver.find_elements_by_class_name('dbg0pd')
#if p_element.count==0:
for elem in p_element:
    x.append(elem.text)

p_element = driver.find_elements_by_class_name('b3xiAd')

for elem in p_element:
	x.append(elem.text)
    
p_element = driver.find_elements_by_class_name('jQkXof') #price in listing
p2_element=driver.find_elements_by_class_name('BTPx6e') #name in listing

for elem  in p_element:
	x.append(elem.text)

for elem  in p2_element:
	x.append(elem.text)
f.close()
driver.quit()
g=open("search.txt","w+",encoding="utf-8")
newvar=numpy.asarray(x)
for y in newvar:
    g.write(str(y)+"\n")
	#print(elem.text)

g.close()
print(json.dumps(x))

