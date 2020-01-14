#!/usr/bin/php
<?php
if ($argc > 1)
{
    $t1 = trim($argv[1]);
    $t2 = eregi_replace("[\t]+", " ", $t1);
    $t3 = eregi_replace("[ ]+", " ", $t2);
    $str = explode(" ",$t3);
    $nb = 1;
    $c = count($str);
    while ($nb < $c)
        echo $str[$nb++]." ";
    echo $str[0]."\n";
}
?>