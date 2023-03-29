<?php 
  $host = 'localhost';
  $db = 'dbpos';
  $user = 'root';
  $pass = '';

  $dsn = "mysql:host=$host;dbname=$db;";

  $opt = [
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES=>false,
  ];

  $dbh =  new PDO($dsn,$user,$pass,$opt);

?>