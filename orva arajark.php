<?php
//connect database 
require_once('admin/config.php');

$lang="hy";
if(isset($_GET['lang'])){
  $lang=$_GET['lang'];
}
    ?>

<!DOCTYPE html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<body>


<nav class="navbar navbar-expand-md fixed-top  "  id="mainNav">
  <a class="navbar-brand rounded-circle " href="orva arajark.php" >
    <img src="Img/caxiknkar.jpg"  id="imgnav" width="50px" height="45px" border  alt="" >
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="orva arajark.php"><?php if($lang=='en'){
                      echo 'DAY FIRST';

                       }else{
                    echo "ՕՐՎԱ ԱՌԱՋԱՐԿ";
                  } ?>
                    
                  </a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="caxikner.php">
          <?php if($lang=='en'){
                      echo 'FLOWERS';


                       }else{
                    echo "ԾԱՂԻԿՆԵՐ";
                  } ?>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nverner.php">
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

<div class="row p-3">
  <div class="col-md-12 text-center bg-warning  "><p class="p1">
    <?php if($lang=='en'){
                      echo 'Orders registered after 21:00 can be delivered the next day after 9:00.';

                       }else{
                    echo "21:00-ից հետո գրանցված պատվերները կարող են առաքվել հաջորդ օրը, ժամը 9:00-ից հետո:";
                  } ?>
  </p></div>
 <script type="">
    $(document).ready(function(){
     $(".p1").hide(15000)
    }) 
    </script>
  </div>  
</div>

<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    

  </ul>
  <div class="carousel-inner text-center p-5">
    <div class="carousel-item active">
<a href="caxikner.php"> <img src="nkarner/brabion.jpg" width="1440" height="710" alt="Los Angeles"></a>     
    </div>
    <div class="carousel-item" >
      <img src="nkarner/brabion1.jpg" width="1440"
      height="710" 
      alt="Chicago">
    </div>
    </div>
  </div>
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
<div class="container">
<div class="row ">
 <div class="col-md-4 p-5">
   <img src="nkarner/brabion2.png " width="327px" height="300px">
 </div>
 <div class="col-md-4 p-5">
   <img src="nkarner/brabion3.png" width="327px" height="300px">
 </div>
 <div class="col-md-4 p-5">
   <img src="nkarner/brabion4.png" width="327px" height="300px">
 </div>
  </div>
</div>

<h5 class="text-center p-5 text-uppercase text-secondary display-4"><?php if($lang=='en'){
                      echo 'Best Sale';

                       }else{
                    echo "Լավագույն Վաճառք";
                  } ?>
</h5>
<p class="text-center  container " id="h1esta"><?php if($lang=='en'){
                      echo 'Mary Service - the name of the founder of flower art in Armenia, dictating a high level of elegance, originality and professionalism.
                    The only representative of the International Flora Flower Delivery Service in Armenia, thanks to which we deliver bouquets and flower arrangements all over the world.';

                       }else{
                    echo "Մերի Սերվիս – Հայաստանում ծաղկարվեստի հիմնադիր, նրբաճաշակության, յուրօրինակության և պրոֆեսիոնալիզմի բարձր մակարդակ թելադրող անուն:
                      Ինտերֆլորա ծաղիկների միջազգային առաքման ծառայության միակ ներկայացուցիչը Հայաստանում, որի շնորհիվ մենք առաքում ենք ծաղկեփնջեր և ծաղկային կոմպոզիցիաներ ամբողջ աշխարհով մեկ:";
                  } ?>
                    
                  </p>

