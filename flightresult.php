<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
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
      <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Flights Results</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

	

	<title></title>
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
<div  class="container" style="background-image: url(images/3.jpg);">
   
      
    </div>  

          <?php


if (isset($_GET['dest'])) {
    search();
 
  }

  function search()
  {
 
$datefrom=str_replace('-', '', $_GET['date']);
 
$data = $_GET['dest'].' '.$_GET['source'].' '.$datefrom;
 

  if(!function_exists('curl_init')) 
        throw new Exception('cURL is not installed on your server');

   
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL,"http://developer.goibibo.com/api/search/?app_id=3d3ffde9&app_key=a98fbafe90078aa84518673c58b15d00&format=json&source=".$_GET['dest']."&destination=".$_GET['source']."&dateofdeparture=".$datefrom."&seatingclass=E&adults=".$_GET['adults']."&children=0&infants=0&counter=100");
        curl_setopt($curl, CURLOPT_TIMEOUT, 60);
        /*
          developer.goibibo.com's SSL certificate has issue. 
        */
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
        //if(DEBUG) curl_setopt($curl, CURLOPT_VERBOSE, TRUE);


        $response_from_server = curl_exec($curl);
       // $f=fopen("fresult.xml",'w');  XML
       // fwrite($f,$response_from_server); XML
        
       $flights= (json_decode($response_from_server));
    //  print($flights);
        
       $n=0;
        while(isset($flights->data->onwardflights[$n]))
        {
        $n++;
        }
              
$servername = "localhost";
$username = "root";
$password = "";
$db_name="iwp_project";
$conn = new mysqli($servername, $username, $password,$db_name);
if (($conn->connect_error)) {
    die("Connection failed: " . $conn->connect_error);
} 

$ssql="delete from flightquery where 1";
$conn->query($ssql);

       for($i=0;$i<$n;$i++){
        $duration=$flights->data->onwardflights[$i]->duration;
        $price=$flights->data->onwardflights[$i]->fare->totalfare;
        $fcode=$flights->data->onwardflights[$i]->flightcode;
        $airline=$flights->data->onwardflights[$i]->airline;
        $deptime=$flights->data->onwardflights[$i]->deptime;
        $ssql="insert into flightquery values('".$duration."',".(int)$price.",'".$fcode."','".$airline."','".$deptime."')";
        $conn->query($ssql);
        }
$ssql = "select * FROM flightquery order by price";
$result = $conn->query($ssql);
if ($result->num_rows > 0) {
    // output data of each row
    
    while($row = $result->fetch_assoc() ) {
        // echo "duration: " . $row["duration"]. " - price: " . $row["price"]. " Flight code -> " . $row["fcode"]. " Airlines=  ".$row["airline"]. "<br>";
    echo "<div class='d-block d-md-flex listing-horizontal'>

              <a class='img d-block' href='payment/payment.php?price=".$row["price"]."&airline=".$row["airline"]."'' >
                <span class='category'>". $row["airline"]."</span>
              <img src='images/".$row["airline"].".jpg'/>
              </a>

              <div class='lh-content'>
             
                <p> Duration  ".$row["duration"]."</p>
                <p>
                 <p><br> Flight Numeber  ".$row["fcode"] ." </p>
                  <span><br><strong> Price ₹".$row["price"]."</strong></span>
                  <br>
                 
                </p>

                
              </div>

            </div>";
    //        $counters+=1;
    }
        
}
        
       
  }
?>
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
</html>
