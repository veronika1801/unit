<?php

use PHPUnit\Framework\TestCase;
use Collect\Collect;

class testKeys extends TestCase
{
    public function testKeys()
    {
        $collect = new Collect([13, 17]);
        $this->assertSame([0, 1], $collect->keys()->toArray(), 'Keys should be 0 and 1');

        $collect = new Collect([13 => 13, 17 => 17]);
        $this->assertSame([13, 17], $collect->keys()->toArray(), 'Keys should be 13 and 17');
    }
}