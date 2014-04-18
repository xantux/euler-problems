'''
Problem 1 from Project Euler

If we list all the natural numbers below 10 that are multiples of 3 and 5, we get 3, 5, 6 and 9. The sum of these multipes is 23.
Find the sum of all the multiples of 3 or 5 below 1000.

This file is made with VIM using Python 3 on Mac osX.

@author Andrea Benfatti (@Benfa94)
'''

size = 1000
# numberOfMultiple*(lastMultiple + firstMultiple)/2
sumMultiples3 = 333*(999+3)/2
sumMultiples5 = 199*(995+5)/2
sumMultiples15 = 66*(990+15)/2
total = sumMultiples3 + sumMultiples5 - sumMultiples15

print(int(total))
