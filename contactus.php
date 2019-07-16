<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Contacts Us</title>

        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="form.css" >
        <script src="form.js"></script>
    </head>
    <body >

        <div class="container">
     
            <div id="form-main">
                <div id="form-div">
                    <form action="contactus.php?t=true" method="POST" class="montform" id="reused_form" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue">SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>

                </div>
            
            </div>
        </div>
            <?php 
if(isset($_GET['t']))
    enter();

function enter()
{
    $servername = "localhost";

$username = "root";
$password = "";
$db_name="iwp_project";
$conn = new mysqli($servername, $username, $password,$db_name);
if (($conn->connect_error)) {
    die("Connection failed: " . $conn->connect_error);
} 



$ssql="insert into contactus values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
$conn->query($ssql);
echo "<h1 style='background:white' > Thank You For Your Response</h1>";

}
    
     ?>

    </body>
</html>