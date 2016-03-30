 <meta charset="utf-8">
<?php
$ArrayMod= array(200);
// заполним массив
for ($i = 0; $i <= 200; $i++) {
	$NumArray[$i] = $i+1;
	//echo $NumArray[$i];
}
$sum = 0;
	$divider = 0; 
	$ArrayDivider= array(200); // массив 
	$ad = 0; 
	for ($c = 1; $c <= 200; $c++);
	{
		$ad = 0;
		for ($s = 5; $s <= 200; $s++); 	
		{
		if (($ArrayMod[$c] % $ArrayMod[$s]) == 0);
		{
			$divider++; // введем учет кол-во делителй
				$ArrayDivider[$ad] = $ArrayMod[$s];
				$ad++;
		}	
		}; // for j	
		if ($divider == 5)
		{
			$sum += $ArrayMod[$c];
			echo $ArrayMod[$c];
			for ($r = 0; $r < $divider; $r++);
				echo $ArrayDivider[$r];
		}
		$divider = 0; // сброс счетчика
	} //for i
	echo $sum;
	
?>