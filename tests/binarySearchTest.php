<?php

use Ezzaze\BinarySearch\BinarySearch;
use Ezzaze\BinarySearch\Exceptions\InvalidHaystackException;

it('can find item in array', function () {
    $haystack = range(0, 999999);
    $result = BinarySearch::exists(6000, $haystack);

    expect($result)->toBeTrue();
});

it('cannot find item in array', function () {
    $haystack = range(0, 999999);
    $result = BinarySearch::exists(1000000, $haystack);

    expect($result)->toBeFalse();
});

it('cannot find item in a disarray', function () {
    $haystack = range(0, 999999);
    shuffle($haystack);
    $result = BinarySearch::exists(1, $haystack, false);

    expect($result)->toBeFalse();
});

it('throws invalid haystack exception', function () {
    $haystack = range(0, 999999);
    $result = BinarySearch::exists(1000000, [$haystack]);
})->throws(InvalidHaystackException::class, 'The haystack is a multidimensional array');
