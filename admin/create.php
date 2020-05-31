<?php

require_once "config.php";
 

$title_en = $description_en = $content_en = $imgname = "";
$title_hy = $description_hy = $content_hy =  "";
$title_err_en = $description_err_en = $content_err_en = $imgname_err = "";
$title_err_hy = $description_err_hy = $content_err_hy =  "";

 
 
if($_SERVER["REQUEST_METHOD"] == "POST"){


    $input_title_en = trim($_POST["title_en"]);
    if(empty($input_title)){
        $title_err = "Please enter a name.";
    } elseif(!filter_var($input_title, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z0-9\s]+$/")))){
        $title_err = "Please enter a valid name.";
    } else{
        $title = $input_title;
    }
    
    
   
    $imgname=$_FILES["file"]["name"] ;

        
    move_uploaded_file($_FILES['file']['tmp_name'],'../img/'.$imgname);
  
    if(empty($title_err_en) && empty($description_err_en) && empty($content_err_en) && empty($imgname_err)){
        
        $sql = "INSERT INTO home (title_en, description_en, content_en, title_hy, description_hy, content_hy, imgname) VALUES (:title_en, :description_en, :content_en, :title_hy, :description_hy, :content_hy, :imgname)";
 
        if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":title_en", $param_title_en, PDO::PARAM_STR);
            $stmt->bindParam(":description_en", $param_description_en,  PDO::PARAM_STR);
            $stmt->bindParam(":content_en", $param_content_en,  PDO::PARAM_STR);
             $stmt->bindParam(":title_hy", $param_title_hy, PDO::PARAM_STR);
            $stmt->bindParam(":description_hy", $param_description_hy,  PDO::PARAM_STR);
            $stmt->bindParam(":content_hy", $param_content_hy,  PDO::PARAM_STR);
            $stmt->bindParam(":imgname", $param_imgname,  PDO::PARAM_STR);
            
           
            $param_title_en = $_POST["title_en"];
            $param_description_en = $_POST["description_en"];
            $param_content_en = $_POST["content_en"];
            $param_title_hy = $_POST["title_hy"];
            $param_description_hy = $_POST["description_hy"];
            $param_content_hy = $_POST["content_hy"];
            $param_imgname = $imgname;
            if($stmt->execute()){
               
                header("location: index.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
       
        unset($stmt);
    }
    
   
    unset($pdo);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
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
                        <h2>Create Record</h2>
                    </div>
                    <p>Please fill this form and submit to add employee record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group <?php echo (!empty($title_err_en)) ? 'has-error' : ''; ?>">
                            <label>Title-EN</label>
                            <input type="text" name="title_en" class="form-control" value="<?php echo $title_en; ?>">
                            <span class="help-block"><?php echo $title_err_en;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err_en)) ? 'has-error' : ''; ?>">
                            <label>Description-EN</label>
                            <textarea name="description_en" class="form-control"><?php echo $description_en; ?></textarea>
                            <span class="help-block"><?php echo $description_err_en;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($content_err_en)) ? 'has-error' : ''; ?>">
                            <label>content-EN</label>
                            <input type="text" name="content_en" class="form-control" value="<?php echo $content_en; ?>">
                            <span class="help-block"><?php echo $content_err_en;?></span>
                        </div>
                          <div class="form-group <?php echo (!empty($title_err_en)) ? 'has-error' : ''; ?>">
                            <label>Title-HY</label>
                            <input type="text" name="title_hy" class="form-control" value="<?php echo $title_hy; ?>">
                            <span class="help-block"><?php echo $title_err_hy;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($description_err_hy)) ? 'has-error' : ''; ?>">
                            <label>Description-HY</label>
                            <textarea name="description_hy" class="form-control"><?php echo $description_hy; ?></textarea>
                            <span class="help-block"><?php echo $description_err_hy;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($content_err_en)) ? 'has-error' : ''; ?>">
                            <label>content-HY</label>
                            <input type="text" name="content_hy" class="form-control" value="<?php echo $content_hy; ?>">
                            <span class="help-block"><?php echo $content_err_hy;?></span>
                        </div>
                          <div class="form-group <?php echo (!empty($imgname_err)) ? 'has-error' : ''; ?>">
                            <label>image</label>
                            <input type="file" name="file" class="form-control" value="<?php echo $imgname; ?>">
                            <span class="help-block"><?php echo $imgname_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Add article">
                        <a href="index.php" class="btn btn-default">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>