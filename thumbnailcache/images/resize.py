import os
from PIL import Image

directory = os.getcwd()

for filename in os.listdir(directory):
    if filename.endswith(".jpg") or filename.endswith(".png"):
        img = Image.open(filename)
        img = img.crop((0, 45, img.width, img.height-45))
        img.save(filename)