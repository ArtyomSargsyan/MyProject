<?php


session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
  
    require_once "config.php";
    
    $sql = "SELECT * FROM home WHERE id = :id";
    
    if($stmt = $pdo->prepare($sql)){
       
        $stmt->bindParam(":id", $param_id);
       
        $param_id = trim($_GET["id"]);
        
        
        if($stmt->execute()){
            if($stmt->rowCount() == 1){
               
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
               
                      $title_en = $row["title_en"];
                    $description_en = $row["description_en"];
                    $content_en = $row["content_en"];
                    $title_hy = $row["title_hy"];
                    $description_hy = $row["description_hy"];
                    $content_hy = $row["content_hy"];
                    $imgname = $row["imgname"];
            } else{
                
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
 
    unset($stmt);
    
   
    unset($pdo);
} else{
    
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h1>View Record</h1>
                    </div>
                    <div class="form-group">
                        <label>title_EN</label>
                        <p class="form-control-static"><?php echo $row["title_en"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>description_EN</label>
                        <p class="form-control-static"><?php echo $row["description_en"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>content_EN</label>
                        <p class="form-control-static"><?php echo $row["content_en"]; ?></p>
                    </div>
                     <div class="form-group">
                        <label>title_HY</label>
                        <p class="form-control-static"><?php echo $row["title_hy"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>description_HY</label>
                        <p class="form-control-static"><?php echo $row["description_hy"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>content_HY</label>
                        <p class="form-control-static"><?php echo $row["content_hy"]; ?></p>
                    </div>
                    <p>
                        <img src="../img/<?php  echo $imgname ?>" alt="" width="200" height="200">
                    </p>   
                    <p><a href="index.php" class="btn btn-primary">Back</a></p>

                </div>
            </div>        
        </div>
    </div>
</body>
</html>