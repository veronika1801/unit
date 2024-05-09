<?php

use PHPUnit\Framework\TestCase;

class CollectTest extends TestCase
{
    public function testKeys()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([0, 1], $collect->keys()->toArray(), 'Keys should be 0 and 1');

        $collect = new Collect([13 => 13, 17 => 17]);
        $this->assertSame([13, 17], $collect->keys()->toArray(), 'Keys should be 13 and 17');
    }
    public function testValues()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([13, 17], $collect->values()->toArray(), 'Values should be 13 and 17');
    }
    public function testGet()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame(13, $collect->get(0), 'Get should be 13');
        $this->assertSame(17, $collect->get(1), 'Get should be 17');
        $this->assertSame([13, 17], $collect->get(), 'Get should be [13, 17]');
    }
    public function testExcept()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([1 => 17], $collect->except(0)->toArray(), 'Except should be [1 => 17]');
        $this->assertSame([0 => 13], $collect->except(1)->toArray(), 'Except should be [0 => 13]');
    }
}