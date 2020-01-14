<?php
include_once('Lannister.class.php');

class Tyrion extends Lannister 
{
    public function sleepWith($persona)
    {
        if ($persona instanceof Jaime)
            echo "Not even if I'm drunk !\n";
        if ($persona instanceof Sansa)
            echo "Let's do this.\n";
        if ($persona instanceof Cersei)
            echo "Not even if I'm drunk !\n";
    }
}
?>