<?php
    session_start();
    $arr = array();
    $num_of_cars = 4;
    setcookie('basket', serialize($arr), time()+10000, '/');
    if(isset($_COOKIE['basket'])){
        $arr = unserialize($_COOKIE['basket']);
        $arr[] = $_REQUEST['id'];         
    }
    setcookie('basket', serialize($arr), time()+10000, '/');
?>

<a href="taskB.php">Back</a>