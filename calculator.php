<?php
	echo "Wat wil je doen? (+ of -)" . PHP_EOL;
$multiplier=readline();
	if ( $multiplier === '+' ) 
{
	echo "Getal een:" . PHP_EOL;
$eerste1=readline();
	echo "Getal twee:" . PHP_EOL;
$tweede1=readline();
	echo ($eerste1 + $tweede1);
} 	else if ( $multiplier === '-' ) 
{ 
	echo "Getal een:" . PHP_EOL;
$eerste2=readline();
	echo "Getal twee:" . PHP_EOL;
$tweede2=readline();
	echo ($eerste2 - $tweede2);
}
