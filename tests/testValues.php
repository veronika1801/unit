<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testValues extends TestCase
{
   
    public function testValues()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([13, 17], $collect->values()->toArray(), 'Values should be 13 and 17');
    }
}