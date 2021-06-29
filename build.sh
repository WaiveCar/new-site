#!/bin/bash

base=`pwd`
mv $base/dist/guide /tmp
pagelist="work-signup about index faq how-it-works privacy terms work-info work-step2 waive-car"
{
  cd src
  for i in $pagelist; do
    echo $i
    php partials/$i.php > $i.html
  done
  cd ..
}
node  --stack-trace-limit=5000 --stack-size=10000  node_modules/.bin/gulp dist

{
  cd src
  for i in $pagelist; do
    echo "x $i"
    rm $i.html
  done
} 
cp $base/src/.htaccess $base/dist
mv /tmp/guide $base/dist

