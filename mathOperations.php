<?php

function MathOperations($arg1, $arg2, $operation) {
    if ($operation === '+') {
        return $arg1 + $arg2;
    }
    if ($operation === '-') {
        return $arg1 - $arg2;
    }
    if ($operation === '*') {
        return $arg1 * $arg2;
    }
    if ($operation === '/') {
        return $arg1 / $arg2;
    }
    return 'Что-то пошло не так.';
}
