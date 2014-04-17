'''
Problem 1 from Project Euler

If we list all the natural numbers below 10 that are multiples of 3 and 5, we get 3, 5, 6 and 9. The sum of these multipes is 23.
Find the sum of all the multiples of 3 or 5 below 1000.

This file is made with VIM using Python 2.7.6 on Linux.

PLEASE NOTE
In order to work you should have at least Python 2.5.x+ (Python 2.7.x+ is better)

REGARDING THE PERFORMANCE
This is not the final version of this algorithm, I'll trace the version of every solution. For any suggest of improvments please
open an issue or a pull request.

@author Claudio Ludovico Panetta
@version 1.0.0
'''
# We need a scalable algorithm so we cannot use a static size for our test
size = 1000

# To store the multiple we need an array (or list)
multiple = []

# First of all we need to iterate trough size numbers
for i in range(0,size):
    if(i % 3 == 0) or (i % 5 == 0): # if 'i' number mod 3 equal 0...
        multiple.append(i) # ...it's a mutiples, we can append here

# By using sum(array) we can sum the two list
# very handy function from Python 2.3+
# And then we have the total
total = sum(multiple)
