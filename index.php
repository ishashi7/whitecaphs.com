<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--Common for all Pages-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="css/logo-nav.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/scroll.css">
   <link rel="stylesheet" href="css/testi.css">
  
<!--Common for all pages-->
  <script src="js/sweetalert.min.js" type="text/javascript"></script>
<!--Home page style-->
<link rel="stylesheet" href="css/bannercss.css" type="text/css">
<link rel="stylesheet" href="css/homecss.css" type="text/css">
<!--Home page style-->


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
         <a class="navbar-brand" href="index.html">
           <img src="img/logo.png" width="140" height="80" alt="">
         </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse"  id="navbarResponsive">
           <ul class="navbar-nav ml-auto">

             <li class="nav-item active">
               <a class="nav-link" href="index.php"><i class="fas fa-home"></i>&nbsp HOME</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="about.php"><i class="fas fa-info-circle"></i>&nbsp ABOUT US</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="services.php"><i class="fas fa-hands-helping"></i>&nbsp OUR SERVICES</a>
             </li>
             <li class="nav-item ">
               <a class="nav-link" href="process.php"><i class="fas fa-chalkboard-teacher"></i>&nbsp OUR PROCESS</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="contact.php"><i class="fas fa-address-card"></i>&nbsp CONTACT US</a>
             </li>
             <li class="nav-item">
               <a class="nav-link" href="booknow.php"><i class="fas fa-hand-point-right"></i>&nbsp BOOK NOW</a>
             </li>
           </ul>
         </div>
       </div>
     </nav>
	 <script>
	 $(document).ready(function(){
    $("button").click(function(){
        $("#navbarResponsive").toggle(500);
    });
});
	 </script>
      <script src="js/bootstrap.bundle.min.js"></script>

<!--End Of Menu Bar-->

<!-- Slider -->
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides" id="slider">
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
							<div class="slider-info">
								<h3>Welcome to whitecaphs</h3>
								<h4>Home - Renovations</h4>
								<p>We Design Beautiful Interiors</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top">
						<div class="container">
							<div class="slider-info agile-text2">
								<h3>Welcome to whitecaphs</h3>
								<h4>Commercial - Remodeling</h4>
								<p>One Step for all Your Home Services</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="container">
							<div class="slider-info agile-text3">
								<h3>Welcome to whitecaphs</h3>
								<h4>Interior - Renovations</h4>
								<p>We Paint Beautiful Interiors & Exteriors</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"></div>
	</div>
	<!-- //Slider -->

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>

	<!-- Baneer-js -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				pager: false,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //Baneer-js -->


<!--Services-->

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fhed">
<h3>OUR SERVICES</h3>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hinfo1">
  <div class="row">

<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
    <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <a href="services.php"><div class="serb1">
            <img src="img/id.jpg" alt="Interior Design"/>
            <p>INTERIOR DESIGN</p>
        </div></a>
    </div>
</div>

<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="services.php"><div class="serb1">
          <img src="img/hd.jpg" alt="Modular Kitchen"/>
          <p>MODULAR KITCHENS</p>
      </div></a>
  </div>
</div>

<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="services.php"><div class="serb1">
          <img src="img/hr.jpg" alt="Renovations"/>
          <p>RENOVATION</p>
      </div></a>
  </div>
</div>


<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="services.php"><div class="serb1">
          <img src="img/pai.jpg" alt="Painting"/>
          <p>PAINTING</p>
      </div></a>
  </div>
</div>


<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="services.php"><div class="serb1">
          <img src="img/eng.jpg" alt="Home Services"/>
          <p>HOME SERVICES</p>
      </div></a>
  </div>
</div>

<div  class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
  <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
      <a href="services.php"><div class="serb1">
          <img src="img/sol.jpg" alt="Solar Power"/>
          <p>SOLAR POWER</p>
      </div></a>
  </div>
</div>

</div>
</div>

<!--Services End-->

