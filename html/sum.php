<?php
function echotest()
{
	echo "Hello! WordPress Tutorial";
	return "Return Value";
}

function add_score($arg1, $arg2)
{
	$sum = $arg1 + $arg2;
	return $sum;
}
function avg_score($arg1, $arg2)
{
	$sum = add_score($arg1, $arg2);
	$avg = $sum/2;

	return $avg;
}