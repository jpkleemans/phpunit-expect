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
     * @var bool
     */
    private $not = false;

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
     * Evaluate to a negative expectation.
     *
     * @return Expect
     */
    public function not()
    {
        $this->not = true;

        return $this;
    }

    /**
     * Expect that an array has a specified key.
     *
     * @param mixed $key
     */
    public function toHaveKey($key)
    {
        if ($this->not) {
            Assert::assertArrayNotHasKey($key, $this->value);
        } else {
            Assert::assertArrayHasKey($key, $this->value);
        }
    }

    /**
     * Expect that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param bool $strict Check for object identity
     */
    public function toHaveSubset($subset, $strict = false)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertArraySubset($subset, $this->value, $strict);
        }
    }

    /**
     * Expect that a haystack contains a needle.
     *
     * @param mixed $needle
     * @param bool $ignoreCase
     * @param bool $checkForObjectIdentity
     * @param bool $checkForNonObjectIdentity
     */
    public function toContain($needle, $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
    {
        if ($this->not) {
            Assert::assertNotContains($needle, $this->value, '', $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);
        } else {
            Assert::assertContains($needle, $this->value, '', $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);
        }
    }

    /**
     * Expect that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param bool $isNativeType
     */
    public function toContainOnly($type, $isNativeType = null)
    {
        if ($this->not) {
            Assert::assertNotContainsOnly($type, $this->value, $isNativeType);
        } else {
            Assert::assertContainsOnly($type, $this->value, $isNativeType);
        }
    }

    /**
     * Expect that a haystack contains only instances of a given classname
     *
     * @param string $classname
     */
    public function toContainOnlyInstancesOf($classname)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertContainsOnlyInstancesOf($classname, $this->value);
        }
    }

    /**
     * Expect the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     */
    public function toHaveCountOf($expectedCount)
    {
        if ($this->not) {
            Assert::assertNotCount($expectedCount, $this->value);
        } else {
            Assert::assertCount($expectedCount, $this->value);
        }
    }

    /**
     * Expect that two variables are equal.
     *
     * @param mixed $expected
     * @param float $delta
     * @param int $maxDepth
     * @param bool $canonicalize
     * @param bool $ignoreCase
     */
    public function toEqual($expected, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
    {
        if ($this->not) {
            Assert::assertNotEquals($expected, $this->value, '', $delta, $maxDepth, $canonicalize, $ignoreCase);
        } else {
            Assert::assertEquals($expected, $this->value, '', $delta, $maxDepth, $canonicalize, $ignoreCase);
        }
    }

    /**
     * Expect that a variable is empty.
     */
    public function toBeEmpty()
    {
        if ($this->not) {
            Assert::assertNotEmpty($this->value);
        } else {
            Assert::assertEmpty($this->value);
        }
    }

    /**
     * Expect that a value is greater than another value.
     *
     * @param mixed $expected
     */
    public function toBeGreaterThan($expected)
    {
        if ($this->not) {
            Assert::assertLessThanOrEqual($expected, $this->value);
        } else {
            Assert::assertGreaterThan($expected, $this->value);
        }
    }

    /**
     * Expect that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     */
    public function toBeGreaterThanOrEqualTo($expected)
    {
        if ($this->not) {
            Assert::assertLessThan($expected, $this->value);
        } else {
            Assert::assertGreaterThanOrEqual($expected, $this->value);
        }
    }

    /**
     * Expect that a value is smaller than another value.
     *
     * @param mixed $expected
     */
    public function toBeLessThan($expected)
    {
        if ($this->not) {
            Assert::assertGreaterThanOrEqual($expected, $this->value);
        } else {
            Assert::assertLessThan($expected, $this->value);
        }
    }

    /**
     * Expect that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     */
    public function toBeLessThanOrEqualTo($expected)
    {
        if ($this->not) {
            Assert::assertGreaterThan($expected, $this->value);
        } else {
            Assert::assertLessThanOrEqual($expected, $this->value);
        }
    }

    /**
     * Expect that the contents of one file or a string is equal to the contents of another
     * file.
     *
     * @param string $expectedFile
     * @param bool $canonicalize
     * @param bool $ignoreCase
     */
    public function toEqualFile($expectedFile, $canonicalize = false, $ignoreCase = false)
    {
        if (file_exists($expectedFile)) { // file
            if ($this->not) {
                Assert::assertFileNotEquals($expectedFile, $this->value, '', $canonicalize, $ignoreCase);
            } else {
                Assert::assertFileEquals($expectedFile, $this->value, '', $canonicalize, $ignoreCase);
            }
        } else { // string
            if ($this->not) {
                Assert::assertStringNotEqualsFile($expectedFile, $this->value, '', $canonicalize, $ignoreCase);
            } else {
                Assert::assertStringEqualsFile($expectedFile, $this->value, '', $canonicalize, $ignoreCase);
            }
        }
    }

    /**
     * Expect that a file exists.
     */
    public function toExist()
    {
        if ($this->not) {
            Assert::assertFileNotExists($this->value);
        } else {
            Assert::assertFileExists($this->value);
        }
    }

    /**
     * Expect that a condition is true.
     */
    public function toBeTrue()
    {
        if ($this->not) {
            Assert::assertNotTrue($this->value);
        } else {
            Assert::assertTrue($this->value);
        }
    }

    /**
     * Expect that a condition is false.
     */
    public function toBeFalse()
    {
        if ($this->not) {
            Assert::assertNotFalse($this->value);
        } else {
            Assert::assertFalse($this->value);
        }
    }

    /**
     * Expect that a variable is null.
     */
    public function toBeNull()
    {
        if ($this->not) {
            Assert::assertNotNull($this->value);
        } else {
            Assert::assertNull($this->value);
        }
    }

    /**
     * Expect that a variable is finite.
     */
    public function toBeFinite()
    {
        if ($this->not) {
            Assert::assertInfinite($this->value);
        } else {
            Assert::assertFinite($this->value);
        }
    }

    /**
     * Expect that a variable is infinite.
     */
    public function toBeInfinite()
    {
        if ($this->not) {
            Assert::assertFinite($this->value);
        } else {
            Assert::assertInfinite($this->value);
        }
    }

    /**
     * Expect that a variable is nan.
     */
    public function toBeNan()
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertNan($this->value);
        }
    }

    /**
     * Expect that a class or an object has a specified attribute.
     *
     * @param string $attributeName
     */
    public function toHaveAttribute($attributeName)
    {
        if (is_string($this->value)) { // class
            if ($this->not) {
                Assert::assertClassNotHasAttribute($attributeName, $this->value);
            } else {
                Assert::assertClassHasAttribute($attributeName, $this->value);
            }
        } else { // object
            if ($this->not) {
                Assert::assertObjectNotHasAttribute($attributeName, $this->value);
            } else {
                Assert::assertObjectHasAttribute($attributeName, $this->value);
            }
        }
    }

    /**
     * Expect that a class has a specified static attribute.
     *
     * @param string $attributeName
     */
    public function toHaveStaticAttribute($attributeName)
    {
        if ($this->not) {
            Assert::assertClassNotHasStaticAttribute($attributeName, $this->value);
        } else {
            Assert::assertClassHasStaticAttribute($attributeName, $this->value);
        }
    }

    /**
     * Expect that two variables have the same type and value.
     * Used on objects, it Expect that two variables reference
     * the same object.
     *
     * @param mixed $expected
     */
    public function toBeIdenticalTo($expected)
    {
        if ($this->not) {
            Assert::assertNotSame($expected, $this->value);
        } else {
            Assert::assertSame($expected, $this->value);
        }
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     */
    public function toBeInstanceOf($expected)
    {
        if ($this->not) {
            Assert::assertNotInstanceOf($expected, $this->value);
        } else {
            Assert::assertInstanceOf($expected, $this->value);
        }
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     */
    public function toBeOfType($expected)
    {
        if ($this->not) {
            Assert::assertNotInternalType($expected, $this->value);
        } else {
            Assert::assertInternalType($expected, $this->value);
        }
    }

    /**
     * Expect that a string matches a given regular expression.
     *
     * @param string $pattern
     */
    public function toMatchRegExp($pattern)
    {
        if ($this->not) {
            Assert::assertNotRegExp($pattern, $this->value);
        } else {
            Assert::assertRegExp($pattern, $this->value);
        }
    }

    /**
     * Expect that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param array|Countable|Traversable $expected
     */
    public function toHaveSameSizeAs($expected)
    {
        if ($this->not) {
            Assert::assertNotSameSize($expected, $this->value);
        } else {
            Assert::assertSameSize($expected, $this->value);
        }
    }

    /**
     * Expect that a string matches a given format string.
     *
     * @param string $format
     */
    public function toMatchFormat($format)
    {
        if ($this->not) {
            Assert::assertStringNotMatchesFormat($format, $this->value);
        } else {
            Assert::assertStringMatchesFormat($format, $this->value);
        }
    }

    /**
     * Expect that a string matches a given format file.
     *
     * @param string $formatFile
     */
    public function toMatchFormatFile($formatFile)
    {
        if ($this->not) {
            Assert::assertStringNotMatchesFormatFile($formatFile, $this->value);
        } else {
            Assert::assertStringMatchesFormatFile($formatFile, $this->value);
        }
    }

    /**
     * Expect that a string starts with a given prefix.
     *
     * @param string $prefix
     */
    public function toStartWith($prefix)
    {
        if ($this->not) {
            Assert::assertStringStartsNotWith($prefix, $this->value);
        } else {
            Assert::assertStringStartsWith($prefix, $this->value);
        }
    }

    /**
     * Expect that a string ends with a given suffix.
     *
     * @param string $suffix
     */
    public function toEndWith($suffix)
    {
        if ($this->not) {
            Assert::assertStringEndsNotWith($suffix, $this->value);
        } else {
            Assert::assertStringEndsWith($suffix, $this->value);
        }
    }

    /**
     * Expect that the contents of one XML file or a string is equal to the contents of another
     * XML file.
     *
     * @param string $expectedFile
     */
    public function toEqualXmlFile($expectedFile)
    {
        if (file_exists($expectedFile)) { // file
            if ($this->not) {
                Assert::assertXmlFileNotEqualsXmlFile($expectedFile, $this->value);
            } else {
                Assert::assertXmlFileEqualsXmlFile($expectedFile, $this->value);
            }
        } else { // string
            if ($this->not) {
                Assert::assertXmlStringNotEqualsXmlFile($expectedFile, $this->value);
            } else {
                Assert::assertXmlStringEqualsXmlFile($expectedFile, $this->value);
            }
        }
    }

    /**
     * Expect that a hierarchy of DOMElements matches.
     *
     * @param DOMElement $expectedElement
     * @param bool $checkAttributes
     */
    public function toHaveSameXMLStructureAs(DOMElement $expectedElement, $checkAttributes = false)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertEqualXMLStructure($expectedElement, $this->value, $checkAttributes);
        }
    }

    /**
     * Expect that a string is a valid JSON string.
     */
    public function toBeJson()
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertJson($this->value);
        }
    }

    /**
     * Expect that two given JSON encoded objects or arrays are equal.
     *
     * @param string $expectedJson
     */
    public function toEqualJson($expectedJson)
    {
        if ($this->not) {
            Assert::assertJsonStringNotEqualsJsonString($expectedJson, $this->value);
        } else {
            Assert::assertJsonStringEqualsJsonString($expectedJson, $this->value);
        }
    }

    /**
     * Expect that the generated JSON encoded object and the content of the given file are equal.
     *
     * @param string $expectedFile
     */
    public function toEqualJsonFile($expectedFile)
    {
        if (file_exists($expectedFile)) { // file
            if ($this->not) {
                Assert::assertJsonFileEqualsJsonFile($expectedFile, $this->value);
            } else {
                Assert::assertJsonFileEqualsJsonFile($expectedFile, $this->value);
            }
        } else { // string
            if ($this->not) {
                Assert::assertJsonStringNotEqualsJsonFile($expectedFile, $this->value);
            } else {
                Assert::assertJsonStringEqualsJsonFile($expectedFile, $this->value);
            }
        }
    }
}
