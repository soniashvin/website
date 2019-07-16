<!DOCTYPE html>
<html lang="en">
  <head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <div id="map"></div>

   


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

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <link rel="stylesheet" type="text/css" href="animate.css">
      <script src="package.js"></script>
      <link rel="stylesheet" type="text/css" href="flights.css">


    <title><?php echo $_GET["search"]." Hotels";?></title>
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
    <?php

$hotel=$_GET["search"];
if($hotel=="")
{
 echo "<script> location.href='landingpage.php' </script>";
}

else {

$myfile="search.txt";
//$handle = fopen($myfile, 'r') or die('Cannot open file:  '.$my_file);
$arr=file($myfile);
$result=count($arr);
$tri=(string)$arr[0];

if(strcmp($arr[0], 'XXXX')==2)
  echo "<script> location.href='singlepage.php' </script>";
$n=$result/3;
$i=0;
$j=$n;
 // fread($handle, length)

}
//$minlati='<script> document.writeln(lat); </script>';
//$maxlati= '<script> document.writeln(long); </script>';

//echo 'hey there'.$minlati . $maxlati;


//else


?>
  </head>
  <body>
 
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
    <img src="images/logo.png" width="30" height="30" alt="">
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



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/Kerala.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">

          <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
            
            
            <div class="row justify-content-center">
              <div class="col-md-8 text-center">
                <h1>Search Results for <?php echo $_GET["search"]." Hotels";?></h1>
                <p class="mb-0">Hassle Free Bookings</p>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </div>  
    

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">

     <?php
$n=$result/3;
$i=0;
$j=$n;
            if ($result > 0) {
    // output data of each row
    while($i<$n) {
        echo "<div class='d-block d-md-flex listing-horizontal'>

              <a href='list.php?hname=".$arr[$n+$n+$i]."' class='img d-block' style='background-image: url('images/img_2.jpg')'>
                <span class='category'>Hotel</span>
              </a>

              <div class='lh-content'>
                
                <h3><a href='list.php?hname=".$arr[$n+$n+$i]."'>".$arr[$n+$n+$i]."</a></h3>
                <p><strong> Price ".$arr[$n+$i]."</strong></p>
                <p>
                  <span class='icon-star text-warning'></span>
                  <span class='icon-star text-warning'></span>
                  <span class='icon-star text-warning'></span>
                  <span class='icon-star text-warning'></span>
                  <span class='icon-star text-secondary'></span>
                  <span> Ratings ".$arr[$i]."</span>
                  <br>
                 
                </p>

                
              </div>

            </div>";
            $i++;
    }
} else {
    echo "0 results";
}

?>
            

         
          </div>
          
            
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center border-primary">
            <h2 class="font-weight-light text-primary">Most Searched</h2>
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
    </body>
    <footer class="py-4">
        <div class="text-center text-white container">
            <p class="my-4 h6">Stay updated with our latest trends</p>
            <form class="form-inline d-flex form-group container justify-content-center">
                <input class="form-control mr-sm-1 mb-2" type="search" placeholder="Enter email">
                <button class="btn btn-primary mb-2" type="submit"><i class="fa fa-arrow-right"></i></button>
            </form>
            <p>
                <a class="text-white" href="#"><i class="fa fa-whatsapp"></i></a>&nbsp;
                <a class="text-white" href="#"><i class="fa fa-pinterest-p"></i></a>&nbsp;
                <a class="text-white" href="#"><i class="fa fa-google-plus"></i></a>&nbsp;
                <a class="text-white" href="#"><i class="fa fa-twitter"></i></a>&nbsp;
                <a class="text-white" href="#"><i class="fa fa-dribbble"></i></a>
            </p>
            <span class="foot-text">Copyright 2019 Travel | All rights reserved.</span>
        </div>
    </footer>
  </div>

 
    
  
</html>