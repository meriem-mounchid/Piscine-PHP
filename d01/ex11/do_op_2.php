#!/usr/bin/php
<?php
function	scanner($av)
{
	$val = trim($av);
	//$val2 = eregi_replace("[ ]+", "", $val);
	$tab = sscanf($val, "%d%c%d");
	print_r($tab);
	if ($tab[3])
	{
		echo "Syntax Error\n";
	}
	if (is_numeric($tab[0]) && is_numeric($tab[2]))
	{
		if ($tab[1] == '+')
		{
			(float)$add = (float)$tab[0] + (float)$tab[2];
			echo "$add\n";
		}
		else if ($tab[1] == '-')
		{
			(float)$sous = (float)$tab[0] - (float)$tab[2];
			echo "$sous\n";
		}
		else if ($tab[1] == '/')
		{
			if ($tab[2] == 0)
				exit;
			(float)$div = (float)$tab[0] / (float)$tab[2];
			echo "$div\n";
		}
		else if ($tab[1] == '*')
		{
			(float)$multi = (float)$tab[0] * (float)$tab[2];
			echo "$multi\n";
		}
		else if ($tab[1] == '%')
		{
			if ($tab[2] == 0)
				exit;
			(float)$mod = (float)$tab[0] % (float)$tab[2];
			echo "$mod\n";
		}
		else
			echo "Syntax Error\n";
	}
	else
		echo "Syntax Error\n";
}

if ($argc == 2)
{
	if ($argv[1] != NULL)
		scanner($argv[1]);
	else
		echo "Syntax Error\n";
}
else
	echo "Incorrect Parameters\n";
?>
