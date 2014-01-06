<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>result</title>
  <meta name="description" content="" />
  <meta name="author" content="Parth Mishra" />

  <meta name="viewport" content="width=device-width; initial-scale=1.0" />

  <!-- Replace favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="/favicon.ico" />
  <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
</head>

<body>
  <div>
    <header>
      <h1>result</h1>
    </header>
 
    <?php
	 
	 /**
     *
     * @brief  
     * @author  Parth Mishra <pmishraworld@mac.com>
	 *
     */
   
    
	/**
	 * sn_length
	 * 
	 * @brief Checks the length of starting_number
	 * @param string $sn
	 * @return void
	 * @throws InvalidArgumentException if string is greater than 64 chars, it's invalid
	 */
	function sn_length($sn) {
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
	function sn_empty($sn) {
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
	function sn_n($sn) {
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
	function pm_md5sum($sn) {
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
	function result_length($result) {
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
	function result_lnn($result) {
		// check if the hash is only letters/numbers
	}
	
	?>
	
   </header>
    <span id="md5sum">
    	<?php 
    		$sn = $_GET["starting_number"];
			
    		try 
    		{
    			sn_length($sn);
				sn_empty($sn);
			//  sn_lnn($sn);
    		}
    		catch (InvalidArgumentException $e)
    		{
    			echo "Caught Exception: ", $e->getMessage(), "\n";	
    		}
			
			$result = pm_md5sum($sn);
    	
    		try
    		{
    			result_length($result);
			//	result_lnn($result);
    		}
			catch (UnexpectedValueException $f)
			{
				echo "Caught Exception: ", $f->getMessage(), "\n";
			}
			
			echo "Starting number: ", $sn, "\n";
			echo "Md5 sum: ", $result, "\n";
    	?>
    </span>
	<span id="starting_number">
	
	
    </span>
    
    <footer>
     <p>&copy; Copyright  by Parth Mishra</p>
    </footer>
  </div>
</body>
</html>
