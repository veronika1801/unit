<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testGet extends TestCase
{
    
    public function testGet()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame(13, $collect->get(0), 'Get should be 13');
        $this->assertSame(17, $collect->get(1), 'Get should be 17');
        $this->assertSame([13, 17], $collect->get(), 'Get should be [13, 17]');
    }
    
}