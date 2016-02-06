# PHPUnit Expect
BDD-style assertions for PHPUnit

## Usage

``` php
$number = 10;

// Simple expectation
expect($number)->toBe(10);

// Negative expectation
expect($number)->not()->toBeOfType('string');

// Chained expectations
expect($number)
    ->toBeGreaterThan(5)
    ->toBeLessThan(20);
```

## Install

With Composer:

``` bash
$ composer require jpkleemans/phpunit-expect:dev-master --dev
```

Or if you've installed PHPUnit globally:

``` bash
$ composer global require jpkleemans/phpunit-expect:dev-master
```

## API

**toBe**: Expect that two variables have the same type and value. Used on objects, it Expect that two variables reference the same object.

**toEqual**: Expect that two variables are equal.

**toHaveKey**: Expect that an array has a specified key.

**toHaveSubset**: Expect that an array has a specified subset.

**toContain**: Expect that a haystack contains a needle.

**toContainOnly**: Expect that a haystack contains only values of a given type.

**toContainOnlyInstancesOf**: Expect that a haystack contains only instances of a given classname

**toHaveCountOf**: Expect the number of elements of an array, Countable or Traversable.

**toBeEmpty**: Expect that a variable is empty.

**toBeGreaterThan**: Expect that a value is greater than another value.

**toBeGreaterThanOrEqualTo**: Expect that a value is greater than or equal to another value.

**toBeLessThan**: Expect that a value is smaller than another value.

**toBeLessThanOrEqualTo**: Expect that a value is smaller than or equal to another value.

**toEqualFile**: Expect that the contents of one file or a string is equal to the contents of another file.

**toExist**: Expect that a file exists.

**toBeTrue**: Expect that a condition is true.

**toBeFalse**: Expect that a condition is false.

**toBeNull**: Expect that a variable is null.

**toBeFinite**: Expect that a variable is finite.

**toBeInfinite**: Expect that a variable is infinite.

**toBeNan**: Expect that a variable is nan.

**toHaveAttribute**: Expect that a class or an object has a specified attribute.

**toHaveStaticAttribute**: Expect that a class has a specified static attribute.

**toBeInstanceOf**: Expect that a variable is of a given type.

**toBeOfType**: Expect that a variable is of a given type.

**toMatchRegExp**: Expect that a string matches a given regular expression.

**toHaveSameSizeAs**: Expect that the size of two arrays (or `Countable` or `Traversable` objects) is the same.

**toMatchFormat**: Expect that a string matches a given format string.

**toMatchFormatFile**: Expect that a string matches a given format file.

**toStartWith**: Expect that a string starts with a given prefix.

**toEndWith**: Expect that a string ends with a given suffix.

**toEqualXmlFile**: Expect that the contents of one XML file or a string is equal to the contents of another XML file.

**toHaveSameXMLStructureAs**: Expect that a hierarchy of DOMElements matches.

**toBeJson**: Expect that a string is a valid JSON string.

**toEqualJson**: Expect that two given JSON encoded objects or arrays are equal.

**toEqualJsonFile**: Expect that the generated JSON encoded object and the content of the given file are equal.
