<?php
	include 'slip3.php';
	$a=$_POST['no1'];
	$b=$_POST['no2'];
	$c=$_POST['op'];
	switch($c)
	{
		case 1:
			    $d=add($a,$b);
			    echo "Addition :$d";break;
		case 2:
				$d=mul($a,$b);
			    echo "Multiplication :$d";break;
		case 3:
				$d=sub($a,$b);
			    echo "Subtraction:$d";break;
		case 4:
				$d=div($a,$b);
			    echo "Division:$d";break;		
		

	}
?>