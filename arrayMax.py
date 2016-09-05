
input = [1,2,3,4,5,6,7,4,5,7,8,9,0,-1]

def findArrayMax(input):
	currentMax = input[0]
	for i in input:
		if i > currentMax:
			currentMax = i
	return currentMax

findArrayMax(input) #returns 9





