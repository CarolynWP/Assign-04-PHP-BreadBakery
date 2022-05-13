<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- CSS -->
    <link rel="stylesheet" href="./css/style.css" />

		<!-- Bread Stapled To Tree Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png" />
    <link rel="manifest" href="./favicon/site.webmanifest" />
		
		<!-- title -->
    <title>Sad Slices Bakery.</title>
	</head>
	
	<!-- Body -->
	<body>
		<div class="margin">
			<?php echo "<h1>Sad Slices.</h1>" ?>
			<?php echo "<h4>serving you woeful whole-wheat bread since 1928. I think.</h4>"?>
			<br>
			<?php echo "<h3>You're ordering at Sad Slices.<br> Enter your order somewhere.</h3>"?>
			<br>	
			<!-- order buttons and information. -->
				<!-- drop-down menu for slices -->
					<label for="slices"><h4>Choose a slice.</h4></label>
					<select name="slices" id="slices">
						<option value="nothing"></option>
						<option value="1">one slice.</option>
						<option value="2">two slices.</option>
						<option value="3">three slices.</option>
					</select>
			<br>
					<!-- drop-down menu for toppings -->
					<label for="toppings"><h4>choose a topping.</h4></label>
					<select name="toppings" id="toppings">
						<option value="nothing"></option>
						<option value="butter">heartbroken butter.</option>
						<option value="avocado">anguished avocado.</option>
						<option value="jam">joyless jam.</option>
						<option value="sprinkles">sorrowful sprinkles.</option>
						<option value="garlic">grieving garlic and cheese.</option>
					</select>
				<br>
				<!-- drink option-->
				<h4>Tap water on the side?</h4>
				<input type="checkbox" id="myCheck" onclick="javascript:happySlices()">
				<label for="myCheck">I guess so..</label>
				<br>
				<br>
				<!-- button to sumbit your answer -->
				<input type = "submit" name = "submit" value="order."> 
				<!-- calculation -->
				<?php   
					if (isset($_POST["submit"])) {   
					
						}
					?>
		</div>
	</body>
</html>