<?php
use Math;
class MathTest extends \PHPUnit\Framework\TestCase
{
    public function testAdd()
    {
        $this->assertEquals("Addition is 15", (new Math())->add());
    }

}