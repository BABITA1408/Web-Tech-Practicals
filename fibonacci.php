<?php  
	$num = 0;  
	$n1 = 0;  
	$n2 = 1;  
	echo "<h3>Fibonacci series for first 10 terms: </h3>";  
	echo "\n";  
	echo '<b>' . $n1 . ' ' . $n2 . '<b/>';  
	while ($num < 8 )  
	{  
		$n3 = $n2 + $n1;  
		echo '<b> ' . $n3. '<b/>';  
		$n1 = $n2;  
		$n2 = $n3;  
		$num = $num + 1;
	}
?>  