<!--Our Process Start-->

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fhed2">
<h3>OUR PROCESS</h3>
</div>
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hinfo2">
   <div class="row">


     <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <a href="process.php"><div class="serb1">
               <img src="img/sc.jpg" alt="Scope"/>
               <p>SCOPE</p>
           </div></a>
       </div>
     </div>

     <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <a href="process.php"><div class="serb1">
               <img src="img/env.jpg" alt="Envision"/>
               <p>ENVISION</p>
           </div></a>
       </div>
     </div>


     <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <a href="process.php"><div class="serb1">
               <img src="img/bui.jpg" alt="Build"/>
               <p>BUILD</p>
           </div></a>
       </div>
     </div>


     <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
       <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
           <a href="process.php"><div class="serb1">
               <img src="img/com.jpg" alt="Communicate"/>
               <p>COMMUNICATE</p>
           </div></a>
       </div>
     </div>


   </div>
</div>


<!-- PROCESS End-->


<!--Business With Us Start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 fhed2">
<h3>BUSINESS WITH US</h3>
</div>

<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hinfo3">
  <div class="row">


    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="bwu1">
              <img src="img/pro1.jpg" alt="Professional"/>
              <p>BECOME A PROFESSIONAL</p>
              <center>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter1">
                      <input type="submit"style="background-color:#0097e6; "value="REGISTER"/>
              </a>
            </center>
          </div>
      </div>
    </div>

    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="bwu1">
              <img src="img/pro2.jpg" alt="Partner"/>
              <p>BECOME A PARTNER</p>
              <center>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter2">
                         <input type="submit" style="background-color:#EA2027;" value="REGISTER"/>
              </a>
            </center>
          </div>
      </div>
    </div>


    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="bwu1">
              <img src="img/pro3.png" alt="Supplier"/>
              <p>BECOME A SUPPLIER</p>
              <center>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter3">
                         <input type="submit" style="background-color:#2f3640;" value="REGISTER"/>
              </a>
            </center>
          </div>
      </div>
    </div>


    <div  class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
      <div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="bwu1">
              <img src="img/pro4.jpg" alt="Investor"/>
              <p>BECOME A INVESTOR</p>
            <center>
              <a href="#" data-toggle="modal" data-target="#exampleModalCenter4">
                      <input type="submit" style="background-color:#16a085;" value="REGISTER"/>
              </a>
            </center>
          </div>
      </div>
    </div>

  </div>
</div>

<!--Business with us End-->



<!--TESTIMONIALS Start-->
<div  class="col-lg-12 col-md-12 col-sm-12 col-xs-12 hinfo4">
	<div class="row">
		<div class="col-md-12 col-center m-auto">
			<h3>TESTIMONIALS</h3>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="img/testi1.png" alt=""></div>
						<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
						<p class="overview"><b>Paula Wilson</b>, Media Analyst</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="img/testi1.png" alt=""></div>
						<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
						<p class="overview"><b>Antonio Moreno</b>, Web Developer</p>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="img/testi2.png" alt=""></div>
						<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
						<p class="overview"><b>- Anusha,</b>, Seo Analyst</p>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
</div>


</div>
<!--TESTIMONIALS End-->


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



