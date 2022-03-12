
<?php
    session_start();
    if(!isset($_SESSION['your_money'])){
        $_SESSION['your_money'] = 500;
        $_SESSION['your_chance'] = 10;
        $_SESSION['over'] = ' ';
    }
    // session_destroy();
//    var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="reset.css">
    <title>Money Button Game</title>
    
</head>
<!-- //Skeleton -->
<body>
  
    <h1>Your money: <?= $_SESSION['your_money'];?> </h1>
    <form action="process.php" id="reset" method="POST">
        <input type="hidden" name="action" value="reset_value">
        <input type="submit" name="reset_name" id="bt_reset" value="Reset Game">
    </form>
    <h3>Chances left  : <?= $_SESSION['your_chance']; ?> </h3>


    <main>
        <form action="process.php"  method="POST" value="Bet1">
            <h2>Low Risk</h2>
            <input type="hidden" name="action" value="low_bet"/>
            <input type="submit" name="bt_one" id="bt_bet" value="Bet">
            <p>by -25 up to 100</p>
        </form>
        <form action="process.php" method="POST">
            <h2>Moderate Risk</h2>
            <input type="hidden" name="action" value="mid_bet"/>
            <input type="submit" name="bt_two" id="bt_bet" value="Bet">
            <p>by -100 up to 1000</p>
        </form>
        <form action="process.php" method="POST">
            <h2>High Risk</h2>
            <input type="hidden" name="action" value="high_bet"/>
            <input type="submit" name="bt_three" id="bt_bet" value="Bet">
            <p>by -1000 up to 2500</p>
        </form>
        <form action="process.php" method="POST">
            <h2>YOLO</h2>
            <input type="hidden" name="action" value="yolo_bet"/>
            <input type="submit" name="bt_four" id="bt_bet" value="Bet">
            <p>by -3000 up to 5000</p>
        </form>
    </main>
    <div class="paragraph"> 
    <h4>Game Host: </h4>
    
    
    <footer>
        <h2>
    <?php echo $_SESSION['over']; ?>   
</h2>
    </footer>
</div>
<!-- <p id="host">Hello your gain/lost this around :   //Wala pa laman</p>
    <p id="host"> //Wala pa laman </p> -->


</body>
</html>