#! C:\python27

import urllib
import urllib2
import re
from bs4 import BeautifulSoup

print "Enter the URL you wish to crawl.."
print 'Usage  - "http://phocks.org/stumble/creepy/" <-- With the double quotes'

myurl = input("@> ") #Meminta inputan dari user
urllib.urlretrieve(myurl, "index.html") 
soup = BeautifulSoup(open("index.html"))

i = 1 #Melakukan inisiasi variabel untuk digunakan ketika looping

for anchor in soup.findAll('a', href=True):
    w = anchor['href']
    if ( str(w).startswith( 'http' )):   
   		print w
   		x = "Link ke-" + str(i) +" : " + soup.title.string +".html" #Menyimpan source code hyperlink ke dalam html
   		urllib.urlretrieve( w , x )
   		i = i+1
