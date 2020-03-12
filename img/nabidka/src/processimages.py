#!/usr/bin/env python
# -*- coding: utf-8 -*-
import os, sys
import Image
import shutil

try:
 shutil.rmtree('thumbnails')
 os.mkdir('thumbnails')
except OSError:
 os.mkdir('thumbnails')
try:
 shutil.rmtree('images')
 os.mkdir('images')
except OSError:
 os.mkdir('images')

for infile in sys.argv[1:]:
    outfile = infile #os.path.splitext(infile)[0] + ".thumbnail"
    try:
             # remove old thumbnails, make new
             im = Image.open(infile)
             im.thumbnail((190, 266), Image.ANTIALIAS)
             im.save("thumbnails/" + outfile, "JPEG")
             # remove old images, make new
             im = Image.open(infile)
             im.thumbnail((640, 640), Image.ANTIALIAS)
             im.save("images/" + outfile, "JPEG")
    except IOError:
             print "cannot create thumbnail for", infile
