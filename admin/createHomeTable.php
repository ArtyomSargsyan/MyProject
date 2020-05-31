<?php
require_once("config.php");


try{
    $sql = "CREATE TABLE IF NOT EXISTS `home` (
 id int auto_increment primary key,
 title_en varchar(100) not null,
 description_en varchar(50) not null,
 content_en text not null,
 title_hy varchar(100) not null,
 description_hy varchar(50) not null,
 content_hy text not null,
 imgname varchar(50) not null
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4  ";    
    $pdo->exec($sql);
    echo "Table created successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

unset($pdo);

?>