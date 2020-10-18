<?php

namespace CodeTests\Arithmetic;
use PHPUnit\Framework\TestCase;

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
}