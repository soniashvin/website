<!DOCTYPE html>
<html lang="en">
  <head>
    <title> <?php 

    $hname="";
    if(isset($_GET['hname'])){
      echo $_GET['hname'];
    }
    else echo "Hotel";

    ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <?php 

    $hname="";
    if(isset($_GET['hname'])){
      $hname=$_GET['hname'];
    }
    $myfile="search.txt";

    //$handle = fopen($myfile, 'r') or die('Cannot open file:  '.$my_file);

    $arr=file($myfile);
    $result=count($arr);

    
  
    //echo "<a href=" $arr[3]."<br>";
    
   
    
    
  



  ?>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
   <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
    <img src="images/logo.png" style="background-color: black" width="50" height="50" alt="">
          </a>
          <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
           <li class="nav-item">
                <a class="nav-link " href="landingpage.php">Home</a>
            </li>
             <li class="nav-item">
                <a class="nav-link" href="flights.php">Flights</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="packages/packages.php">Package</a>
            </li>

             <li class="nav-item">
                <a class="nav-link" href="packages/PlacesToBe.php">Vacations</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contactus.php">Contact Us</a>
            </li>
        </ul>
    </div>
    </nav>

  

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1><?php  echo $_GET["hname"] ?></h1>
                <strong><big><p class="mb-1"><?php echo "Address :" .$arr[$result-7];
                       echo "<br>".$arr[$result-6]; ?></p>
                </strong></big>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  
    
<div class="col-lg-10 ml-auto ">
  <?php   echo "<img src=".$arr[1]." />";
?>
</div>
           

          </div>
          <div class="col-lg-11 ml-auto">

            <div class="mb-5">
              <h3 class="h5 text-black mb-3"> </h3>
              <form action="#" method="post">
                <div class="form-group">
                  <div class="h5 text-black mb-3" >  </div>
                </div>
                <div class="form-group">
                  Price 
                  <div class="select-wrap">
                    <ul>
                      <?php  $newarr= array_slice($arr, 2,30);
                 // print_r($newarr);
                    for($i=0;$i<3 ;$i++)
                      {
      //echo "<br>  ".$i ."  " .$newarr[$i+9];
     // echo "<br>  ".$i+8 ."price  " .$newarr[$i+8];
     // echo "<br>  ".$i+9 ."SITE   " .$newarr[$i+9];
      
                      echo "<li>  ". $newarr[$i+7+$i]." on ";
                    echo "<a href='".$newarr[$i]."''>".$newarr[$i+7+$i+1]."</a>";
                      }

                      ?> 

                      </ul>
                       
                    </div>
                </div>
                <div class="form-group">
                  <!-- select-wrap, .wrap-icon -->
                  <div class="wrap-icon">
                  Reviews by guests
                  <ul><strong>
                    <li><?php echo $arr[$result-5]; ?>
                    <li><?php echo $arr[$result-4]; ?>
                    <li><?php echo $arr[$result-3]; ?>
                   
                  </ul></strong>
                  </div>
                </div>
              </form>
            </div>
            
          

           

          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Most Searched </h2>
            <?php 
            $servername = "localhost";
          $username = "root";
$password = "";
$db_name="iwp_project";
$conn = new mysqli($servername, $username, $password,$db_name);
if (($conn->connect_error)) {
    die("Connection failed: " . $conn->connect_error);
} 

$ssql=" select queries FROM mostsearched GROUP BY queries ORDER BY COUNT(*) DESC LIMIT 1";
     $qresult=$conn->query($ssql);
     $row=$qresult->fetch_assoc();
            ?>
            <p class="color-black-opacity-5"><h2><?php echo $row["queries"]; ?></h2></p>
          </div>
        </div>

        
      </div>
    </div>
    
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/rangeslider.min.js"></script>
  
  <script src="js/main.js"></script>
    
  </body>
</html>