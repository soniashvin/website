import xml.etree.ElementTree as ET

tree = ET.parse("fresult.xml")

# this element holds the phonebook entries
container = tree.find("data")
container2=container.findtext("onwardflights")
print(type(container2))
data = []
for elem in container:
    print(elem.findtext("fare"))
    key = elem.findtext("fare")
    data.append((key, elem))

data.sort()

# insert the last item from each tuple
container[:] = [item[-1] for item in data]

tree.write("new-data.xml")