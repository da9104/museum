<?php
ob_start();
$conn = new PDO('mysql:host=localhost;dbname=museum;', 'root', '');
function DbHandler () {
      $dbHost = 'localhost';
      $dbName = 'museum';  // local machine: museum
      $dbUser = 'root';   // local machine: root
      $dbPass = '';       //local machine: '';
      //Create a DSN for the database resource...
      $Dsn = "mysql:host=".$dbHost.";dbname=".$dbName;
      //Create an options configuration for the PDO connection...
      $options = array(
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      );
      try {
         $conn = new PDO($Dsn, $dbUser, $dbPass, $options);
       // $conn = new PDO('mysql:host=$dbHost;dbname=$dbName', $dbUser, $dbPass);
        return $conn;
      } catch (Exception $e) {
        var_dump('Couldn\'t Establish A Database Connection. Due to the following reason: ' . $e->getMessage());
      }
  }


