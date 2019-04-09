#!/bin/bash

base=`pwd`
mv $base/dist/guide /tmp
pagelist="work-signup about index faq how-it-works privacy terms waive-car"
. "$HOME/.nvm/nvm.sh"
{
  cd src
  for i in $pagelist; do
    echo $i
    php partials/$i.php > $i.html
  done
  cd ..
}
gulp dist

{
  cd src
  for i in $pagelist; do
    echo "x $i"
    rm $i.html
  done
} 
cp $base/src/.htaccess $base/dist
mv /tmp/guide $base/dist

