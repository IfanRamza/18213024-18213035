#! C:\python27

import urllib
from bs4 import BeautifulSoup

urllib.urlretrieve("http://detik.com/", "index.html")
soup = BeautifulSoup(open("index.html"))

#Inisiasi
i = 1

#Program Utama
for anchor in soup.findAll('a', href=True):
    w = anchor['href']
    if ( str(w).startswith( 'http' )):   
   		print w
   		x = str(i)+".html"
   		urllib.urlretrieve( w , x )
   		i = i+1
