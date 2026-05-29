#!/opt/homebrew/bin/bash
for f in ./misc-markdown/*.md; do pandoc "$f" -o "./misc-html/$(basename "$f" .md).html"; done
