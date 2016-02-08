# PHPUnit Expect
BDD-style assertions for PHPUnit

## Usage

``` php
$number = 10;

// Simple expectation
expect($number)->toBe(10);

// Negative expectation
expect($number)->notToBeOfType('string');

// Chained expectations
expect($number)
    ->toBeGreaterThan(5)
    ->toBeLessThan(20);
```

## Install

With Composer:

``` bash
$ composer require jpkleemans/phpunit-expect --dev
```

Or if you've installed PHPUnit globally:

``` bash
$ composer global require jpkleemans/phpunit-expect
```

## Expectations

### toBe
Expect that two variables have the same type and value.
Used on objects, it asserts that two variables reference the same object.

### notToBe
Expect that two variables do not have the same type and value.
Used on objects, it asserts that two variables do not reference the same object.

### toEqual
Expect that two variables are equal.

### notToEqual
Expect that two variables are not equal.

### toHaveKey
Expect that an array has a specified key.

### notToHaveKey
Expect that an array does not have a specified key.

### toHaveSubset
Expect that an array has a specified subset.

### toContain
Expect that a haystack contains a needle.

### notToContain
Expect that a haystack does not contain a needle.

### toContainOnly
Expect that a haystack contains only values of a given type.

### notToContainOnly
Expect that a haystack does not contain only values of a given type.

### toContainOnlyInstancesOf
Expect that a haystack contains only instances of a given classname

### toHaveCount
Expect the number of elements of an array, Countable or Traversable.

### notToHaveCount
Expect the number of elements of an array, Countable or Traversable.

### toBeEmpty
Expect that a variable is empty.

### notToBeEmpty
Expect that a variable is not empty.

### toBeGreaterThan
Expect that a value is greater than another value.

### toBeGreaterThanOrEqualTo
Expect that a value is greater than or equal to another value.

### toBeLessThan
Expect that a value is smaller than another value.

### toBeLessThanOrEqualTo
Expect that a value is smaller than or equal to another value.

### toEqualFile
Expect that the contents of one file or a string is equal to the contents of another file.

### notToEqualFile
Expect that the contents of one file or a string is not equal to the contents of another file.

### toExist
Expect that a file exists.

### notToExist
Expect that a file does not exist.

### toBeTrue
Expect that a condition is true.

### notToBeTrue
Expect that a condition is not true.

### toBeFalse
Expect that a condition is false.

### notToBeFalse
Expect that a condition is not false.

### toBeNull
Expect that a variable is null.

### notToBeNull
Expect that a variable is not null.

### toBeFinite
Expect that a variable is finite.

### toBeInfinite
Expect that a variable is infinite.

### toBeNan
Expect that a variable is nan.

### toHaveAttribute
Expect that a class or an object has a specified attribute.

### notToHaveAttribute
Expect that a class or an object does not have a specified attribute.

### toHaveStaticAttribute
Expect that a class has a specified static attribute.

### notToHaveStaticAttribute
Expect that a class does not have a specified static attribute.

### toBeInstanceOf
Expect that a variable is of a given type.

### notToBeInstanceOf
Expect that a variable is not of a given type.

### toBeOfType
Expect that a variable is of a given type.

### notToBeOfType
Expect that a variable is not of a given type.

### toMatchRegExp
Expect that a string matches a given regular expression.

### notToMatchRegExp
Expect that a string does not match a given regular expression.

### toHaveSameSizeAs
Assert that the size of two arrays (or `Countable` or `Traversable` objects) is the same.

### notToHaveSameSizeAs
Assert that the size of two arrays (or `Countable` or `Traversable` objects) is not the same.

### toMatchFormat
Expect that a string matches a given format string.

### notToMatchFormat
Expect that a string does not match a given format string.

### toMatchFormatFile
Expect that a string matches a given format file.

### notToMatchFormatFile
Expect that a string does not match a given format string.

### toStartWith
Expect that a string starts with a given prefix.

### notToStartWith
Expect that a string starts not with a given prefix.

### toEndWith
Expect that a string ends with a given suffix.

### notToEndWith
Expect that a string ends not with a given suffix.

### toEqualXmlFile
Expect that two XML files or documents are equal.

### notToEqualXmlFile
Expect that two XML files or documents are not equal.

### toEqualXml
Expect that two XML documents are equal.

### notToEqualXml
Expect that two XML documents are not equal.

### toHaveSameXMLStructureAs
Expect that a hierarchy of DOMElements matches.

### toBeJson
Expect that a string is a valid JSON string.

### toEqualJson
Expect that two given JSON encoded objects or arrays are equal.

### notToEqualJson
Expect that two given JSON encoded objects or arrays are not equal.

### toEqualJsonFile
Expect that the generated JSON encoded object and the content of the given file or JSON string are equal.

### notToEqualJsonFile
Expect that the generated JSON encoded object and the content of the given file or JSON string are not equal.
