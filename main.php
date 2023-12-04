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
<a id="logout" href="logout.php"><button>Logout</button></a><br/><br/>
    <center>
        <h1>Guess the number</h1>
        <?php
           include('check.php');
        ?>
        <a href="game.php"><button>New Game</button></a>
        <a href="giveup.php"><button>Give up</button></a><br/><br/>
        
        <?php
         if(isset($_GET['hint']))
         {
            echo 'Hint: '.$_GET['hint'].'<br/>';
         }
        ?>
        <form action="guess.php" method="GET">
            <label>Guess:</label> <input type="number" name="num" id=""><br/>
            <label>Number of trials :</label>  <input readonly type="number" value="<?php if(isset($_COOKIE['tries'])){echo $_COOKIE['tries'];}?>"><br/>
            <label>The number is :</label><input readonly  type="number" value="<?php echo $_GET['num']?>"><br/><br/>
            <input type="submit" value="Submit">
        </form>
    </center>
</body>
</html>