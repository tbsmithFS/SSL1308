#!/user/bin/python

def build_house(width, length):
	return "Build a hosue of size {} and {}." \
	.format(width, length)

def build_neightborhood(num_houses):
	for i in range(num_houses):
		pring build_house(300, 500)

build_neightborhood(3)