<!--PROFESSIONAL Modal Box end-->
<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BECOME A PROFESSIONAL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
        <label>Name:</label>&nbsp
        <input type="text" name="name" placeholder="Enter Your Name" required/>
        <br>
        <label>Email:</label>&nbsp
        <input type="email" name="mail" placeholder="Enter Your Email" required/>
        <br>
        <label>Phone:</label>&nbsp
        <input type="phone" name="number" placeholder="Enter Your Phone Number" required/>
        <br>
        <label>Date of Birth:</label>&nbsp
        <input type="date" name="dob" required/>
        <br>
        <label>Skills: (Ex: Interior Designing, Painting, Cleaning..)</label>&nbsp
        <input type="text" name="skills" placeholder="Enter your Skills" required/>
        <br>
        <label>Experience: (Ex: 0/1/2/3..)</label>&nbsp
        <input type="number" name="experience" placeholder="Enter No of years Experience"required/>
        <br>
        <label>Address: (Ex: H.No/City/State/Country/Pincode..)</label>&nbsp
        <textarea name="addre"> </textarea>
        <br>
         <input type="submit" name="proffessional" class="btn btn-primary" value="SUBMIT"/>
         <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="CLOSE"/>
        </form>
		<?php
  try {
  $con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
   if(isset($_POST['proffessional'])){
   $name=$_POST['name'];
   $email=$_POST['mail'];
   $phone=$_POST['number'];
   $dob=$_POST['dob'];
   $skills=$_POST['skills'];
   $experience=$_POST['experience'];
   $address=$_POST['addre'];
   $insert = $con->prepare("INSERT INTO proffessional(name,email,phone,dob,skills,experience,address)
   values(:name, :email, :phone, :dob, :skills, :experience, :address)");
   $insert->bindParam (':name',$name);
   $insert->bindParam (':email',$email);
   $insert->bindParam (':phone',$phone);
   $insert->bindParam (':dob',$dob);
   $insert->bindParam (':skills',$skills);
   $insert->bindParam (':experience',$experience);
   $insert->bindParam (':address',$address);
   $check=$insert->execute();
   if($check)
   {
     echo '<script language="javascript">swal("Thank You for Registering with WC!!", "we will contact You soon..!!", "success");</script>';
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
      </div>
    </div>
  </div>
</div>
<!--PROFESSIONAL Modal Box end-->


<!--Partner Modal Box Start-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BECOME A PARTNER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
        <label>Name:</label>&nbsp
        <input type="text" name="name" placeholder="Enter Your Name" required/>
        <br>
        <label>Email:</label>&nbsp
        <input type="email" name="mail" placeholder="Enter Your Email" required/>
        <br>
        <label>Phone:</label>&nbsp
        <input type="phone" name="number" placeholder="Enter Your Phone Number" required/>
        <br>
        <label>Date of Birth:</label>&nbsp
        <input type="date" name="dob" required/>
        <br>
        <label>Why Do You Want to be a Partner</label>&nbsp
        <textarea  name="desc"></textarea>
        <br>
        <label>Address: (Example: H.No/City/State/Country..)</label>&nbsp
      <textarea name="addre"></textarea>
        <br>
        <input type="submit" name="partner" class="btn btn-primary" value="SUBMIT"/>
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="CLOSE"/>
        </form>
		<?php
try {
$con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
 if(isset($_POST['partner'])){
 $name=$_POST['name'];
 $email=$_POST['mail'];
 $phone=$_POST['number'];
 $dob=$_POST['dob'];
 $description=$_POST['desc'];
 $address=$_POST['addre'];
 $insert = $con->prepare("INSERT INTO partner(name,email,phone,dob,description,address)
 values(:name, :email, :phone, :dob, :description, :address)");
 $insert->bindParam (':name',$name);
 $insert->bindParam (':email',$email);
 $insert->bindParam (':phone',$phone);
 $insert->bindParam (':dob',$dob);
 $insert->bindParam (':description',$description);
 $insert->bindParam (':address',$address);
 $check=$insert->execute();
 if($check)
 {
   echo '<script language="javascript">swal("Thank You for Registering with WC..!!", "we will contact You soon..!!", "success");</script>';
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
      </div>
    </div>
  </div>
</div>
<!--Partner Modal Box end-->



<!--Supplier Modal Box Start-->
<div class="modal fade" id="exampleModalCenter3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BECOME A SUPPLIER</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
        <label>Name:</label>&nbsp
        <input type="text" name="name" placeholder="Enter Your Name" required/>
        <br>
        <label>Email:</label>&nbsp
        <input type="email" name="mail" placeholder="Enter Your Email" required/>
        <br>
        <label>Phone:</label>&nbsp
        <input type="phone" name="number" placeholder="Enter Your Phone Number" required/>
        <br>
        <label>Date of Birth:</label>&nbsp
        <input type="date" name="dob" required/>
        <br>
        <label>Supplier Type: (Ex: Manufacturer, Trader, Agent, Other..)</label>&nbsp
        <input type="text" name="suptyp" placeholder="Enter type of Supplier you are" required/>
        <br>
        <label>Type of Products: (Ex: Paint Box, Wooden Planks, Handles, Other..)</label>&nbsp
        <input type="text" name="topro" placeholder="Enter Type of Products you will Supply"required/>
        <br>
        <label>Address: (Ex: H.No/City/State/Country/Pincode..)</label>&nbsp
      <textarea name="addre"> </textarea>
        <br>
        <input type="submit" name="supplier" class="btn btn-primary" value="SUBMIT"/>
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="CLOSE"/>
        </form>
		<?php
try {
$con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
 if(isset($_POST['supplier'])){
 $name=$_POST['name'];
 $email=$_POST['mail'];
 $phone=$_POST['number'];
 $dob=$_POST['dob'];
 $type=$_POST['suptyp'];
 $products=$_POST['topro'];
 $address=$_POST['addre'];
 $insert = $con->prepare("INSERT INTO supplier(name,email,phone,dob,type,products,address)
 values(:name, :email, :phone, :dob, :type, :products, :address)");
 $insert->bindParam (':name',$name);
 $insert->bindParam (':email',$email);
 $insert->bindParam (':phone',$phone);
 $insert->bindParam (':dob',$dob);
 $insert->bindParam (':type',$type);
 $insert->bindParam (':products',$products);
 $insert->bindParam (':address',$address);
 $check=$insert->execute();
 if($check)
 {
   echo '<script language="javascript">swal("Thank You for Registering with WC..!!", "we will contact You soon..!!", "success");</script>';
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
      </div>
    </div>
  </div>
</div>
<!--Supplier Modal Box end-->



<!--Investor Modal Box Start-->
<div class="modal fade" id="exampleModalCenter4" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">BECOME A INVESTOR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="index.php" method="post">
        <label>Name:</label>&nbsp
        <input type="text" name="name" placeholder="Enter Your Name" required/>
        <br>
        <label>Email:</label>&nbsp
        <input type="email" name="mail" placeholder="Enter Your Email" required/>
        <br>
        <label>Phone:</label>&nbsp
        <input type="phone" name="number" placeholder="Enter Your Phone Number" required/>
        <br>
        <label>Date of Birth:</label>&nbsp
        <input type="date" name="dob" required/>
        <br>
        <label>Address: (Example: H.No/City/State/Country..)</label>&nbsp
        <textarea name="addre"></textarea>
        <br>
        <input type="submit" name="investor" class="btn btn-primary" value="SUBMIT"/>
        <input type="submit" class="btn btn-secondary" data-dismiss="modal" value="CLOSE"/>
        </form>
		<?php
try {
$con = new PDO ("mysql:host=localhost;dbname=pdo",'root','mysql');
 if(isset($_POST['investor'])){
 $name=$_POST['name'];
 $email=$_POST['mail'];
 $phone=$_POST['number'];
 $dob=$_POST['dob'];
 $address=$_POST['addre'];
 $insert = $con->prepare("INSERT INTO investor(name,email,phone,dob,address)
 values(:name, :email, :phone, :dob, :address)");
 $insert->bindParam (':name',$name);
 $insert->bindParam (':email',$email);
 $insert->bindParam (':phone',$phone);
 $insert->bindParam (':dob',$dob);
 $insert->bindParam (':address',$address);
 $check=$insert->execute();
 if($check)
 {
   echo '<script language="javascript">swal("Thank You for Registering with WC..!!", "we will contact You soon..!!", "success");</script>';
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
      </div>
    </div>
  </div>
</div>
<!--Investor Modal Box end-->

</body>

</html>
