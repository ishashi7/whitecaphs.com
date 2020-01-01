<!--Login Checking Code-->
<?php
include("config.php");
include('userClass.php');
$userClass = new userClass();
//Admin login php
if (!empty($_POST['loginSubmit']))
{
$usernameEmail=$_POST['usernameEmail'];
$password=$_POST['password'];
 if(strlen(trim($usernameEmail))>1 && strlen(trim($password))>1 )
   {
    $uid=$userClass->userLogin($usernameEmail,$password);
    if($uid)
    {
        $url=BASE_URL.'data.php';
        header("Location: $url");
        echo '<script>swal("Good Job !", "Login Sucessfull", "success");</script>';
    }
    else
    {
        echo '<script>swal("Sorry!", "Invalid Username and Password", "error");</script>';
    }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Common for all Pages-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/logo-nav.css">
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/scroll.css">
<!--Common for all pages-->

<!--JS Alert CDN-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--JS Alert CDN-->


<!--about page style-->
 <link rel="stylesheet" href="css/contactcss.css">
<!--about page style-->

<title>White caps Complete Home SOlutions, Interior Design, Modular Kitchen, Painting, Renovation, Painting</title>
<style>
body{
  font-family: 'Dosis', sans-serif !important;
}
</style>
</head>
<body>
  <!-- Navigation Menu Bar -->
     <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

       <div class="container">
         <a class="navbar-brand" href="#">
           <img src="img/logo.png" width="140" height="80" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarResponsive">
           <ul class="navbar-nav ml-auto">

             <li class="nav-item">
               <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp HOME</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i>&nbsp ABOUT US</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="services.php"><i class="fas fa-hands-helping"></i>&nbsp OUR SERVICES</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="process.php"><i class="fas fa-chalkboard-teacher"></i>&nbsp OUR PROCESS</a>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="contact.php"><i class="fas fa-address-card"></i>&nbsp CONTACT US</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="booknow.php"><i class="fas fa-hand-point-right"></i>&nbsp BOOK NOW</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
<!--End Of Menu Bar-->



<!--Content Start-->

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 coninf">
    <div class="row">

        <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="gitc1">
              <h4><i class="fa fa-inbox"></i>&nbsp GET IN TOUCH</h4>
               <form action="#" method="post">
                <label>Name:</label>
                <br>
                <input type="text" name="uname" placeholder="Enter your Name" required/>
                <br>
                <label>Email Address:</label><br>
                <input type="email" name="mail"placeholder="Enter your Email" required/>
                <br>
                <label>Phone:</label><br>
                <input type="phone" name="phone" placeholder="Enter your Phone Number" required/>
                <br>
                <label>Subject:</label><br>
                <input type="text" name="subj" placeholder="Entet your Subject" required/>
                <br>
                <label>Message:</label><br>
                <textarea name="msg"></textarea>
                <br>
                <input type="submit"  name="getintouch" value="SUBMIT"/>
               </form>
          </div>
        </div>
                   <!--Get in Touch Backend-->
                      <?php
                      try {
                      $con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
                       if(isset($_POST['getintouch'])){
                       $name=$_POST['uname'];
                       $email=$_POST['mail'];
                       $phone=$_POST['phone'];
                       $subject=$_POST['subj'];
                       $message=$_POST['msg'];
                       $insert = $con->prepare("INSERT INTO inbox(name,email,phone,subject,message)
                       values(:name, :email, :phone, :subject, :message)");
                       $insert->bindParam (':name',$name);
                       $insert->bindParam (':email',$email);
                       $insert->bindParam (':phone',$phone);
                       $insert->bindParam (':subject',$subject);
                       $insert->bindParam (':message',$message);
                       $check=$insert->execute();
                       if($check)
                       {
                         echo '<script language="javascript">swal("Thank You !!", "We Will Reach You soon..!!", "success");</script>';
                        }
                        else
                        {
                          echo '<script language="javascript">swal("Sorry!", "Unable to process Try again later..!!", "error");</script>';

                        }
                  }
              }
        catch (PDOException $e) {
        echo "Error: ". $e -> getMessage();
          }
    ?>



<!--Iam Seperating gitc1 and gitc2 lol :( :)-->

        <div  class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="gitc2">
            <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <div class="gitc2a">
                  <h4><i class="fa fa-address-card"></i>&nbsp Office Address</h4>
                      <p>Plot.No: 45, Colony: Ragavendra Nagar,<br>
                         Area: Near Hayathnagar Depot,<br>
                         Town: Hayathnagar, City: Hyderabad,<br>
                         State: Telangana,<br>
                         Pincode: 501505.</p>
              </div>

              <div class="gitc2b">
                <h4><i class="fa fa-envelope"></i>&nbsp E-mail</h4>
                <p>whitecaphs@gmail.com<br>info@whitecaphs.com</p>
              </div>

              <div class="gitc2c">
                <h4><i class="fas fa-mobile-alt"></i>&nbsp Call us</h4>
                <p>+91 9985135859<br>+91 8555800925</p>
              </div>

              <input type="button" data-toggle="modal" data-target="#exampleModalCenter5" value="ADMIN LOGIN"/>

            </div>
          </div>
        </div>


    </div>
</div>


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 loch">
  <h3>LOCATION</h3>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 locmap">
  <iframe width="100%" height="400" id="gmap_canvas"
   src="https://maps.google.com/maps?q=Hayathnagar hyderabad&t=&z=17&ie=UTF8&iwloc=&output=embed"
   frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>

<!--Content end-->



<!--Footer-->

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foote">

  <div class="row">

    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
         <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot1">
          <h4>ABOUT US</h4>
          <p>White cap the complete home solutions provide a
            one-step solution to design and execution for
            Residential and other commercial places which
            includes interior design, modular kitchens,
            renovation and other home services.</p>
         </div>
    </div>

   <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
        <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot2">
         <h4>CONTACT INFO</h4>
         <p><i class="fas fa-map-marker-alt"></i>&nbsp Plot.No: 45, Raghavendra Nagar,
                                                       Hayathnagar, Hyderabad-501505.</p>
         <p><i class="fas fa-envelope"></i>&nbsp urservice@whitecaphs.com</p>
         <p><i class="fas fa-mobile-alt"></i>&nbsp +91 8555800925</p>
        </div>
   </div>


   <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
         <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot3">
        <h4>NAVIGATION</h4>
        <ul>
          <a href="index.php"><li><i class="fas fa-angle-right"></i>&nbsp Home</li></a>
          <a href="about.php"><li><i class="fas fa-angle-right"></i>&nbsp About us</li></a>
          <a href="services.php"><li><i class="fas fa-angle-right"></i>&nbsp Our Services</li></a>
          <a href="process.php"><li><i class="fas fa-angle-right"></i>&nbsp Our Process</li></a>
          <a href="contact.php"><li><i class="fas fa-angle-right"></i>&nbsp Contact us</li></a>
        </ul>
        </div>
   </div>


   <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 foot4">
       <h4>MEDIA</h4>
       <ul>
         <a href="https://www.facebook.com/whitecaphs/"><li><i class="fab fa-facebook-square"></i>&nbsp Facebook</li></a>
         <a href="https://twitter.com/whitecaphs"><li><i class="fab fa-twitter-square"></i>&nbsp Twitter</li></a>
         <a href="#"><li><i class="fab fa-google-plus-square"></i>&nbsp Google+</li></a>
         <a href="#"><li><i class="fab fa-linkedin"></i>&nbsp Linkedin</li></a>
       </u>
       </div>

  </div>

  </div>
</div>


<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fote">
     <p>Copyright (c) 2018 Copyright Holder All Rights Reserved whitecaphs.com</p>
</div>


<a id="back2Top" title="Back to top" href="#"><i class="fas fa-angle-up"></i></a>
<script>
/*Scroll to top when arrow up clicked BEGIN*/
$(window).scroll(function() {
    var height = $(window).scrollTop();
    if (height > 50) {
        $('#back2Top').fadeIn();
    } else {
        $('#back2Top').fadeOut();
    }
});
$(document).ready(function() {
    $("#back2Top").click(function(event) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });

});
 /*Scroll to top when arrow up clicked END*/
</script>

<!--Admin Login Box Start-->
<div class="modal fade" id="exampleModalCenter5" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ADMIN LOGIN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <div class="modal-body">
        <img src="./img/adico.png"/>
        <form action="#" method="post">
        <label>Username/Email:</label>&nbsp
        <input type="text" name="usernameEmail" placeholder="Enter Your Email/Username" required/>
        <br>
        <label>Password:</label>&nbsp
        <input type="password" name="password" placeholder="Enter Your Password" required/>
        <br>
         <input  type="submit" name="loginSubmit"   class="btn btn-primary" value="LOGIN"/>
         <input  type="submit" style="background-color:gray;"  value="CLOSE" class="btn btn-secondary" data-dismiss="modal">
        </form>
      </div>
    </div>
  </div>
</div>
<!--Admin Login Modal Box end-->

</body>
</html>
