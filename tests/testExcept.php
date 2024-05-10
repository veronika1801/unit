<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class CollectTest extends TestCase
{
    
    public function testExcept()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([1 => 17], $collect->except(0)->toArray(), 'Except should be [1 => 17]');
        $this->assertSame([0 => 13], $collect->except(1)->toArray(), 'Except should be [0 => 13]');
    }
}