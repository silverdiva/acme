<?php

/*
  Database connections
 */
//
//function acmeConnect() {
//    $server = "localhost";
//    $database = "acme";
//    //$database = "ac";
//    $user = "iClient";
//    $password = "Yj1nwvyO7uaA915W";
//    $dsn = 'mysql:host=' . $server . 'dbname=' . $database;
//    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
//
//    try {
//        $link = new PDO($dsn, $user, $password, $options);
//        //echo '$acmeLink worked successfully<br>';
//        return $link;
//    } catch (PDOException $e) {
//        //echo $e->getMessage();
//        header('location: /acme/view/500.php');
//        exit;
//    }
//}
//
//    acmeConnect();
//    $link = acmeConnect();
//    if (is_object($link)) {
//    echo 'Connection successful';
//    } else {
//    echo 'Connection failed';
//}


function acmeConnect() {
    $server = 'localhost';
    $dbname = 'ac';
    $username = 'iClient';
    $password = 'Yj1nwvyO7uaA915W';
    $dsn = 'mysql:host=' . $server . ';dbname=' . $dbname;
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

// Create the actual connection object and assign it to a variable
try {
$link = new PDO($dsn, $username, $password, $options);
return $link;
} catch(PDOException $e) {
header('Location: /acme/view/500.php');
exit;
    }
}
acmeConnect();
//$link = acmeConnect();
//if (is_object($link)) {
//    echo 'Connection successful';
//} else {
//    echo 'Connection failed';
//}
