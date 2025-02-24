#!/bin/bash

git add .
git commit -m "Changes"
git push

exit
next_version=$(git tag | sort -V | tail -n 1 | sed 's/v//' | awk -F. -v OFS=. '{$NF+=1; print "v"$1,$2,$3}')

echo "Creating new Tag $next_version in 3 seconds"
#sleep 3

git tag -a $next_version -m "$next_version"
git push origin --tags

echo "Done"
