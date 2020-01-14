<?php
include_once('Lannister.class.php');

class Jaime extends Lannister 
{
    public function sleepWith($persona)
    {
        if ($persona instanceof Tyrion)
            echo "Not even if I'm drunk !\n";
        if ($persona instanceof Sansa)
            echo "Let's do this.\n";
        if ($persona instanceof Cersei)
            echo "With pleasure, but only in a tower in Winterfell, then.\n";
    }
}
?>