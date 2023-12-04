<?php

if(!isset($_GET['num']))
{
    header("Location:main.php");
}
else
{
    if(isset($_COOKIE['Number']))
    {
        $num = $_COOKIE['Number'];
        $guessedNum = $_GET['num'];
        if($num == $guessedNum)
        {
            header("Location:main.php?right=true");
        }
        else
        {
            setcookie("tries",$_COOKIE['tries']+1);
            if($num > $guessedNum)
            {
                $message = "Higher";
              
            }
            else{
                $message = "Lower";
            }
            header("Location:main.php?right=false&hint=".$message);
        }
    }
    else
    {
        header("Location:main.php");
    }
}
?>