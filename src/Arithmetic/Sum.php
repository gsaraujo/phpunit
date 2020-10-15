<?php

namespace CodeTests\Arithmetic;

/**
 * Some random tests with phpunit - Sum class to add numbers
 * @author     Gustavo <https://github.com/gsaraujo>
 * @license    MIT License
 * @copyright  2020 Gustavo
 */
class Sum
{

	private $num1;
	private $num2;

	/**
	* @param mixed
	*/
	public function getNum1()
	{
		return $this->num1;
	}

	/**
	* @param mixed $num1
	*/
	public function setNum1($num1 = null)
	{
		if(is_null($num1))
		{
			throw new \InvalidArgumentException("No parameter");
			
		}
		$this->num1 = $num1;
	}


	/**
	* @return mixed
	*/
	public function getNum2()
	{
		return $this->num2;
	}


	/**
	* @param mixed $num2
	*/
	public function setNum2($num2 = null)
	{
		if(is_null($num2))
		{
			throw new \InvalidArgumentException("No parameter");
			
		}
		$this->num2 = $num2;
	}

	public function add()
	{
		return $this->num1 + $this->num2;
	}


}