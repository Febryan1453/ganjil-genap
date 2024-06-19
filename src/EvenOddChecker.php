<?php

namespace Ryan\CheckEvenOdd;

class EvenOddChecker {
    /**
     * Determines if a given number is even.
     *
     * @param int $number The number to check.
     * @return bool Returns true if the number is even, false otherwise.
     */
    public function isEven($number) {
        return $number % 2 === 0;
    }

    /**
     * Determines if a given number is odd.
     *
     * @param int $number The number to check.
     * @return bool Returns true if the number is odd, false otherwise.
     */
    public function isOdd($number) {
        return $number % 2 !== 0;
    }
}
