<?php
function ft_is_sort($tab)
{
	$tab2 = $tab;
	$tab3 = $tab;
	sort($tab2);
	rsort($tab3);
	if ($tab2 === $tab || $tab3 === $tab)
		return (true);
	else
		return (false);
}
?>
