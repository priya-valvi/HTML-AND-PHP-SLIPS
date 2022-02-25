<?php
	function add($a,$b)
	{
		$s=$a+$b;
		return $s;
	}
	function sub($a,$b)
	{
		$s=$a-$b;
		return $s;
	}
	function mul($a,$b)
	{
		$s=$a*$b;
		return $s;
	}
	function div($a,$b)
	{
		if($b==0)
		echo "Division not possible.<br>";
		else
		$s=$a/$b;
		return $s;
	}
?>