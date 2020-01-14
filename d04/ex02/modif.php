<?php
    if ($_POST['submit'] === "OK")
    {
        if ($_POST['login'] !== "" && $_POST['oldpw'] !== "" && $_POST['newpw'] !== "")
        {   
            $login = $_POST['login'];
            $oldpw = $_POST['oldpw'];
            $newpw = $_POST['newpw'];
            $file = "../private/passwd";

            $content = file_get_contents($file);
            $content = unserialize($content);
            if($content !== NULL)
            {
                $myhash1 = hash("whirlpool", $oldpw);
                $myhash2 = hash("whirlpool", $newpw);
                /*Check if user exist*/
                foreach ($content as $key => $value)
                {
                    if ($content[$key]["login"] === $login && $content[$key]["passwd"] === $myhash1)
                    {
                        $content[$key] = ["login"=>$content[$key]["login"],"passwd"=>$myhash2];
                        $content = serialize($content);
                        file_put_contents($file,$content);
                        echo "OK\n";
                        return;
                    }       
                }
            }
        }
    }
    echo "ERROR\n";
?>