#!/opt/homebrew/bin/bash

# 1. Update the local timestamp file
date +"%B %Y" > last_updated.txt

# 3. Deploy the current directory (.) straight to the remote "home" folder
deploy . home

echo
echo "🚀 Homepage deployment complete!"
echo "Check it out live at: https://vjbe.net"