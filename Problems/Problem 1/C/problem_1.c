#include <stdio.h>
#include <stdlib.h>
#include <string.h>
/***********************
 *
 * Problem 1 From Project Euler
 *
 * If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
 * Find the sum of all the multiples of 3 or 5 below 1000
 *
 * This file is made with VIM under Linux with gcc compiler
 *
 * PLEASE NOTE 
 * In order to compile and run you must install gcc and related
 *
 * REGARDING THE PERFORMANCE
 * This is not the final version, as you can see I'll trace the version of every solution.
 * If you have a better, or faster, algorithm please open an issue.
 *
 * @author Claudio Ludovico Panetta (@Ludo237)
 * @version 1.0.0
 ************************/

int array_sum(int array[]);

int main(int argc, char** argv)
{
    // I don't think this is the best way to work but...
    int size = 1000;
    int multipleOfThree[1000] = {0};
    int multipleOfFive[1000] = {0};

    // First of all we need to iterate trough 1000 numbers
    for( int i = 0; i < size; i++)
    {
        if(i % 3 == 0)
        {
            multipleOfThree[i] = i;
        }
        else if(i % 5 == 0)
        {
            multipleOfFive[i] = i;
        }
        else
            continue;
    }

    // Since C does not have a builtin function I wrote something similar :)
    int sumOfThree = array_sum(multipleOfThree);
    int sumOfFive = array_sum(multipleOfFive);

    // And now the final part
    int total = sumOfThree + sumOfFive;
    return 0;
}

int array_sum(int array[])
{
    int i, sum = 0;
    for( i = 0; i < 1000; i++)
    {
        sum = sum + array[i];
    }
    return sum;
}
