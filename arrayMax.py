x = [1,2,3,4,5,6,7,4,5,7,8,9,0,-1]
#takes array x as argument and return the highest number in the array x
def findArrayMax(x):
	y = x[0]
	for i in x:
		if i > y:
			y = i
	return y

findArrayMax(x) #returns 9





