<?php
session_start();
    // if(isset($_SESSION['your_chance']) && $_SESSION['your_chance'] > 0){
    //     $_SESSION['your_chance']--;
        
    //     header('location: index.php');
    // }
    
    if(isset($_POST['action']) && $_POST['action'] == 'reset_value' ){
        $_SESSION['your_money'] = 500;
        $_SESSION['your_chance'] = 10;
        $_SESSION['over'] = " ";
        header('location: index.php');
    }
    if(isset($_POST['action']) && $_POST['action'] == 'low_bet' && $_SESSION['your_chance'] > 0){
        $_SESSION['your_money'] = rand(-25,100);
        $_SESSION['your_chance']--;
        header('location: index.php');
    }
    if(isset($_POST['action']) && $_POST['action'] == 'mid_bet' && $_SESSION['your_chance'] > 0){
        $_SESSION['your_money'] = rand(-100,1000);
        $_SESSION['your_chance']--;
        header('location: index.php');
    }
    if(isset($_POST['action']) && $_POST['action'] == 'high_bet' && $_SESSION['your_chance'] > 0){
        $_SESSION['your_money'] = rand(-500,2500);
        $_SESSION['your_chance']--;
        header('location: index.php');
    }
    if(isset($_POST['action']) && $_POST['action'] == 'yolo_bet' && $_SESSION['your_chance'] > 0){
        $_SESSION['your_money'] = rand(-3000,5000);
        $_SESSION['your_chance']--;
        header('location: index.php');
    }
    if($_SESSION['your_chance'] == 0){
        $_SESSION['over'] = 'Game over!!!!';
        header('location: index.php');
    }
    
?>