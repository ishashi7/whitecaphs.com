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
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/logo-nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/scroll.css">
<!--Common for all pages-->

<!--JS Alert CDN-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<!--JS Alert CDN-->


<!--about page style-->
 <link rel="stylesheet" href="css/booknowcss.css">
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
             <li class="nav-item">
               <a class="nav-link" href="contact.php"><i class="fas fa-address-card"></i>&nbsp CONTACT US</a>
             </li>
             <li class="nav-item active">
               <a class="nav-link" href="booknow.php"><i class="fas fa-hand-point-right"></i>&nbsp BOOK NOW</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>
     <script src="js/jquery.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
<!--End Of Menu Bar-->



<!--Content-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bookb1">
 <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
   <div class="bookfb">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="form">
              <form action="booknow.php" method="post">
             <h4><i class="fa fa-briefcase"></i>&nbsp BOOK OUR SERVICES</h4>
              </br>
              <label>Name:</label>
              <br>
             <input type="text" name="name"  Placeholder="Enter your  Name" required/>
             <label>Phone Number:</label>
             <br>
             <input type="phone" name="phone" Placeholder="Enter your  Phone Number" required/>
             <label>Email:</label>
             <br>
             <input type="email" name="mail" Placeholder="Enter your  Email Id" required/>
             <label>Type of Service:</label>
             <br>
             <select name="ornam">
             <option><---SELECT---></option>
             <optgroup label="INTERIOR">
             <option value="Hall">Hall</option>
             <option value="Bed Room">Bed Room</option>
             <option value="Children Room">Children Room</option>
             <option value="Study Room">Study Room</option>
             <option value="T.V Cabinet">T.V Cabinet</option>
             <option value="Wardrobes">Wardrobes</option>
             <option value="Office Interior">Office Interior</option>
             <option value="Hotels">Hotels</option>
             <option value="Modular Kitchens">Modular Kitchens</option>
             </optgroup>
              <optgroup label="RENOVATION">
              <option value="Homes">Homes</option>
              <option value="Hotels">Hotels</option>
              <option value="Super Markets">Super Markets</option>
              <option value="Saloons">Saloons</option>
              <option value="Shops">Shops</option>
              <option value="Parlors">Parlors</option>
              <option value="Other Renovations">Other</option>
              </optgroup>
              <optgroup label="PAINTINGS">
              <option value="Interior">Interior</option>
              <option value="Exterior">Exterior</option>
              <option value="Elevation">Elevation</option>
              <option value="Duplex House">Duplex House</option>
              <option value="Apartments">Apartments</option>
              <option value="Commercial Buildings">Commercial Buildings</option>
              </optgroup>
              <optgroup label="OTHER SERVICES">
              <option value="Plumbing">Plumbing</option>
              <option value="Carpentry">Carpentry</option>
              <option value="Electrical">Electrical</option>
              <option value="Solar Power">Solar Power</option>
              <option value="CC Camera Installation">CC Camera Installation</option>
              </optgroup>
              </select>
              <label>H.No/Street/Location:</label>
              <br>
              <input type="text" name="street" Placeholder="Enter your Street Name" required/>
              <label>Town/City:</label>
              <br>
              <input type="text" name="town" Placeholder="Enter your Town Name"/>
              <label>State:</label>
              <br>
              <input type="text" name="state" Placeholder="Enter Your State Name"/>
              <label>Pincode:</label>
              <br>
              <input type="text" name="pin" Placeholder="Enter your Pincode"/>
              <input type="submit" class="bookb" name="ordersubmit" value="SUBMIT"/>
              </form>
          </div>
   </div>
  </div>
 </div>
</div>


<?php
try {
$con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
 if(isset($_POST['ordersubmit'])){
 $orderid = rand(1111,9999);
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $email=$_POST['mail'];
 $service=$_POST['ornam'];
 $street=$_POST['street'];
 $town=$_POST['town'];
 $state=$_POST['state'];
 $pincode=$_POST['pin'];

 $insert = $con->prepare("INSERT INTO orders(orderid,name,phone,email,service,street,town,state,pincode)
 values(:orderid, :name, :phone, :email, :service, :street, :town, :state, :pincode)");
 $insert->bindParam (':orderid',$orderid);
 $insert->bindParam (':name',$name);
 $insert->bindParam (':phone',$phone);
 $insert->bindParam (':email',$email);
 $insert->bindParam (':service',$service);
 $insert->bindParam (':street',$street);
 $insert->bindParam (':town',$town);
 $insert->bindParam (':state',$state);
 $insert->bindParam (':pincode',$pincode);
 $check=$insert->execute();
 if($check)
 {
   echo '<script language="javascript">swal("Thank You for Booking !!", "Our Team will Reach You soon..!!", "success");</script>';
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
</body>
</html>
