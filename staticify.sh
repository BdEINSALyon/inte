#!/bin/sh

rm -rf html-static
mkdir html-static

cp -r contenu/* html-static

find contenu -type f -name "*.php" -exec sh -c 'php $0 > $( echo $0 | sed "s/contenu/html-static/g" )' {} \;