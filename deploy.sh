#!/opt/homebrew/bin/bash

# Write deployment timestamp
./convert-markdown.sh

date +"%B %Y" > last_updated.txt

cd ../
deploy vjbe-homepage .

echo
echo "https://vjbe.net"
echo