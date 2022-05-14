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
		<div class="slogan">
			<?php echo "<h1>Sad Slices.</h1>" ?>
			<?php echo "<h4>Serving you woeful whole-wheat bread since 1928 :(</h4>"?>
		</div>
		
		<!-- images -->
			<div class="slice1">
				<?php echo '<img src="./images/sad_slice2.png" width="350px" alt="Sad bread 2">' ?>
			</div>
			<div class="slice2">
				<?php echo '<img src="./images/sad_slice.png" width="300px" alt="Sad bread 3">' ?>
			</div>
			<br>
		<div class="margin">
			<?php echo "<h3>This is Sad Slices.<br> Enter your order somewhere, I guess.</h3>"?>
			<br>	
			<!-- order buttons and information. -->
			<!-- drop-down menu for slices -->
				<form method = "post">
					<label for="slices"><h4>Choose a slice.</h4></label>
					<select name="slices" id="slices">
						<option value="nothing"></option>
						<option value="1">one slice.($4.00)</option>
						<option value="2">two slices.($7.00)</option>
						<option value="3">three slices.($10.00)</option>
					</select>
				<br> 
				<!-- drop-down menu for toppings -->
				<label for="toppings"><h4>Choose a topping.</h4></label>
				<select name="toppings" id="toppings">
					<option value="nothing"></option>
					<option value="butter">heartbroken butter.($0.50)</option>
					<option value="avocado">anguished avocado.($2.00)</option>
					<option value="jam">joyless jam.($0.75)</option>
					<option value="sprinkles">sorrowful sprinkles.($1.25)</option>
					<option value="garlic">grieving garlic and cheese.($3.50)</option>
				</select>
				<br>
				<!-- drink option-->
				<?php echo '<h4>Water?</h4>'?>
					<input type="checkbox" id="myCheck" name="myCheck" onclick="javascript:happySlices()">
					<label for="myCheck">ok ($1.00)</label>
				<br>
				<br>
				<!-- button to sumbit your answer -->
					<input type = "submit" name = "order" value="order">
				<br>
				<br>
				<!-- calculation -->
				<?php   
					if (isset($_POST["order"])){
							//variables and constant
							$slice= $_POST["slices"]; 
							$toppings= $_POST["toppings"];
							$checkBox= $_POST["myCheck"];
							$taxRate= 0.13;

							//if elseif else statement for size
						if ($slice == "1"){
							$size = 4;
						}
						else if ($slice == "2"){
							$size = 7;
						}
						else if ($slice == "3"){
							$size = 10;
						}
						else {
							$size = 0;
						}
							//if elseif else statement for toppings
						if ($toppings == "butter"){
							$toppingCalculation = 0.50;
						}
					
						else if ($toppings == "avocado"){
							$toppingCalculation = 2;
						}
					
						else if ($toppings == "jam"){
							$toppingCalculation = 0.75;
						}
					
						else if ($toppings == "sprinkles"){
							$toppingCalculation = 1.25;
						}
					
						else if ($toppings == "garlic"){
						 	$toppingCalculation = 3.50;
						}
					
						else {
							$toppingCalculation = 0;
						}

							//if else statement for water. Got this code from a Stackoverflow question
						if (isset($_POST['myCheck'])) {
							$water = 1.00;
						}

						else {
							$water = 0;
						}
							//calculations
							$subTotal = $toppingCalculation+$size+$water;
							$tax = $subTotal*$taxRate;
							$total = sprintf('%.2f',$subTotal+$tax);
							//display answers
						if ($total == 0){
							echo "<h4>Do you not like my store? :(</h4>";
						}
						else {
							echo "<h4>Your total is $$subTotal. <br> Your tax is $$tax.<br>Your order is $$total.</h4>";
						}
					}
					?>
			</form>
		</div>
	</body>
</html>