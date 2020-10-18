<?php

namespace CodeTests\Arithmetic;
use PHPUnit\Framework\TestCase;
use CodeTests\Arithmetic\Subtraction;

/**
 * Some random tests with phpunit (TDD - I started with this class, then the Subtraction class)
 * @author     Gustavo <https://github.com/gsaraujo>
 * @license    MIT License
 * @copyright  2020 Gustavo
 */

class SubtractionTest extends TestCase
{
	public function assertPreConditions()
	{		
		$this->assertTrue(class_exists('CodeTests\Arithmetic\Subtraction'));
	}

	public function testTwoNumbersSubtraction()	
	{
		$sub = new Subtraction();
		$sub->setNum1(15);
		$sub->setNum2(10);

		$this->assertEquals(5,$sub->subtract());

		$sub = new Subtraction();
		$sub->setNum1(50);
		$sub->setNum2(30);

		$this->assertEquals(20,$sub->subtract());
	}

	/**
	* @expectedException \InvalidArgumentException
	* @expectedExceptionMessage No parameter
	**/

	public function testCaseParametersAreEmpty()
	{
		$sub = new Subtraction();
		$sub->setNum1(50);
		$sub->setNum2();
	}
}