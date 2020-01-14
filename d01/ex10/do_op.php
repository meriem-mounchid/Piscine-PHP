#!/usr/bin/php
<?php
function calcul($a, $op, $b)
{
	if (is_numeric($a) && is_numeric($b))
	{
		if ($op == '+')
		{
			(float)$add = (float)$a + (float)$b;
			return ($add);
		}
		else if ($op == '-')
		{
			(float)$sous = (float)$a - (float)$b;
			return ($sous);
		}
		else if ($op == '*')
		{
			(float)$multi = (float)$a * (float)$b;
			return ($multi);
		}
		else if ($op == '/')
		{
			if ($b == 0)
				exit;
			(float)$div = (float)$a / (float)$b;
			return ($div);
		}
		else if ($op == '%')
		{
			if ($b == 0)
				exit;
			(float)$mod = (float)$a % (float)$b;
			return ($mod);
		}
	}
}

if ($argc == 4)
{
	if ($argv[1] != NULL && $argv[2] != NULL && $argv[3] != NULL)
	{
		$argv[1] = trim($argv[1]);
		$argv[2] = trim($argv[2]);
		$argv[3] = trim($argv[3]);
		$result = calcul($argv[1], $argv[2], $argv[3]);
		echo "$result\n";
	}
}
else
	echo "Incorrect Parameters\n";
?>
