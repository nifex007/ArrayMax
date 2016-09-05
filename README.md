# ArrayMax
##Algorithm ArrayMax in python, php and javascript.
###Pseudocode
```python
Algorithm arrayMax(A, n):
  Input: An array A storing n ≥ 1 integers.
  Output: The maximum element in A.
  currentMax ← A[0]
  for i ← 1 to n − 1 do
    if currentMax < A[i] then
      currentMax ← A[i]
  return currentMax 
  ```

  #####Steps

  1. Define a function that takes the array/list as an argument ```findArrayMax(input)```
  2. Set the first member of the array to a variable ```currentMax = input[0]```
  3. Loop through the array and compare each value of the array with the initialized variable to determine the one with the higher value.
  4. Set the higher value to the variable
  5. Return the maximum value in the array ```return currentMax```


