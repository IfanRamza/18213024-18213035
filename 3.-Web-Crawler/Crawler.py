#! C:\python27

import urllib
import urllib2
from bs4 import BeautifulSoup

urllib.urlretrieve("http://okezone.com/", "index.html") 
soup = BeautifulSoup(open("index.html"))

#Inisiasi
i = 1

#Program Utama
for anchor in soup.findAll('a', href=True):
    w = anchor['href']
    if ( str(w).startswith( 'http' )):   
   		print w
   		x = "Link ke-" + str(i) +" : " + soup.title.string +".html" #Menyimpan source code hyperlink ke dalam html
   		urllib.urlretrieve( w , x )
   		i = i+1
