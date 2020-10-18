<?php

namespace CodeTests\Arithmetic;
use PHPUnit\Framework\TestCase;

/**
 * Some random tests with phpunit
 * @author     Gustavo <https://github.com/gsaraujo>
 * @license    MIT License
 * @copyright  2020 Gustavo
 */
class SumTest extends TestCase
{
	public function testTwoNumbersSum()
	{
		$sum = new Sum();
		$sum->setNum1(10);
		$sum->setNum2(20);

		$this->assertEquals(30,$sum->add());
	}
	

}