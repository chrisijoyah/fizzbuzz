<?php

require __DIR__ . '/vendor/autoload.php';

// Step 1 solution
$step1 = new \FizzBuzz\Step1();
$step1->generateOutput(1, 20);
$step1->displayOutput();

// Step 2 solution
$step2 = new \FizzBuzz\Step2();
$step2->generateOutput(1, 20);
$step2->displayOutput();

// Step 3 solution
$step3 = new \FizzBuzz\Step3();
$step3->generateOutput(1, 20);
$step3->displayReport();

