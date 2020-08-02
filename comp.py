from PIL import Image

img = Image.open('source.jpg')

img2 = Image.open('mo.jpg')

Nimg = img.resize((220,180))   # image resizing

Nimg2 = img2.resize((220,180))