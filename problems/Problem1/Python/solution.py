'''
Problem 1 from Project Euler

If we list all the natural numbers below 10 that are multiples of 3 and 5, we get 3, 5, 6 and 9. The sum of these multipies is 23.
Find the sum of all the multiples of 3 or 5 below 1000

This file is made with VIM using Python 2.7.6

PLEASE NOTE
In order to work you should have at least Python 2.7.x.

REGARDING THE PERFORMANCE
This is not the final version of this algorithm, I'll trace the version of every solution. For any suggest of improvments please
open an issue.

@author Claudio Ludovico Panetta
@version 1.0.0
'''

# Creating the arrays
multipleOfThree = []
multipleOfFive = []

# First of all we need to iterate trough 1000 numbers
for i in range(0,1000):
    if(i % 3 == 0):
        multipleOfThree.append(i)
    elif(i % 5 == 0):
        multipleOfFive.append(i)
    else:
        continue

# By using sum(array) we can sum the two list
# very handy function from Python 2.3+
multipleOfThree = sum(multipleOfThree)
multipleOfFive = sum(multipleOfFive)

# Create the total
total = multipleOfThree + multipleOfFive
