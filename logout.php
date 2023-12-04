<?php
setcookie("auth",false,time() - 3600);
header("Location:signin.php");
?>