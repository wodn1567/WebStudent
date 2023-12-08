<?php

    header('Content-Type:text/html; charset=utf-8');

    $name=$_GET['name'];
    $messge=$_GET['msg'];
    
    echo "<h2>$name</h2>";
    echo "<p>$messge</p>";

?>