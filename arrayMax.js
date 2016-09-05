var input = [1,2,3,4,5,6,7,4,5,7,8,9,0,-1];
var currentMax;

 function findArrayMax(input) { 		
 		currentMax = input[0];
 		for (var i = 0; i < input.length; i++) {
 			if (input[i] > currentMax){
 				currentMax = input[i];
 			}
 		}
 		return currentMax; 		

 	}
 	console.log(findArrayMax(input)); //9 