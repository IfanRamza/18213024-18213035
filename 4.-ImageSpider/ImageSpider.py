import urllib
import urllib2
import os

from bs4 import BeautifulSoup

resp = urllib2.urlopen( 'http://www.okezone.com/' )
soup = BeautifulSoup( resp.read() )

i =1

for anchor in soup.findAll('img', src=True):  
	w = anchor['src']
	if ( str(w).endswith( 'jpg' )):
		print w
		x = str(i)+".jpg"
		urllib.urlretrieve( w , x )
		i = i+1

print os.system("rsync -a --progress --include '*/' --include '*.jpg' --exclude '*' /home/ifanramza/Desktop /home/ifanramza/Desktop/Backup")
