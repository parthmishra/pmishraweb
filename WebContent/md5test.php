<?php

require_once('md5.php');
require_once ('PHPUnit/Autoload.php');

class pm_md5test extends PHPUnit_Framework_TestCase
{
	
	
	function testIsRightObject()
	{
		$md5 = new pm_md5();
		$this->assertInstanceOf('pm_md5', $md5);
	}
	 

	/**
	* @expectedException InvalidArgumentException
	*/
	function testSnWrongLength()
	{
		$md5 = new pm_md5();
		$md5->sn = '0123456789012345678901234567890123456789012345678901234567890123456789';
		$md5->sn_length($md5->sn);
	}
	
	/**
	* @expectedException InvalidArgumentException
	*/
	function testSnEmpty()
	{
		$md5 = new pm_md5();
		$md5->sn = '';
		$md5->sn_empty($md5->sn);
	}
	
	function testresult_length()
	{
		$md5 = new pm_md5();
		$result = $md5->pm_md5sum($md5->sn);
		$this->assertEquals(32,strlen($result));
	}
	
	/**
	* @expectedException UnexpectedValueException
	*/
	function testresult_lengthwrong()
	{
		$md5 = new pm_md5();
		$result = '0123456789012345678901234567890123456789012345678901234567890123456789';
		$md5->result_length($result);		
	}
	
}


?>