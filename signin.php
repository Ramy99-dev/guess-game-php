<?php
include('config.php');

if(isset($_COOKIE['auth']))
{
    header("Location:main.php");
}

if(isset($_POST['login']) && isset($_POST['pass']))
{
  $stmt = $pdo->prepare("SELECT COUNT(id) as count FROM users WHERE username=:username AND password=:password LIMIT 1");
  $stmt->execute(['username' => $_POST['login'] , 'password'=>$_POST['pass']]);
  $user = $stmt->fetch();
  $count = $user["count"];

  if($count>0)
  {
     
      setcookie("auth",true);
      header("Location:main.php");
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h1>Guess the number</h1>
        <form action="signin.php" method="POST">
            <label>Username:</label> <input type="text" name="login" id=""><br/>
            <label>Password :</label>  <input  type="password" name="pass"><br/>
            <input type="submit" value="Sign In">
        </form>
    </center>
</body>
</html>