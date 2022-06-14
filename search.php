<?php
// (A) DATABASE CONFIG - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost"); 
define("DB_NAME", "id19106224_museum");
define("DB_CHARSET", "utf8");
define("DB_USER", "id19106224_admin");
define("DB_PASSWORD", "Q^/$^9[)0aV5e&rs");
// $dbHost = 'localhost';
// $dbName = 'id19106224_museum';  // local machine: museum
// $dbUser = 'id19106224_admin';   // local machine: root
// $dbPass = 'Q^/$^9[)0aV5e&rs';       //local machine: ''; 
// (B) CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=".DB_HOST.";charset=".DB_CHARSET.";dbname=".DB_NAME,
    DB_USER, DB_PASSWORD, [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
  );
} catch (Exception $ex) { exit($ex->getMessage()); }

// (C) SEARCH
$stmt = $pdo->prepare("SELECT * FROM `gallery` WHERE `title` LIKE ? OR `body` LIKE ?");
$stmt->execute(["%".$_POST["search"]."%", "%".$_POST["search"]."%"]);
$results = $stmt->fetchAll();
if (isset($_POST["ajax"])) { echo json_encode($results); }
?>