<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'dbtoko';
    $opt = [
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES=>false,
      ];
    $dbh = new PDO("mysql:host=$hostname;dbname=$database;",$username,$password,$opt);
    // var_dump($con
?>