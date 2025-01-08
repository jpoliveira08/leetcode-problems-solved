# 3 Solutions

## First solution
The first solution uses brute force, using two pointers and two nested for loops.
<p>Complexity: O(n²)</p>

## Second solution
<p>Sorting + two pointers</p>
- Step 1: Sort(ASC) the array

- Step 2: Uses two pointers, one in the first element and the other at the last element

- Step 3: Sum the value in these two pointers, if:
  - The sum is smaller than the target: move the first pointer to the next element
  - The sum is bigger than the target: move the second pointer to the previous element
<p>Complexity: O(n).Log(n)</p>

### Third solution
<p>Hash</p>

Walk through the array and for each item inside the array we calculate the value that complements sums our target:

Ex.: [11, 15, 2, 7]
target: 9

First array element: 11
Which number that sums with 11 and results in 9: -2
{-2: 0}

Second array element: 15
Is it inside our hashmap? No
Which number that sums with 15 and results in 9: -6
{-2: 0, -6: 1}

Third array element: 2
Is it inside our hashmap? No
Which number that sums with 2 and results in 9: 7
{-2: 0, -6: 1, 7: 2}

Forth array element: 7
Is it inside our hashmap? Yes
return [$hashMap[$number], $position];
