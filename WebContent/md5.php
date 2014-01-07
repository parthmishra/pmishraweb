<?php
    
class pm_md5 {
	 
	 /**
     *
     * @brief  
     * @author  Parth Mishra <pmishraworld@mac.com>
	 *
     */
   
   public $sn;
   public $result;
    
	/**
	 * sn_length
	 * 
	 * @brief Checks the length of starting_number
	 * @param string $sn
	 * @return void 
	 * @throws InvalidArgumentException if string is greater than 64 chars, it's invalid
	 */
	public function sn_length($sn) {
		if (strlen($sn) > 64) {
		    throw new InvalidArgumentException("String bigger than 64 characters.");
		}
	}
	
	/**
	 * sn_empty
	 * 
	 * @brief make sure the starting_number isn't empty
	 * @param string $sn
	 * @return void
	 * @throws InvalidArgumentException if string is empty (size 0)
	 * 
	 */
	public function sn_empty($sn) {
		if (strlen($sn) == 0) {
			throw new InvalidArgumentException("No string provided.");
		}
	}
	
	/**
	 * sn_n
	 * 
	 * @brief make sure the input string is only numbers (no letters/punctions)
	 * @param string $sn
	 * @return void
	 * @throws InvalidArgumentException if there are any non-numbers in it
	 * 
	 */
	public function sn_n($sn) {
		// check if only numbers
	}
	
	/**
	 * md5sum
	 * 
	 * @brief create a 64 character md5 hash of a inputted string 
	 * @param string $sn that is of length 64 or less, non-empty, and contains only numbers
	 * @return string $result, a 32 character string composed of numbers and/or letters 
	 * 
	 */
	public function pm_md5sum($sn) {
		$result = md5($sn);
		return $result;
	}
	
	/**
	 * result_length
	 * 
	 * @brief ensure that the result string from md5sum is 32 characters long
	 * @param string $result
	 * @return void
	 * @throws UnexpectedValueException if string length is not 32
	 * 
	 */
	public function result_length($result) {
		if (strlen($result) != 32) {
			throw new UnexpectedValueException("md5 hash not correct size.");
		}
	}
	
	/**
	 * result_lnn
	 * 
	 * @brief ensure that $result string contains only letters and/or numbers 
	 * @param string $result
	 * @return void
	 * @throws UnexpectedValueException if any non-letter/numbers are found in string
	 * 
	 */
	public function result_lnn($result) {
		// check if the hash is only letters/numbers
	}
	
	}
?>