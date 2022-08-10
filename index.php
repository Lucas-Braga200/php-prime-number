<?php
    include "utils.php";

    $myFile = fopen("teste.txt", "w+");

    $count = 0;
    $j = 2;
    while($count < 20) {
        if (isPrimeNumber($j) == true) {
            fwrite($myFile, $j . " ");
            $count++;
        }
        $j++;
    }

    fclose($myFile);