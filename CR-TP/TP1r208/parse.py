import lxml
from lxml import etree
import statistics
from statistics import mean
tree=etree.parse('PrixCarburants_instantane.xml')
root=tree.getroot()
x=tree.xpath('count(pdv)')
r=tree.xpath('count(pdv[@pop="R"])')
a=tree.xpath('count(pdv[@pop="A"])')
au=tree.xpath('count(pdv[@pop="N"])')
route=tree.xpath('pdv[@pop="R"]')
autoroute=tree.xpath('pdv[@pop="A"]')




    


print("nbr total:",x)
print("nbr sur route:",r)
print("nbr sur autoroute:",a)
print("nbr sur autre:",au)

for user in tree.xpath('pdv[@pop="N"]'):
    p=user.attrib.get('pop')
    id=user.attrib.get('id')
    cp=user.attrib.get('cp')
    print('POP,ID,Code Postal',p,id,cp)