<div class="container">
<div class="row text-center ">
  <?php
  try{
    $sql = "SELECT * FROM home";   
    $result = $pdo->query($sql);
    if($result->rowCount() > 0){
        while($r = $result->fetch()){
         ?>
         
     <div class="col-md-3 py-5  ">
<h5><?php 
   echo $r['title_'.$lang];
    ?></h5>
     <a href=""><img src="Img/<?php echo $r['imgname'] ?>" width="170" height="290px" ></a>
       
   <p>
     <?php 
     echo $r['description_'.$lang];
      ?>
      
   </p>  
    <p>
     <?php 
     echo $r['content_'.$lang];
     
      ?>
   </p>   
     </div>
         <?php


        }
       
        // Free result set
        unset($result);
    } else{
        echo "No records matching your query were found.";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>
 


     <div class="container">
     <h3 class="text-center p-5 text-uppercase display-4"><?php if($lang=='en'){
                      echo 'ABOUT US';
                       }else{
                    echo "ՄԵՐ ՄԱՍԻՆ";
                  } ?></h3>

     <p class=>
<?php if($lang=='en'){
                      echo "In Mary's Flower and Design Hall, you can always order unique compositions and bouquets for any occasion. And our professional Mary-designers will help to create an elegant bouquet and to create a unique place to hold the event. Mary Servis delivers flowers all over Armenia and all over the world. It's hard to imagine an event without a flower arrangement, and Mary Service's original bouquet or decoration makes it more memorable.";
                       }else{
                    echo "Մերի  ծաղկի և դիզայնի սրահում Դուք միշտ կարող եք պատվիրել յուրահատուկ կոմպոզիցիաներ և ծաղկեփնջեր՝ ցանկացած առիթի համար: Իսկ մեր պրոֆեսիոնալ Մերի-դիզայներները կօգնեն կազմել նրբաճաշակ ծաղկեփունջ և յուրօրինակ ձևավորել միջոցառման անցկացմանվայրը:Ծաղիկների առաքում Մերի  Սերվիս -ը կատարում է Հայաստանի ողջ տարածքում և ամբողջ աշխարհով մեկ: Որևէ միջոցառում առանց ծաղկային ձևավորման դժվար է պատկերացնել, իսկ Մերի Սերվիս -ի օրիգինալ ծաղկեփունջը կամ ձևավորումը այն դարձնում են ավելի հիշարժան:";
                  } ?>

</p>
   </div>
 </div>
</div>
<h3 class="text-center p-5"><?php if($lang=='en'){
                      echo 'Services  Gifts';
                       }else{
                    echo "Ծառայություններ և Նվերներ";
                  } ?>
  
</h3>
       <div class="container" >
     <div class="row text-center">
    
      <div class="col-md-4 p-5   " id="divnak">
      <img src="Img/nverner1.jpg" width="200" height="220" alt="">
      <h5>
        <?php if($lang=='en'){
                      echo 'Gas Balloon';
                       }else{
                    echo "Գազով Փուչիկ";
                  } ?>
      </h5>
    </div>
      <div class="col-md-4 p-5  " id="divnak">
      <img src="Img/nverner2.jpg" width="200" height="220" alt="">
      <h5>Raffaello</h5>
    </div>
      <div class="col-md-4 p-5" id="divnak">
      <img src="Img/nverner3.jpg" width="200" height="220" alt=""> 
      <h5>
        <?php if($lang=='en'){
                      echo 'Hedgehog';
                       }else{
                    echo "Ոզնի";
                  } ?>
      </h5>
    </div>
    </div>
    <div class="row text-center ">
      <div class="col-md-4 p-5   " id="divnak">
      <img src="Img/nverner4.jpg" width="200" height="220" alt="">
      <h5>
        <?php if($lang=='en'){
                      echo 'Saxophone:';

                       }else{
                    echo "Սաքսոֆոն";
                  } ?>
      </h5>
    </div>
      <div class="col-md-4 p-5 " id="divnak">
      <img src="Img/nverner5.jpg" width="200" height="220" alt="">
     <h5>
      <?php if($lang=='en'){
                      echo 'Cake';


                       }else{
                    echo "Տորթ";
                  } ?>
     </h5>
    </div>
      <div class="col-md-4 p-4 " id="divnak">
      <img src="Img/nverner6.jpg" width="200" height="240" alt="">
      <h5>
         <?php if($lang=='en'){
                      echo 'Cake';


                       }else{
                    echo "Տորթ";
                  } ?>
      </h5>
    </div>
</div>
</div>
    
<?php include "footer.php" ?>

</body>
</html>


 