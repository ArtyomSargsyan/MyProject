<?php
// kap enq hastatum DB-i het
try{
    $pdo = new PDO("mysql:host=localhost", "root", "");
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // // Print host information
    // echo "Connect Successfully. Host info: " . 
$pdo->getAttribute(constant("PDO::ATTR_CONNECTION_STATUS"));
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}


//Stexcum enq kayqi databazan
try{
    $sql = "CREATE DATABASE IF NOT EXISTS  caxikner";
    $pdo->exec($sql);
    echo "Database created successfully";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
// petka aysex poxenq nor databazayi anun@ grenq
try{
    $pdo = new PDO("mysql:host=localhost;dbname=caxikner", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
//stexcum enq kayqi userneri axyusaky Attempt create table query execution
try{
    $sql = "CREATE TABLE IF NOT EXISTS `users` ( 
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";    
    $pdo->exec($sql);
    echo "Table created successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);


?>
