<?php

if(isset($_COOKIE['Number']))
    {
        header("Location:main.php?num=".$_COOKIE['Number']);
    }
    else
    {
        header("Location:main.php");
    }
?>