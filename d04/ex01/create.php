<?php
    if ($_POST['submit'] === "OK")
    {
        if ($_POST['login'] !== "" && $_POST['passwd'] !== "")
        {   
            $login = $_POST['login'];
            $passwd = $_POST['passwd'];
            if (!(file_exists("../private")))
                mkdir("../private", 0777, true);
            $file = "../private/passwd";
            if(file_exists($file))
            {    
                $content = file_get_contents($file);
                $content = unserialize($content);
            }
            if($content!== NULL)
            {
                /*Check if user exist*/
                foreach ($content as $user) 
                {
                    if ($user["login"] === $login)
                    {
                        echo "ERROR\n";
                        return;
                    }
                }
                /*User Creation*/
                $myhash = hash("whirlpool", $passwd);
                $content[] = ["login"=>$login, "passwd"=>$myhash];
                $content = serialize($content);
                file_put_contents($file,$content);
                echo "OK\n";
            }
            else {
                /*User Creation*/
                $myhash = hash("whirlpool", $passwd);
                $content[] = ["login"=>$login, "passwd"=>$myhash];
                $content = serialize($content);
                file_put_contents($file,$content);
                echo "OK\n";
            }
        }
        else
            echo "ERROR\n";
    }
    else
        echo "ERROR\n";
?>