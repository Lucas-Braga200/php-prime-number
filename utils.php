<?php
  function isPrimeNumber($number) {
    $isPrime = true;
    for($i = 1; $i <= $number; $i++) {
      if ($i != 1 && $i != $number) {
          if ($number % $i == 0) {
              $isPrime = false;
          }
      }
    }
    return $isPrime;
  }