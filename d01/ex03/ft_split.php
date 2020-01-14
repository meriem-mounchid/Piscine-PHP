<?php
function ft_split($s1)
{
	$tab0 = trim($s1);
	$tab1 = eregi_replace("[ ]+", " ", $tab0);
	$tab2 = explode(" ", $tab1);
	if ($s1 != NULL)
		sort($tab2, SORT_STRING);
	return (array_filter($tab2));
}
?>
