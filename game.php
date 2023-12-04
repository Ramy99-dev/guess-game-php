<?php

function newGame(){
    $num = rand(10,100);
    setcookie("Number",$num);
    setcookie("tries",0);
}
newGame();
header("Location:main.php");
?>