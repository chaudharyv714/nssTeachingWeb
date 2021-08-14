<?php
include "shared/connection.php";
$status="";
if($_SERVER["REQUEST_METHOD"]=="POST")
        {
        $name=$_POST['name'];
        $mail=$_POST['email'];
        $doubt=$_POST['message'];
        $con=mysqli_connect("localhost","root","","nss");
        if(mysqli_connect_errno()){
            $staus="Some unexpected error has occurred.<br> Error Details: ".mysqli_error();
        }
        $insert="INSERT INTO `doubt` (`name`, `email`, `message`) VALUES ('$name', '$mail', '$doubt');";
        $query=mysqli_query($con,$insert);

        if(mysqli_error($con))
            {$status= mysqli_error($con);
            }
        else
        {$status="Question Sent<br>We'll send you the reply in a while.";
        }
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="style/main.css">
    <link rel="shortcut icon" type="image/jpg" href="images/fav.jpg"/>
    <title>IceAcademy</title>
</head>
<body>
   <div id="nav">
       <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <img class="img img-fluid" src="images/logo.png" alt="logo">
                </div>
                <div class="col-12 col-sm-5" id="what">
                    <p> <h4>Still have doubts?</h4><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Send a message</button> or <br>Join <button  class="btn btn-success"> <a href="http://nptel.ac.in/">Whatsapp Group</a> </button> for more info</p>

                </div>
        
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            <form action="message.php" method="post" id="messagepost">
                            <input name="name" id="name" placeholder="Your Name" required>
                                <input type="email" name="email" id="email" placeholder="Enter your Email-Id" required>
                                <input type="text" name="message" id="message" placeholder="Type your Question ">
                                <input type="submit" value="   Send    ">
                            </form>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">    
                <div class="col-12 col-sm-6">
                    <button  id="nav-1" class="btn btn-success"> <a href="http://nptel.ac.in/">NPTEL</a> </button>
                    <div id="nav-2" class="dropdown ">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         Select Course
                        </button>
                        <div id="crssel" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="physics.html">Physics</a>
                          <a class="dropdown-item" href="maths.html">Maths</a>
                          <a class="dropdown-item" href="chemistry.html">Chemistry</a>
                        </div>
                    </div>
                </div>
           </div>
       </div>
    </div>
    <div id="errorbox">
        <?php echo $status;?>
    </div>   
<div class="container" id="c2">
    <div class="row">
        <div class="col-12 col-sm-8">
            
        </div>
        <div class="col-12 col-sm-4 justify-content-center">
          <h2>Make the difference</h2>
          <h5>Learn from the community</h5>
          <h6>Return your favor to the community</h6>  
        </div>
    </div>
    <div id="select" class="row">
        <span id="text1">What you'll learn today:</span>
        <a class="btn btn-primary" href="chemistry.html">Chemistry</a>
        <a class="btn btn-primary" href="maths.html">Maths</a>
        <a class="btn btn-primary" href="physics.html">Physics</a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-3">
            <div class="card">
                <img class="card-img-top" src="images/chem1.jpg" alt="Chem">
                <div class="card-body">
                <h5 class="card-title">Chemistry</h5>
                <p class="card-text">The World of Chemicals</p>
                <a href="#" class="btn btn-primary">Course Link</a>
                </div>
            </div>
        </div>
        <div class="col-12 offset-sm-1  col-sm-3">
            <div class="card" >
                <img class="card-img-top" src="images/math1.jpg" alt="Course related Image">
                <div class="card-body">
                <h5 class="card-title">Maths</h5>
                <p class="card-text">Magic of Numbers</p>
                <a href="#" class="btn btn-primary">Course Link</a>
                </div>
            </div>
        </div>
        <div class="col-12 offset-sm-1  col-sm-3">
            <div class="card" >
                <img class="card-img-top" src="images/phy1.jpg" alt="Course related Image">
                <div class="card-body">
                <h5 class="card-title">Physics</h5>
                <p class="card-text">How anything works?</p>
                <a href="#" class="btn btn-primary">Course Link</a>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="container" id="c4">
    <div class="row">
        <div class="col-12 col-sm-4">
            <h2>Content Heading</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe voluptates delectus provident omnis voluptate molestias magni excepturi, ex tempore, aliquam incidunt quaerat ducimus necessitatibus explicabo! Repudiandae sit aliquid ipsum unde?</p>
        </div>
        <div class="col-12 col-sm-8">
            <img src="images/render.png" alt="Render Images">
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-4">
                <img id="logo" src="images/logo.png" alt="logo">
                <div class="socmed">
                    <img src="images/fb.jpg" alt="facebook">
                    <img src="images/insta.jpg" alt="Insta">
                    <img src="images/ytube.jpg" alt="Youtube">
                    <img src="images/lk.jpg" alt="linkedIn">
                </div>
            </div>
            <div class="col-12 col-sm-4">        
                <div class="row" id="links">
                    <a href="#">About Us</a>
                    <a href="#">Careers</a>
                    <a href="#">Sitemap</a>
                </div>
                   
            </div>
            <div class="col-12 col-sm-4">
                <div class="row" id="qoute">
                    <img src="images/qoute.png" height="20" alt="image">
                    <p>Qoute of the day</p>
                </div> 
            </div>
        </div>
        <div class="row">
            <a href="#">&#169TheFrustratedNITIAN</a>
            <a href="#">Terms and Conditions</a>
            <a href="#">Privacy Policy</a>
        </div>
    </div>    
</footer>

    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
,<script src="js/main.js"></script>
</html>