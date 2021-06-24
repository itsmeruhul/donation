<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Main Menu | Donation Management System</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    
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
            <li class="nav-item active">
			<div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="http://localhost/donation/home.php?username=" .$username;
				echo "<a href='$url'><b>Home</b></a>";
				?></div>
                <span class="sr-only">(current)</span>
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
            <li class="nav-item">
              <div class="nav-link">
              <?php
				$username=$_GET['username'];
				$url="doner.php?username=" .$username;
				echo "<a href='$url'><b>Donate Money</b></a>";
				?></div>
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

    <header class="content">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item active">
           <img src="images/11.jpg" alt="...">
           <div class="gradient"></div>
           <div class="carousel-caption">
            <h3>You Don't Need A Reason To Help People</h3>
              <h1>We can change the world</h1>
              <h2>and make it a better place.</h2>
              <h5>It is in your hands to make a difference.<br>

                 <span>"Nelson Mandela"</span></h5>
              <a class="btn btn-primary" href="#" role="button">Read More</a>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->

          <!-- Slide Three - Set the background image for this slide in the line below -->
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </header>
	</br>
<section class="portfolio container">
   <div class="gradient"></div>
       <div class="">
          <div class="main-content">
              <div class="row">
                  <div class="col-lg-12 heading">
                      <h3>Here Is Some Option Of Our Work</h3>
                  </div>
              </div>
              <div class="row">
                  <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                      <div class="carousel-inner w-100" role="listbox">
                          <div class="carousel-item active">
                              <a href="images/portfolio4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="d-block col-sm-4 col-12 box">
                                 <img src="images/portfolio-4.jpg" class="img-fluid">
                                 <div class="overlay">
                                 <img src="images/plus-img.png" alt="plus-icon">
                                  <div class="text">Create Your Post for Get Help</div>
                                 </div>
                              </a>
                          </div>
                          <div class="carousel-item">
                              <a href="images/portfolio3.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="d-block col-sm-4 col-12 box">
                                 <img src="images/portfolio-3.jpg" class="img-fluid">
                                 <div class="overlay">
                                 <img src="images/plus-img.png" alt="plus-icon">
                                  <div class="text">Check Donation Who Want Help</div>
                                 </div>
                              </a>
                          </div>
                          <div class="carousel-item">
                              <a href="images/portfolio4.jpg" data-toggle="lightbox" data-gallery="example-gallery" class="d-block col-sm-4 col-12 box">
                                 <img src="images/portfolio-4.jpg" class="img-fluid">
                                 <div class="overlay">
                                 <img src="images/plus-img.png" alt="plus-icon">
                                  <div class="text">Donate For The Poor People</div>
                                 </div>
                              </a>
                          </div>
                      <a class="carousel-control-prev" href="#recipeCarousel" role="button" data-slide="prev">
                          <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
                          <span class="sr-only">Previous</span>
                      </a>
                      <a class="carousel-control-next" href="#recipeCarousel" role="button" data-slide="next">
                          <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                          <span class="sr-only">Next</span>
                      </a>
                  </div>
              </div>
          </div>
       </div>
</section>

<!-- Footer -->
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