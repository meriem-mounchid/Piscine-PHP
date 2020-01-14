<?php 
    function auth($login, $passwd)
    {
        $file = "../private/passwd";

        $content = file_get_contents($file);
        $content = unserialize($content);
        foreach ($content as $key => $value)
        {
            if ($value['login'] === $login && $value['passwd'] === $passwd)
            {
				return (true);
		    }
	    }
		return (false);
    }
?>
