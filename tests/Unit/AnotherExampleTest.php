<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class AnotherExampleTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
        $this->assertFalse(1 == '10');
    }

    public function test_contains(): void
    {
        $this->assertContains(4, [1, 2, 3, 4]);
    }

    public function test_count(): void
    {
        $this->assertCount(1, ['foo']);
    }

    public function test_empty(): void
    {
        $this->assertEmpty([]);
        $this->assertNotEmpty([1]);
    }

    public function test_equals1(): void
    {
        $this->assertEquals(1, 1);
    }

    public function test_equals2(): void
    {
        $this->assertEquals('bar', 'bar');
    }

    public function test_equals3(): void
    {
        $this->assertEquals(['a', 'b', 'c'], ['a', 'b', 'c']);
    }

    public function test_equals4(): void
    {
        $expected = new \stdClass;
        $expected->foo = 'foo';
        $expected->bar = 'bar';

        $actual = new \stdClass;
        $actual->foo = 'foo';
        $actual->bar = 'bar';

        $this->assertEquals($expected, $actual);
    }

    public function test_greater_than(): void
    {
        $this->assertGreaterThan(1, 2);
    }

    public function testLessThan(): void
    {
        $this->assertLessThan(2, 1);
    }
}
