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
     *
     * @return Expect
     */
    public function toHaveKey($key)
    {
        if ($this->not) {
            Assert::assertArrayNotHasKey($key, $this->value);
        } else {
            Assert::assertArrayHasKey($key, $this->value);
        }

        return $this;
    }

    /**
     * Expect that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param bool $strict Check for object identity
     *
     * @return Expect
     */
    public function toHaveSubset($subset, $strict = false)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertArraySubset($subset, $this->value, $strict);
        }

        return $this;
    }

    /**
     * Expect that a haystack contains a needle.
     *
     * @param mixed $needle
     * @param bool $ignoreCase
     * @param bool $checkForObjectIdentity
     * @param bool $checkForNonObjectIdentity
     *
     * @return Expect
     */
    public function toContain($needle, $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
    {
        if ($this->not) {
            Assert::assertNotContains($needle, $this->value, '', $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);
        } else {
            Assert::assertContains($needle, $this->value, '', $ignoreCase, $checkForObjectIdentity, $checkForNonObjectIdentity);
        }

        return $this;
    }

    /**
     * Expect that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param bool $isNativeType
     *
     * @return Expect
     */
    public function toContainOnly($type, $isNativeType = null)
    {
        if ($this->not) {
            Assert::assertNotContainsOnly($type, $this->value, $isNativeType);
        } else {
            Assert::assertContainsOnly($type, $this->value, $isNativeType);
        }

        return $this;
    }

    /**
     * Expect that a haystack contains only instances of a given classname
     *
     * @param string $classname
     *
     * @return Expect
     */
    public function toContainOnlyInstancesOf($classname)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertContainsOnlyInstancesOf($classname, $this->value);
        }

        return $this;
    }

    /**
     * Expect the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     *
     * @return Expect
     */
    public function toHaveCountOf($expectedCount)
    {
        if ($this->not) {
            Assert::assertNotCount($expectedCount, $this->value);
        } else {
            Assert::assertCount($expectedCount, $this->value);
        }

        return $this;
    }

    /**
     * Expect that two variables have the same type and value.
     * Used on objects, it Expect that two variables reference
     * the same object.
     *
     * @param mixed $expected
     *
     * @return Expect
     */
    public function toBe($expected)
    {
        if ($this->not) {
            Assert::assertNotSame($expected, $this->value);
        } else {
            Assert::assertSame($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that two variables are equal.
     *
     * @param mixed $expected
     * @param float $delta
     * @param int $maxDepth
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
     */
    public function toEqual($expected, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
    {
        if ($this->not) {
            Assert::assertNotEquals($expected, $this->value, '', $delta, $maxDepth, $canonicalize, $ignoreCase);
        } else {
            Assert::assertEquals($expected, $this->value, '', $delta, $maxDepth, $canonicalize, $ignoreCase);
        }

        return $this;
    }

    /**
     * Expect that a variable is empty.
     *
     * @return Expect
     */
    public function toBeEmpty()
    {
        if ($this->not) {
            Assert::assertNotEmpty($this->value);
        } else {
            Assert::assertEmpty($this->value);
        }

        return $this;
    }

    /**
     * Expect that a value is greater than another value.
     *
     * @param mixed $expected
     *
     * @return Expect
     */
    public function toBeGreaterThan($expected)
    {
        if ($this->not) {
            Assert::assertLessThanOrEqual($expected, $this->value);
        } else {
            Assert::assertGreaterThan($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a value is greater than or equal to another value.
     *
     * @param mixed $expected
     *
     * @return Expect
     */
    public function toBeGreaterThanOrEqualTo($expected)
    {
        if ($this->not) {
            Assert::assertLessThan($expected, $this->value);
        } else {
            Assert::assertGreaterThanOrEqual($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a value is smaller than another value.
     *
     * @param mixed $expected
     *
     * @return Expect
     */
    public function toBeLessThan($expected)
    {
        if ($this->not) {
            Assert::assertGreaterThanOrEqual($expected, $this->value);
        } else {
            Assert::assertLessThan($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a value is smaller than or equal to another value.
     *
     * @param mixed $expected
     *
     * @return Expect
     */
    public function toBeLessThanOrEqualTo($expected)
    {
        if ($this->not) {
            Assert::assertGreaterThan($expected, $this->value);
        } else {
            Assert::assertLessThanOrEqual($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that the contents of one file or a string is equal to the contents of another
     * file.
     *
     * @param string $expectedFile
     * @param bool $canonicalize
     * @param bool $ignoreCase
     *
     * @return Expect
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

        return $this;
    }

    /**
     * Expect that a file exists.
     *
     * @return Expect
     */
    public function toExist()
    {
        if ($this->not) {
            Assert::assertFileNotExists($this->value);
        } else {
            Assert::assertFileExists($this->value);
        }

        return $this;
    }

    /**
     * Expect that a condition is true.
     *
     * @return Expect
     */
    public function toBeTrue()
    {
        if ($this->not) {
            Assert::assertNotTrue($this->value);
        } else {
            Assert::assertTrue($this->value);
        }

        return $this;
    }

    /**
     * Expect that a condition is false.
     *
     * @return Expect
     */
    public function toBeFalse()
    {
        if ($this->not) {
            Assert::assertNotFalse($this->value);
        } else {
            Assert::assertFalse($this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is null.
     *
     * @return Expect
     */
    public function toBeNull()
    {
        if ($this->not) {
            Assert::assertNotNull($this->value);
        } else {
            Assert::assertNull($this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is finite.
     *
     * @return Expect
     */
    public function toBeFinite()
    {
        if ($this->not) {
            Assert::assertInfinite($this->value);
        } else {
            Assert::assertFinite($this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is infinite.
     *
     * @return Expect
     */
    public function toBeInfinite()
    {
        if ($this->not) {
            Assert::assertFinite($this->value);
        } else {
            Assert::assertInfinite($this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is nan.
     *
     * @return Expect
     */
    public function toBeNan()
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertNan($this->value);
        }

        return $this;
    }

    /**
     * Expect that a class or an object has a specified attribute.
     *
     * @param string $attributeName
     *
     * @return Expect
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

        return $this;
    }

    /**
     * Expect that a class has a specified static attribute.
     *
     * @param string $attributeName
     *
     * @return Expect
     */
    public function toHaveStaticAttribute($attributeName)
    {
        if ($this->not) {
            Assert::assertClassNotHasStaticAttribute($attributeName, $this->value);
        } else {
            Assert::assertClassHasStaticAttribute($attributeName, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     *
     * @return Expect
     */
    public function toBeInstanceOf($expected)
    {
        if ($this->not) {
            Assert::assertNotInstanceOf($expected, $this->value);
        } else {
            Assert::assertInstanceOf($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a variable is of a given type.
     *
     * @param string $expected
     *
     * @return Expect
     */
    public function toBeOfType($expected)
    {
        if ($this->not) {
            Assert::assertNotInternalType($expected, $this->value);
        } else {
            Assert::assertInternalType($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a string matches a given regular expression.
     *
     * @param string $pattern
     *
     * @return Expect
     */
    public function toMatchRegExp($pattern)
    {
        if ($this->not) {
            Assert::assertNotRegExp($pattern, $this->value);
        } else {
            Assert::assertRegExp($pattern, $this->value);
        }

        return $this;
    }

    /**
     * Expect that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param array|Countable|Traversable $expected
     *
     * @return Expect
     */
    public function toHaveSameSizeAs($expected)
    {
        if ($this->not) {
            Assert::assertNotSameSize($expected, $this->value);
        } else {
            Assert::assertSameSize($expected, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a string matches a given format string.
     *
     * @param string $format
     *
     * @return Expect
     */
    public function toMatchFormat($format)
    {
        if ($this->not) {
            Assert::assertStringNotMatchesFormat($format, $this->value);
        } else {
            Assert::assertStringMatchesFormat($format, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a string matches a given format file.
     *
     * @param string $formatFile
     *
     * @return Expect
     */
    public function toMatchFormatFile($formatFile)
    {
        if ($this->not) {
            Assert::assertStringNotMatchesFormatFile($formatFile, $this->value);
        } else {
            Assert::assertStringMatchesFormatFile($formatFile, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a string starts with a given prefix.
     *
     * @param string $prefix
     *
     * @return Expect
     */
    public function toStartWith($prefix)
    {
        if ($this->not) {
            Assert::assertStringStartsNotWith($prefix, $this->value);
        } else {
            Assert::assertStringStartsWith($prefix, $this->value);
        }

        return $this;
    }

    /**
     * Expect that a string ends with a given suffix.
     *
     * @param string $suffix
     *
     * @return Expect
     */
    public function toEndWith($suffix)
    {
        if ($this->not) {
            Assert::assertStringEndsNotWith($suffix, $this->value);
        } else {
            Assert::assertStringEndsWith($suffix, $this->value);
        }

        return $this;
    }

    /**
     * Expect that the contents of one XML file or a string is equal to the contents of another
     * XML file.
     *
     * @param string $expectedFile
     *
     * @return Expect
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

        return $this;
    }

    /**
     * Expect that a hierarchy of DOMElements matches.
     *
     * @param DOMElement $expectedElement
     * @param bool $checkAttributes
     *
     * @return Expect
     */
    public function toHaveSameXMLStructureAs(DOMElement $expectedElement, $checkAttributes = false)
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertEqualXMLStructure($expectedElement, $this->value, $checkAttributes);
        }

        return $this;
    }

    /**
     * Expect that a string is a valid JSON string.
     *
     * @return Expect
     */
    public function toBeJson()
    {
        if ($this->not) {
            // TODO
        } else {
            Assert::assertJson($this->value);
        }

        return $this;
    }

    /**
     * Expect that two given JSON encoded objects or arrays are equal.
     *
     * @param string $expectedJson
     *
     * @return Expect
     */
    public function toEqualJson($expectedJson)
    {
        if ($this->not) {
            Assert::assertJsonStringNotEqualsJsonString($expectedJson, $this->value);
        } else {
            Assert::assertJsonStringEqualsJsonString($expectedJson, $this->value);
        }

        return $this;
    }

    /**
     * Expect that the generated JSON encoded object and the content of the given file are equal.
     *
     * @param string $expectedFile
     *
     * @return Expect
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

        return $this;
    }
}
