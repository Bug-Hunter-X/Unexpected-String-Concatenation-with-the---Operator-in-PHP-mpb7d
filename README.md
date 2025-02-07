# PHP Loose Typing Bug

This repository demonstrates a common pitfall in PHP: unexpected string concatenation when using the `+` operator with loosely typed variables.  The `bug.php` file shows the problem, and `bugSolution.php` offers a solution.

## Problem

PHP's loose typing system means that the `+` operator will perform string concatenation if either operand is a string. This can lead to unexpected results, particularly in functions that expect numerical input.

## Solution

The solution involves explicit type checking to ensure that both operands are numbers before performing the addition operation.