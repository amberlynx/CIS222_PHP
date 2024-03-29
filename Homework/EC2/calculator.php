<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Widget Cost Calculator</title>
		<link rel="stylesheet" href="style.css">
		<script src="jquery-3.2.1.min.js"></script>
		<script src="calculator.js"></script>
	</head>
	<body>
		<!-- Script 15.4 & 15.6-->
		<h1>Widget Cost Calculator</h1>
		<p id="results"></p>
		<form action="calculator.php" method="post" id="calculator">
			<p id="quantityP">Quantity: <input type="number" name="quantity" id="quantity" step="1" min="1"><span class="errorMessage" id="quantityError">Please enter a valid quantity!</span></p>
			<p id="priceP">Price: <input type="number" name="price" id="price" step="0.01" min="0.01"><span class="errorMessage" id="priceError">Please enter a valid price!</span></p>
			<p id="taxP">Tax (%): <input type="number" name="tax" id="tax" step="0.01" min="0.01"><span class="errorMessage" id="taxError">Please enter a valid tax!</span></p>
			<p><input type="submit" name="submit" id="submit" value="Calculate!"></p>
		</form>
	</body>
</html>
