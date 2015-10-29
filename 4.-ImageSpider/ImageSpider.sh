#! /bin/bash

dir="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
ddir="$dir/$1"
b="backup_$1"

wget -r   -A jpg,jpeg 'http://www.detik.com/'
[ ! -d $b ] && mkdir $b
	
rsync -a  $ddir/ $b
