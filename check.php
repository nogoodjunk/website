<html>
<head>
<title>Check Digit Calculator</title>
</head>

<body>


<form action="check.php" method="post">


<p>	
<input type="text" name="checkdigit" value="00000000000" size="15" maxlength="12">
&nbsp;Barcode (without check-digit)</p>
	
<input type="submit" name="submit" value="Submit" /> <INPUT TYPE=RESET />
</form>

<br />
<hr width="20%" align="left" />
<br />


<?php 
	if (isset($_POST['submit']))
	{
	$barcode = $_POST['checkdigit'];

	$one = substr($barcode, 0, 1);
	$two = substr($barcode, 1, 1);
	$three = substr($barcode, 2, 1);
	$four = substr($barcode, 3, 1);
	$five = substr($barcode, 4, 1);
	$six = substr($barcode, 5, 1);
	$seven = substr($barcode, 6, 1);
	$eight = substr($barcode, 7, 1);
	$nine = substr($barcode, 8, 1);
	$ten = substr($barcode, 9, 1);
	$eleven = substr($barcode, 10, 1);

	$odds = ($one + $three + $five + $seven + $nine + $eleven);
	$timesthree = ($odds * 3);

	echo "$odds , $timesthree";

	$evens = ($two + $four + $six + $eight + $ten);
	$sum = $timesthree + $evens;

	echo "<br />$evens , $sum<br />";

	$check_digit = (10 - ($sum % 10));

	$final_barcode = $barcode . $check_digit;
	
	}
?>
<h3 style="color:red;">Entered Barcode:</h3>
<?php
	echo "$barcode";
?>
<h3 style="color:red;">Barcode with check digit:</h3>
<?php 
	echo "$final_barcode";	
?>
<h3 style="color:red;">Check digit:</h3>
<?php
	echo "$check_digit";
?>
	
</body>
