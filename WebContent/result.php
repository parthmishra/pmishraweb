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
	
   </header>
    <span id="md5sum">
    	<?php 
    		include "md5.php";
    	
			$md5 = new pm_md5();
		
    		$md5->sn = $_GET["starting_number"];
			
    		try 
    		{
    			$md5->sn_length($md5->sn);
				$md5->sn_empty($md5->sn);
			//  sn_lnn($sn);
    		}
    		catch (InvalidArgumentException $e)
    		{
    			echo "Caught Exception: ", $e->getMessage(), "\n";	
    		}
			
			$md5->result = $md5->pm_md5sum($md5->sn);
    	
    		try
    		{
    			$md5->result_length($md5->result);
			//	result_lnn($result);
    		}
			catch (UnexpectedValueException $f)
			{
				echo "Caught Exception: ", $f->getMessage(), "\n";
			}
			
			echo "Starting number: ", $md5->sn, "\n";
			echo "Md5 sum: ", $md5->result, "\n";
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
