<!DOCTYPE html>
	<html>

    <head>
	
	<title>PHP Unit 4 Functions
			Kim Spicer  Feb 3, 2018
	</title>
	
	<style>
	
	
	
	</style>
	
	<script>
	
	</script>

	
	</head>
<?php	
		$collegeName = "DMACC"; //global
		
		$name1 = "Kim"; //global
		$name2 = "Spicer"; //global
	
	
		function printCollege($inSchoolName){
				
			echo $inSchoolName;	
			}
	
	
	
		function characterCount($inString){
			return 	strlen($inString);	//Provides the number of characters in the input string
		}

		
	
		function studentInfo($fname, $lname, $college) {
					$str = "     - $fname  $lname , I attend $college";
					//echo " <strong> My name is $fname  $lname , I attend $college </strong> <br />";
					echo strtolower($str);
					echo trim($str);
				}

		




?>
	<body>
	<h1>Unit  4 Functions</h1>
	
   <p> Create a function that will accept a date input and format it into mm/dd/yyyy format.<br>
		
		<strong><?php echo "Today is "  . date("m/d/Y"). "<br>"; ?></strong>
		<br>
    Create a function that will accept a date input and format it into dd/mm/yyyy format to use when working with international dates.<br>
		
		
			<strong><?php echo "Today is " . date("d-m-Y"). "<br>"; ?></strong>
			
		<br>
		
		
		
		
    Create a function that will accept a string input.  It will do the following things to the string:<br>
			
		<strong><p>My classes are at <?php echo printCollege($collegeName) ;  ?> </p></strong>
		
		
			Display the number of characters in the string<br>
		 <strong><p> My string has <?php echo  characterCount($collegeName); ?> characters.</p></strong><br>
			
			Trim any leading or trailing whitespace<br>
		 
			
			Display the string as all lowercase characters<br>	
			
			Will display whether or not the string contains "DMACC" either upper or lowercase
		<br>
		 <strong><p>  Here is student information <?php echo studentInfo($name1, $name2, $collegeName); ?> </p></strong>
		
		<br>
		<!--
		<form action="/Unit4Functions.php" target = "_blank" method = "post">
			First name:<br>
			<input type="text" name="firstname" >
			<br>
			Last name:<br>
			<input type="text" name="lastname">
			<br>
			College name:<br>
			<input type="text" name="collegename">
			<br>
			<br>
			<input type="submit">
		</form>
		-->
		<br>
		<br>
		<br>
		
		
		
		
    Create a function that will accept a number and display it as a formatted number.   Use 1234567890 for your testing.<br>
	
		<div>
		
		</div>
	
		<br>
    Create a function that will accept a number and display it as US currency.  Use 123456 for your testing.<br>
		<div>
		
		</div>
	
	
	</p>
	
	
	
	
	<footer>
	
	</footer>
	</body>
</html>