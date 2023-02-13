# Santillana
PHP Test

## Index

## Problem: Required Remainder

You are given three integers x,y
and n. Your task is to find the maximum integer k such that 0 ≤ k ≤ n
that k mod x = y, where mod is modulo operation. Many programming languages use percent operator % to implement it.

In other words, with given x,y and n you need to find the maximum possible integer from 0 to n
that has the remainder y modulo x.

You have to answer t independent test cases. It is guaranteed that such k
exists for each test case.

## Installation

Download the github repository.
```shell 
git clone git@github.com:reynaldoeg/santillana.git
```

Go to the root of the directory
```shell 
cd santillana
```

Install dependencies with Composer
```shell 
composer install
```

## Execution

In the root of the project is the file input.txt

The first line of the input.txt contains one integer t (1 ≤ t ≤ 5 x 10^4) — the number of test cases. 
The next t lines contain test cases.

The only line of the test case contains three integers x, y and n
(2 <= x <= 10^9; 0 <= y < x; y <= n <= 10^9).

It can be shown that such k always exists under the given constraints.

To run the project, in the root type the following command

```shell 
php  remainder.php
```

## Unit Test

To run the testing:

```shell 
php vendor/bin/phpunit
```