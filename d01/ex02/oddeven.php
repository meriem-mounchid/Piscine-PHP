#!/usr/bin/php
<?php
while (1)
{
	echo "Entrez un nombre: ";
	$nbr = trim(fgets(STDIN));
	if (!(is_numeric($nbr)))
	{
		if (feof(STDIN))
		{
			echo"\n";
			exit();
		}
		echo "'".$nbr."' n'est pas un chiffre\n";
	}
	else
	{
		$p = $nbr % 2;
		if ($p == 0)
			echo "Le chiffre ".$nbr." est Pair\n";
		else
			echo "Le chiffre ".$nbr." est Impair\n";
	}
}

?>
