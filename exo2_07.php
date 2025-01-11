<?php

function my_division_modulo($firstNumber, $operChar, $secondNumber) {
    if ($operChar == '/') {
        if ($secondNumber == 0) {
            throw new Exception("The given arguments aren’t good.\n");
        }
        return $firstNumber / $secondNumber;
    }

    if ($operChar == '%') {
        if ($secondNumber == 0) {
            throw new Exception("The given arguments aren’t good.\n");
        }
        return $firstNumber % $secondNumber;
    }

    throw new Exception("The given arguments aren’t good.\n");
}


