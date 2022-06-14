<?php
ob_start();
$conn = new PDO('mysql:host=localhost;dbname=id19106224_museum;', 'id19106224_admin', 'Q^/$^9[)0aV5e&rs');
function DbHandler () {
      $dbHost = 'localhost';
      $dbName = 'id19106224_museum';  // local machine: museum
      $dbUser = 'id19106224_admin';   // local machine: root
      $dbPass = 'Q^/$^9[)0aV5e&rs';       //local machine: '';
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


