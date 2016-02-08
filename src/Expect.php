<?php

namespace Expect;

use PHPUnit_Framework_Assert as Assert;

class Expect
{
    /**
     * @var mixed
     */
    private $value;

    /**
     * Expect constructor.
     *
     * @param mixed $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * Expect that an array has a specified key.
     *
     * @param mixed $key
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveKey($key, $message = '')
    {
        Assert::assertArrayHasKey($key, $this->value, $message);

        return $this;
    }

    /**
     * Expect that an array does not have a specified key.
     *
     * @param mixed $key
     * @param string $message
     *
     * @return Expect
     */
    public function notToHaveKey($key, $message = '')
    {
        Assert::assertArrayNotHasKey($key, $this->value, $message);

        return $this;
    }

    /**
     * Expect that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param bool $strict Check for object identity
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveSubset($subset, $strict = false, $message = '')
    {
        Assert::assertArraySubset($subset, $this->value, $strict, $message);

        return $this;
    }

    /**
     * Expect that a haystack contains a needle.
     *
     * @param mixed $needle
     * @param string $message
     * @param bool $ignoreCase
     * @param bool $checkForObjectIdentity
     * @param bool $checkForNonObjectIdentity
     *
     * @return Expect
     */
    public function toContain($needle, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
    {
        Assert::assertContains($needle, $this->value, $message, $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);

        return $this;
    }

    /**
     * Expect that a haystack does not contain a needle.
     *
     * @param mixed $needle
     * @param string $message
     * @param bool $ignoreCase
     * @param bool $checkForObjectIdentity
     * @param bool $checkForNonObjectIdentity
     *
     * @return Expect
     */
    public function notToContain($needle, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
    {
        Assert::assertNotContains($needle, $this->value, $message, $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);

        return $this;
    }

    /**
     * Expect that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param bool $isNativeType
     * @param string $message
     *
     * @return Expect
     */
    public function toContainOnly($type, $isNativeType = null, $message = '')
    {
        Assert::assertContainsOnly($type, $this->value, $isNativeType, $message);

        return $this;
    }

    /**
     * Expect that a haystack does not contain only values of a given type.
     *
     * @param string $type
     * @param bool $isNativeType
     * @param string $message
     *
     * @return Expect
     */
    public function notToContainOnly($type, $isNativeType = null, $message = '')
    {
        Assert::assertNotContainsOnly($type, $this->value, $isNativeType, $message);

        return $this;
    }

    /**
     * Expect that a haystack contains only instances of a given classname
     *
     * @param string $classname
     * @param string $message
     *
     * @return Expect
     */
    public function toContainOnlyInstancesOf($classname, $message = '')
    {
        Assert::assertContainsOnlyInstancesOf($classname, $this->value, $message);

        return $this;
    }

    /**
     * Expect the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveCount($expectedCount, $message = '')
    {
        Assert::assertCount($expectedCount, $this->value, $message);

        return $this;
    }

    /**
     * Expect the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     * @param string $message
     *
     * @return Expect
     */
    public function notToHaveCount($expectedCount, $message = '')
    {
        Assert::assertNotCount($expectedCount, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two variables are equal.
     *
     * @param mixed $expected
     * @param string $message
     * @param float $delta
     * @param int $maxDepth
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
     */
    public function toEqual($expected, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
    {
        Assert::assertEquals($expected, $this->value, $message, $delta, $maxDepth, $canonicalize, $ignoreCase);

        return $this;
    }

    /**
     * Expect that two variables are not equal.
     *
     * @param mixed $expected
     * @param string $message
     * @param float $delta
     * @param int $maxDepth
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
     */
    public function notToEqual($expected, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
    {
        Assert::assertNotEquals($expected, $this->value, $message, $delta, $maxDepth, $canonicalize, $ignoreCase);

        return $this;
    }

    /**
     * Expect that a variable is empty.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeEmpty($message = '')
    {
        Assert::assertEmpty($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is not empty.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeEmpty($message = '')
    {
        Assert::assertNotEmpty($this->value, $message);

        return $this;
    }

    /**
     * Expect that a value is greater than another value.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeGreaterThan($expected, $message = '')
    {
        Assert::assertGreaterThan($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeGreaterThanOrEqualTo($expected, $message = '')
    {
        Assert::assertGreaterThanOrEqual($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a value is smaller than another value.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeLessThan($expected, $message = '')
    {
        Assert::assertLessThan($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeLessThanOrEqualTo($expected, $message = '')
    {
        Assert::assertLessThanOrEqual($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that the contents of one file or a string is equal to the contents of another
     * file.
     *
     * @param string $expected
     * @param string $message
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
     */
    public function toEqualFile($expected, $message = '', $canonicalize = false, $ignoreCase = false)
    {
        if (file_exists($this->value)) { // file
            Assert::assertFileEquals($expected, $this->value, $message, $canonicalize, $ignoreCase);
        } else { // string
            Assert::assertStringEqualsFile($expected, $this->value, $message, $canonicalize, $ignoreCase);
        }

        return $this;
    }

    /**
     * Expect that the contents of one file or a string is not equal to the contents of
     * another file.
     *
     * @param string $expected
     * @param string $message
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
     */
    public function notToEqualFile($expected, $message = '', $canonicalize = false, $ignoreCase = false)
    {
        if (file_exists($this->value)) { // file
            Assert::assertFileNotEquals($expected, $this->value, $message, $canonicalize, $ignoreCase);
        } else { // string
            Assert::assertStringNotEqualsFile($expected, $this->value, $message, $canonicalize, $ignoreCase);
        }

        return $this;
    }

    /**
     * Expect that a file exists.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toExist($message = '')
    {
        Assert::assertFileExists($this->value, $message);

        return $this;
    }

    /**
     * Expect that a file does not exist.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function notToExist($message = '')
    {
        Assert::assertFileNotExists($this->value, $message);

        return $this;
    }

    /**
     * Expect that a condition is true.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeTrue($message = '')
    {
        Assert::assertTrue($this->value, $message);

        return $this;
    }

    /**
     * Expect that a condition is not true.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeTrue($message = '')
    {
        Assert::assertNotTrue($this->value, $message);

        return $this;
    }

    /**
     * Expect that a condition is false.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeFalse($message = '')
    {
        Assert::assertFalse($this->value, $message);

        return $this;
    }

    /**
     * Expect that a condition is not false.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeFalse($message = '')
    {
        Assert::assertNotFalse($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is null.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeNull($message = '')
    {
        Assert::assertNull($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is not null.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeNull($message = '')
    {
        Assert::assertNotNull($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is finite.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeFinite($message = '')
    {
        Assert::assertFinite($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is infinite.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeInfinite($message = '')
    {
        Assert::assertInfinite($this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is nan.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeNan($message = '')
    {
        Assert::assertNan($this->value, $message);

        return $this;
    }

    /**
     * Expect that a class or an object has a specified attribute.
     *
     * @param string $attributeName
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveAttribute($attributeName, $message = '')
    {
        if (is_string($this->value)) { // class
            Assert::assertClassHasAttribute($attributeName, $this->value, $message);
        } else { // object
            Assert::assertObjectHasAttribute($attributeName, $this->value, $message);
        }

        return $this;
    }

    /**
     * Expect that a class or an object does not have a specified attribute.
     *
     * @param string $attributeName
     * @param string $message
     *
     * @return Expect
     */
    public function notToHaveAttribute($attributeName, $message = '')
    {
        if (is_string($this->value)) { // class
            Assert::assertClassNotHasAttribute($attributeName, $this->value, $message);
        } else { // object
            Assert::assertObjectNotHasAttribute($attributeName, $this->value, $message);
        }

        return $this;
    }

    /**
     * Expect that a class has a specified static attribute.
     *
     * @param string $attributeName
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveStaticAttribute($attributeName, $message = '')
    {
        Assert::assertClassHasStaticAttribute($attributeName, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a class does not have a specified static attribute.
     *
     * @param string $attributeName
     * @param string $message
     *
     * @return Expect
     */
    public function notToHaveStaticAttribute($attributeName, $message = '')
    {
        Assert::assertClassNotHasStaticAttribute($attributeName, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBe($expected, $message = '')
    {
        Assert::assertSame($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @param mixed $expected
     * @param string $message
     *
     * @return Expect
     */
    public function notToBe($expected, $message = '')
    {
        Assert::assertNotSame($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeInstanceOf($expected, $message = '')
    {
        Assert::assertInstanceOf($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is not of a given type.
     *
     * @param string $expected
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeInstanceOf($expected, $message = '')
    {
        Assert::assertNotInstanceOf($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toBeOfType($expected, $message = '')
    {
        Assert::assertInternalType($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a variable is not of a given type.
     *
     * @param string $expected
     * @param string $message
     *
     * @return Expect
     */
    public function notToBeOfType($expected, $message = '')
    {
        Assert::assertNotInternalType($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string matches a given regular expression.
     *
     * @param string $pattern
     * @param string $message
     *
     * @return Expect
     */
    public function toMatchRegExp($pattern, $message = '')
    {
        Assert::assertRegExp($pattern, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string does not match a given regular expression.
     *
     * @param string $pattern
     * @param string $message
     *
     * @return Expect
     */
    public function notToMatchRegExp($pattern, $message = '')
    {
        Assert::assertNotRegExp($pattern, $this->value, $message);

        return $this;
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param array|Countable|Traversable $expected
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveSameSizeAs($expected, $message = '')
    {
        Assert::assertSameSize($expected, $this->value, $message);

        return $this;
    }

    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param array|Countable|Traversable $expected
     * @param string $message
     *
     * @return Expect
     */
    public function notToHaveSameSizeAs($expected, $message = '')
    {
        Assert::assertNotSameSize($expected, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string matches a given format string.
     *
     * @param string $format
     * @param string $message
     *
     * @return Expect
     */
    public function toMatchFormat($format, $message = '')
    {
        Assert::assertStringMatchesFormat($format, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string does not match a given format string.
     *
     * @param string $format
     * @param string $message
     *
     * @return Expect
     */
    public function notToMatchFormat($format, $message = '')
    {
        Assert::assertStringNotMatchesFormat($format, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string matches a given format file.
     *
     * @param string $formatFile
     * @param string $message
     *
     * @return Expect
     */
    public function toMatchFormatFile($formatFile, $message = '')
    {
        Assert::assertStringMatchesFormatFile($formatFile, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string does not match a given format string.
     *
     * @param string $formatFile
     * @param string $message
     *
     * @return Expect
     */
    public function notToMatchFormatFile($formatFile, $message = '')
    {
        Assert::assertStringNotMatchesFormatFile($formatFile, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string starts with a given prefix.
     *
     * @param string $prefix
     * @param string $message
     *
     * @return Expect
     */
    public function toStartWith($prefix, $message = '')
    {
        Assert::assertStringStartsWith($prefix, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $message
     *
     * @return Expect
     */
    public function notToStartWith($prefix, $message = '')
    {
        Assert::assertStringStartsNotWith($prefix, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string ends with a given suffix.
     *
     * @param string $suffix
     * @param string $message
     *
     * @return Expect
     */
    public function toEndWith($suffix, $message = '')
    {
        Assert::stringEndsWith($suffix, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a string ends not with a given suffix.
     *
     * @param string $suffix
     * @param string $message
     *
     * @return Expect
     */
    public function notToEndWith($suffix, $message = '')
    {
        Assert::assertStringEndsNotWith($suffix, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two XML files or documents are equal.
     *
     * @param string $expectedFile
     * @param string $message
     *
     * @return Expect
     */
    public function toEqualXmlFile($expectedFile, $message = '')
    {
        if (file_exists($this->value)) { // file
            Assert::assertXmlFileEqualsXmlFile($expectedFile, $this->value, $message);
        } else { // string
            Assert::assertXmlStringEqualsXmlFile($expectedFile, $this->value, $message);
        }

        return $this;
    }

    /**
     * Expect that two XML files or documents are not equal.
     *
     * @param string $expectedFile
     * @param string $message
     *
     * @return Expect
     */
    public function notToEqualXmlFile($expectedFile, $message = '')
    {
        if (file_exists($this->value)) { // file
            Assert::assertXmlFileNotEqualsXmlFile($expectedFile, $this->value, $message);
        } else { // string
            Assert::assertXmlStringNotEqualsXmlFile($expectedFile, $this->value, $message);
        }

        return $this;
    }

    /**
     * Expect that two XML documents are equal.
     *
     * @param string $expectedXml
     * @param string $message
     *
     * @return Expect
     */
    public function toEqualXml($expectedXml, $message = '')
    {
        Assert::assertXmlStringEqualsXmlString($expectedXml, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two XML documents are not equal.
     *
     * @param string $expectedXml
     * @param string $message
     *
     * @return Expect
     */
    public function notToEqualXml($expectedXml, $message = '')
    {
        Assert::assertXmlStringNotEqualsXmlString($expectedXml, $this->value, $message);

        return $this;
    }

    /**
     * Expect that a hierarchy of DOMElements matches.
     *
     * @param DOMElement $expectedElement
     * @param bool $checkAttributes
     * @param string $message
     *
     * @return Expect
     */
    public function toHaveSameXMLStructureAs(DOMElement $expectedElement, $checkAttributes = false, $message = '')
    {
        Assert::assertEqualXMLStructure($expectedElement, $this->value, $checkAttributes, $message);

        return $this;
    }

    /**
     * Expect that a string is a valid JSON string.
     *
     * @param string $message
     *
     * @return Expect
     */
    public function toBeJson($message = '')
    {
        Assert::assertJson($this->value, $message);

        return $this;
    }

    /**
     * Expect that two given JSON encoded objects or arrays are equal.
     *
     * @param string $expectedJson
     * @param string $message
     *
     * @return Expect
     */
    public function toEqualJson($expectedJson, $message = '')
    {
        Assert::assertJsonStringEqualsJsonString($expectedJson, $this->value, $message);

        return $this;
    }

    /**
     * Expect that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $message
     *
     * @return Expect
     */
    public function notToEqualJson($expectedJson, $message = '')
    {
        Assert::assertJsonStringNotEqualsJsonString($expectedJson, $this->value, $message);

        return $this;
    }

    /**
     * Expect that the generated JSON encoded object and the content of the given file are equal.
     *
     * @param string $expectedFile
     * @param string $message
     *
     * @return Expect
     */
    public function toEqualJsonFile($expectedFile, $message = '')
    {
        if (file_exists($this->value)) { // file
            Assert::assertJsonFileEqualsJsonFile($expectedFile, $this->value, $message);
        } else { // string
            Assert::assertJsonStringEqualsJsonFile($expectedFile, $this->value, $message);
        }

        return $this;
    }

    /**
     * Expect that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @param string $expectedFile
     * @param string $message
     *
     * @return Expect
     */
    public function notToEqualJsonFile($expectedFile, $message = '')
    {
        if (file_exists($this->value)) { // file
            Assert::assertJsonFileEqualsJsonFile($expectedFile, $this->value, $message);
        } else { // string
            Assert::assertJsonStringNotEqualsJsonFile($expectedFile, $this->value, $message);
        }

        return $this;
    }
}
