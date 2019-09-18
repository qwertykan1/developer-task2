<?php
$array = [
	[ 1, 2, 3, 4, 5, 6, 7],
	[ 22, 23, 24, 25, 26, 27, 8],
	[ 21, 36, 37, 38, 39, 28, 9],
	[ 20, 35, 42, 41, 40, 29, 10],
	[ 19, 34, 33, 32, 31, 30, 11],
	[ 18, 17, 16, 15, 14, 13, 12],
];

$left = $top = 0;
$bottom = count($array);
$right = count($array[0]);
$toRight = true;
$toBottom = true;

$count = $right*$bottom;
while($count)
{
	for ($i = $left; $i < $right && 0 < $count; $i++, $count--)
	{ 
		echo $array[$top][$i].'<br>';
	}
	$top++;
	for ($j = $top; $j < $bottom && 0 < $count; $j++, $count--)
	{ 
		echo $array[$j][$right-1].'<br>';
	}
	$right--;
	for ($k = $right-1; $k >= $left && 0 < $count; $k--, $count--)
	{ 
		echo $array[$bottom-1][$k].'<br>';
	}
	$bottom--;
	for ($h = $bottom-1; $h >= $top && 0 < $count; $h--, $count--)
	{ 
		echo $array[$h][$left].'<br>';
	}
	$left++;
}

/*$n=5;
for ($j = 0; $j < $n ; $j++)
{ 
	echo $j.'<br>';
	$n--;
}*/