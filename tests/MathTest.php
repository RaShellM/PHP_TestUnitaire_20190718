<?php 
require "vendor/autoload.php";

class MathTest extends PHPUnit\Framework\TestCase
{
	public function testMultiply()
		{
		$this->assertEquals(9, \calcul\Math::multiply(4));
		}
}



