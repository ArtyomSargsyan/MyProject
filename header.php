<?php  
$lang="hy";
if(isset($_GET['lang'])){
  $lang=$_GET['lang'];
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="css/main.css"> 
<link rel="stylesheet" href="css/galeyy.css"> 
</head>

<body>

<nav class="navbar navbar-expand-md fixed-top" id="mainNav">
  <a class="navbar-brand" href="index.php"><?php if($lang=='en'){
                      echo 'Home';

                       }else{
                    echo "Գլխավոր";
                  } ?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
      
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><?php if($lang=='en'){
                      echo 'DAY FIRST';

                       }else{
                    echo "ՕՐՎԱ ԱՌԱՋԱՐԿ";
                  } ?>
                    </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Flower.php">
          <?php if($lang=='en'){
                      echo 'FLOWERS';


                       }else{
                    echo "ԾԱՂԻԿՆԵՐ";
                  } ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gifts.php">
           <?php if($lang=='en'){
                      echo 'GIFTS';
                      }else{
                    echo "ՆՎԵՐՆԵՐ";
                  } ?>
         </a>
      </li>    
       <li class="nav-item">
        <a class="nav-link" href="aritner.php">
          <?php if($lang=='en'){
                      echo 'ARITES';

                      }else{
                    echo "ԱՌԻԹՆԵՐ";
                  } ?>
        </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href='<?php echo $_SERVER["PHP_SELF"]?>?lang=en'><img src="Img/english.png" width="24px" height="21px" alt=""></a>

      </li> 
      <li class="nav-item">
        <a class="nav-link" href="<?php echo $_SERVER["PHP_SELF"]?>?lang=hy"><img src="Img/armenia.png" width="24px" height="21px"></a>
      </li>       
      
    </ul>
  </div>  
</nav>
