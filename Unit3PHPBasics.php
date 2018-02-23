<!DOCTYPE html>
    <head>
	
	<title>Unit 3 PHP Basics
			Kim Spicer
			Intro PHP
			1/17/18
	</title>
	
	<style>
	
	
	
	</style>
	
	<script>
		var lang = ["PHP", "HTML", "Javascript"];
        
		
	</script>

	
	</head>
	
	<body>
	
		<h1>Unit 3 PHP Basics</h1>
		<?php
		$yourName = "Kim Spicer";
	?>
		<h2><?php echo $yourName; ?></h2>
	
	
	<?php
		$number1 = 5;
		$number2 = 6;
		$total = $number1 + $number2;
	?>
	<?php  echo $total  ?>
	<br>
	<?php
		$Lang = array("PHP", "HTML", "Javascript"); 
		echo "Required array, ". $Lang[0] . ", " . $Lang[1] . " and " . $Lang[2] . ".";
		?>
	 
	
	<footer>
	
	</footer>
	</body>
</html>