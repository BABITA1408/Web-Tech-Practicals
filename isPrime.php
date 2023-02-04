<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Prime Number </title>
	</head>
	<body>
		<p align="center">Check for Prime Number</p>
		<br>
		<form action="" method="get">
			<table align="center">
				<tr>
					<td> Enter a Number: </td>
					<td><input type="text" name="num" /></td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<br>
						<input type="submit" name="isPrime" value="Is Prime"/>
					</td>
				</tr>
			</table>
		</form>
		
		<?php
			@$num=$_GET['num'];
			
			if(isset($_GET['isPrime']))
			{
				$flag_val = check_prime($num);
				if ($flag_val == 1)
					echo "<br/><p align='center'><b>" . $num . " is a prime number. </b></p>";
				else
					echo "<br/><p align='center'><b>" . $num . " is NOT a prime number. </b></p>";
			}
			
			function check_prime($num)
			{
				if($num == 1)
					return 0;
				for($i = 2; $i <= $num/2; $i++)
				{
					if ($num % $i == 0)
						return 0;
				}
				return 1;
			}
		?>
	</body>
</html>