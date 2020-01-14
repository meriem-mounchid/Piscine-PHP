#!/usr/bin/php
<?php
$i = 0;
$j = 0;
foreach($argv as $value)
{
	if ($argc >= 2)
	{
		if ($j != 0)
		{
			$value2 = trim($value);
			$val0 = eregi_replace("[\t]+", " ", $value2);
			$val = eregi_replace("[ ]+", "\n", $val0);
			$tab = explode("\n", $val);
			foreach($tab as $s)
			{
				$tmp[$i] = $s;
				$i++;
			}
		}
	}
	else
		exit;
	$j += 1;
}

sort($tmp, SORT_STRING);

foreach ($tmp as $s)
{
	if ($argc >= 2)
	{
		echo $s;
		if ($s != NULL)
			echo "\n";
	}
}
?>
