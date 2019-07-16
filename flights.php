<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Family Holidays</title>
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


</head>

<body>

    

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">
    <img src="images/logo.png" style="background-color: black " width="50" height="50" alt="">
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


            <div class="hero-image">

            </div>
      

         

<form action="flightresult.php?t=true" method="GET">
                <div class="row">
                    <div class="booking-form">
                        <form>
                            <div class="form-group">
                                
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Flying from</span>
                                        <input class="form-control" type="text" name='dest' placeholder="City or airport" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <span class="form-label">Flying to</span>
                                        <input class="form-control" type="text" name='source' placeholder="City or airport" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <span class="form-label">Departing</span>
                                        <input class="form-control" type="date" name='date' required>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <span class="form-label">Adults (18+)</span>
                                        <select class="form-control" name='adults'>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                   
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <span class="form-label">Travel class</span>
                                        <select class="form-control">
                                            <option>Economy class</option>
                                           	
                                        </select>
                                        <span class="select-arrow"></span>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-btn">
                                        <input type="submit" class="submit-btn" value="Show flights"></input>
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>
 </form>
<div class="blank-space">
    

</div>
             <div class="container">
                                <div class="row overview-row">
                    <p class="overview-text">
                    </p>
                    <div col-lg-12 col-md-12 col-sm-12 col-xs-12>
                       <p class="h3" style="font-weight: normal; color: #5A564F !important;">Package Deals</p>
                        <p style="font-size: 16px;">
                            <fieldset>Welcome to a soulful experience of vacationing in India, the cradle of ancient civilization with rich cultural heritage. Experience the sights and sounds of its amazing diversity that is embedded in its geography, people and their cultures. Explore the gifts of nature and the timeless marks of man-kind that dot the landscape of this country. Cool hill stations, wild life, adventure spots and beaches provide one of the best vacations that you would have anywhere in the world. </fieldset>
                        </p>
                    </div>
                </div>
                
                <div class="row overview-row">
                    <div class="card-deck">
                        <div class="card card-border ">
                           <a href='#'>
                            <img src="images/hotel-1-sm.jpg" class="card-img-top colImg" alt="Karnataka" >
                            <div class="card-footer" style="padding: 15px 5px !important;">
                                <p class="card-footer-text" style="text-align: center;" >Karnataka</p>
                            </div>
                            </a> 
                        </div>
                        <div class="card card-border" >
                            <a href=#'>
                            <img src="images/hotel-2-sm.jpg" class="card-img-top colImg" alt="punjab" >
                            <div class="card-footer" style="padding: 15px 5px !important;">
                                <p class="card-footer-text"  style="text-align: center;" >Punjab</p>
                            </div>
                            </a>
                        </div>
                        <div class="card card-border">
                            <a href=#'">
                            <img src="images/hotel-3-sm.jpg" class="card-img-top colImg" alt="Rajasthan" >
                            <div class="card-footer" style="padding: 15px 5px !important;">
                                <p class="card-footer-text"  style="text-align: center;" >Rajasthan</p>
                            </div>
                            </a>
                        </div>
                        <div class="card card-border">
                            <a href=#' >
                            <img src="images/hotel-4-sm.jpg" class="card-img-top colImg" alt="gujrat">
                            <div class="card-footer" style="padding: 15px 5px !important;">
                                <p class="card-footer-text"  style="text-align: center;" >Gujarat</p>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

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

    




</body>
</html>

