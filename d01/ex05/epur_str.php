#!/usr/bin/php
<?php
foreach($argv as $value)
{
	if (($value != $argv[0]) && ($value == $argv[1]))
	{
		$value2 = trim($value);
		$val = eregi_replace("[ ]+", " ", $value2);
		echo "$val\n";
	}
}
?>