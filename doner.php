<?php
$DB="donation";
$USER="root";
$PASS="";
$HOST="localhost";

 $con=mysqli_connect($HOST,$USER,$PASS,$DB);
 if(!$con){
	 echo "Not Connected !...";
	 
 }
 if(!isset($_POST['submit'])){
	 
	 
	 if( empty($_POST['q']) || empty($_POST['w']))
	 {
		
		 
	 }
	 else{
		 
		 $sql="select amount from donation_post where postid='".$_POST['q']."'";
		 $result=mysqli_query($con,$sql);
		 if($row=mysqli_fetch_assoc($result)){
			 
			 $_SESSION['User']=$_POST['q'];

			 $username=$_POST['q'];
			 
			 $a=$_POST['w'];
			 $amount=$row['amount'];
			 $amount=$amount-$a;
			 
			 
			 
			  if($amount<0){
				  
				 $amount=-1*$amount;
				 
				 $_POST['r']=$amount;
				 
				 echo $amount;
				 
				$abc="update donation_post set fund='$_POST[r]', amount=0 where postid='$_POST[q]'";
				
			 
			  if(mysqli_query($con,$abc)){
				 echo "Success";
				 
			 }
			 }
			 else{
			 $_POST['r']=$amount;
			 
			 
			 $abc="update donation_post set amount=' $_POST[r]' where postid='".$_POST['q']."'";
			 
			 if(mysqli_query($con,$abc)){
				 echo "Success";
				 
			 }
			 
			 }
			 
			 
			 
		 }
		 else{
			 echo "Userid and Password Invalid";
			 
		 }
		 
	 }
	 }
	 
	 else{
		 echo "Not Success";
		 
		 
		 
	 }
	 

 
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Donater Menu | Donation Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
	<link href="css/1.css" rel="stylesheet" media="all">
    
  </head>
  <body>
   <div class="top-container">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-5 col1">
                <h5>Donation Management System</h5>
            </div>
            <div class="col-sm-6 col-7 col2">
                <div class="row">
                   <div class="col-sm-12">
                      <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                      <a href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                   </div>
                </div>
            </div>
        </div>
    </div>
   </div>
    <!-- Navigation -->
    <nav id="myHeader" class="header navbar navbar-expand-lg navbar-dark">
      <div class="container">
        <div class="navbar-brand"><img src="images/logo.png" alt="logo"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
			<div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="http://localhost/donation/home.php?username=" .$username;
				echo "<a href='$url'><b>Home</b></a>";
				?></div>
                
            </li>
            <li class="nav-item">
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="post.php?username=" .$username;
				echo "<a href='$url'><b>Create Post</b></a>";
				?></div>
            </li>
			
            <li class="nav-item">
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="show.php?username=" .$username;
				echo "<a href='$url'><b>Show Post</b></a>";
				?></div>
				
            </li>
            
			<li class="nav-item active">
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="doner.php?username=" .$username;
				echo "<a href='$url'><b>Donate Money</b></a>";
				?></div>
				<span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				echo "Welcome, $username";
				?></div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<header class="banner">
         <div class="gradient"></div>
          <div class="container">
              <div class="row">
                 <div class="col-sm-12 heading">
                    <h1 data-aos="fade-right" data-aos-delay="300"></h1>
                    <h2 data-aos="fade-left" data-aos-delay="300">It is in your hands to make a difference.</h2>
                 </div>  
              </div>
          </div>
    </header>




<div class="footer-section">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Donatate The Poor People</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row m-b-55">
                            <div class="name">Postid</div>
                            <div class="value">
                                <div class="contact">
                                    <input class="input--style-5" type="text" name="q">
                                </div>
                            </div>
                        </div>
						<div class="form-row">
                            <div class="name">Donation Amount</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="message" name="w">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Submit Post</button>

                        </div>
						
						
                    </form>
					
                </div>
            </div>
        </div>
    </div>
</br>

<footer class="page-footer">
  <div class="gradient"></div>
    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-5 col-md-12 col-12 content">

          <!-- Content -->
           
           <div class="gradient"></div>
           <div class="carousel-caption">
            No one has ever become poor by giving...
              “If you’re in the luckiest one per cent of humanity, you owe it to the rest of 
					humanity to think about the other 99 per cent.”
                       ― Warren Buffett
              <a class="btn btn-primary" href="#" role="button">Read More</a>
            </div>
         
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="mt-3 mb-3">Site Navigation</h5>

          <ul class="list-unstyled">
		     <li>
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="home.php?username=" .$username;
				echo "<a href='$url'><b>Home Page</b></a>";
				?></div>
            </li>
            <li>
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="post.php?username=" .$username;
				echo "<a href='$url'><b>Create Post</b></a>";
				?></div>
            </li>
            <li>
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="show.php?username=" .$username;
				echo "<a href='$url'><b>Show post</b></a>";
				?></div>
            </li>
            <li>
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="doner.php?username=" .$username;
				echo "<a href='$url'><b>Donate Money</b></a>";
				?></div>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="mt-3 mb-3">information</h5>

          <ul class="list-unstyled">
            <li>
              <a href="http://localhost/donation/login/login.php"><b>user login</b></a>
            </li>
            <li>
              <a href="http://localhost/donation/signup"><b>creat new account</b></a>
            </li>
          </ul>

        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-2 col-md-4 mx-auto">


          <!-- Links -->
          <h5 class="mt-3 mb-3">policies & Info</h5>

          <ul class="list-unstyled">
            
              <b>There are no policy About Donation Management Website. Fell Free to Donate. Thanks</b>
          
            
          </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <!-- Footer Links -->
    <br/>
    <!-- Copyright -->
    <div class="footer-copyright text-center">
       <p>© 2019, All Rights Reserved.</p>
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->

   
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <!-- Custom JavaScript -->
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
<script>
$('.carousel').carousel({
  interval: 2000
})
    
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
     <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    </script>
  </body>
</html>