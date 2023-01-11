<?php

use Ezzaze\BinarySearch\BinarySearch;

it('can find item in array', function () {
    $haystack = range(0, 99999);
    $result = BinarySearch::exists(6000, $haystack);

    expect($result)->toBeTrue();
});

it('cannot find item in array', function () {
    $haystack = range(0, 99999);
    $result = BinarySearch::exists(100000, $haystack);

    expect($result)->toBeFalse();
});

it('cannot find item in a disarray', function () {
    $haystack = range(0, 99999);
    shuffle($haystack);
    $result = BinarySearch::exists(1, $haystack, false);

    expect($result)->toBeFalse();
});

it('can find subarray in array', function () {
    $haystack = array_chunk(range(0, 99999), 2);
    $result = BinarySearch::exists([60000, 60001], $haystack);

    expect($result)->toBeTrue();
});

it('cannot find subarray in disarray', function () {
    $haystack = array_chunk(range(0, 99999), 2);
    shuffle($haystack);
    $result = BinarySearch::exists([60000, 60001], $haystack, false);
    expect($result)->toBeFalse();
});
