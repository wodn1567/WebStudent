<?php

    header('Content-Type:text/html; charset=utf-8');

    $name=$_POST['title'];
    $messge=$_POST['msg'];
    
    echo "<h2>$name $messge</h2>";
    echo "<p></p>";

?>