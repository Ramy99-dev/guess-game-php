<?php
if(!isset($_COOKIE['auth']))
{
    header("Location:signin.php");
}
if(isset($_GET['right']))
{
    if($_GET['right']=='true')
    {
        echo 'Congratulation you win<br/><br/>';
    }
    else{
        echo 'Wrong number<br/><br/>';
    }
}

?>