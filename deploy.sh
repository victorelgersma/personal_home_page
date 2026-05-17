#!/bin/bash

# Write deployment timestamp
date +"%B %Y" > last_updated.txt

cd ../
deploy vjbe-homepage .

echo
echo "https://vjbe.net"
echo