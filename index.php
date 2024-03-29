<?php
    include_once 'includes/header.php';
    // if (!isset($_SESSION['current_session']))
    // header('Location: login.php'); 
    // if (isset($_POST) && count($_POST) > 0) {
    // $Response = Login($_POST); }
    $posts = getPosts($conn, $_GET['id'] ?? null);
    $users = getUsers($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Museums Scotland</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/9c05ce6683.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

  </head>
  <body>
    <style>
       
        @media (min-width: 768px) {
          .bd-placeholder-img-lg {
            font-size: 3.5rem;
          }
        }
  
        .b-example-divider {
          height: 3rem;
          background-color: rgba(0, 0, 0, .1);
          border: solid rgba(0, 0, 0, .15);
          border-width: 1px 0;
          box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }
  
        .b-example-vr {
          flex-shrink: 0;
          width: 1.5rem;
          height: 100vh;
        }
  
        .bi {
          vertical-align: -.125em;
          fill: currentColor;
        }
  
        .nav-scroller {
          position: relative;
          z-index: 2;
          height: 2.75rem;
          overflow-y: hidden;
        }

        .bg-transparent {
            background-color: transparent;
        }
  
        .nav-scroller .nav {
          display: flex;
          flex-wrap: nowrap;
          padding-bottom: 1rem;
          margin-top: -1px;
          overflow-x: auto;
          text-align: center;
          white-space: nowrap;
          -webkit-overflow-scrolling: touch;
        }

      </style>
  

    </head>
    <body>
      
  <header>

    <nav class="autohide navbar navbar-expand-md fixed-top bg-transparent">
      <div class="container-fluid">
        <a class="navbar-brand" 
        data-bs-toggle="offcanvas" 
        href="#offcanvasExample" 
        role="button" 
        aria-controls="offcanvasExample"
        > 
          <i class="fas fa-bars" style="color: gray;" ></i>
          <!-- <span class="navbar-toggler-icon"></span> -->
        </a>

        <button 
        style="border: 0;"
        class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end mx-5" id="navbarCollapse" >
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./event.php">Event</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"><i class="fas fa-search"></i></a>
            </li>
          </ul>
        
        </div>
      </div>
    </nav>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <img src="./assets/images/logo.png" alt=""
        style="width:100px; border:1px solid #eee;"
        class="offcanvas-title rounded-circle gap-0 mx-0" id="offcanvasExampleLabel"
        >
        <!-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">National Museums Scotland</h5> -->
        <h6 class="fw-bold" style="font-size: .9rem;">
          Kelvingrove <br/>
          Art Gallery and Museum
        </h6>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
       
        <div class="dropdown mt-3">
          <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" style="border: 0;">
            Menu
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <li><a class="dropdown-item" href="./index.php">Home</a></li>
            <li><a class="dropdown-item" href="./about.php">About</a></li>
            <li><a class="dropdown-item" href="./gallery.php">Gallery</a></li>
            <li><a class="dropdown-item" href="./event.php">Event</a></li>
            <li><a class="dropdown-item" href="./contact.php">Contact</a></li>

            <?php if (isset($_SESSION['current_session'])) : ?>
              <li><a class="dropdown-item" href="./admin.php">Admin</a></li>

            <?php else: ?>
              <li><a class="dropdown-item" href="./login.php">Sign in</a></li>

            <?php endif; ?>

            <!-- <li><a class="dropdown-item" href="./login.php">Sign in</a></li> -->
          </ul>
        </div>

        <div class="mt-5">
        
            <!-- <i class="fab fa-instagram-square"></i>  -->
            <ul>
            <li>  Find us on Social Media. </li>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-facebook-square"></i>
            <i class="fab fa-flickr"></i>
           </ul>
  
          </div>
          <?php
          // (B) PROCESS SEARCH WHEN FORM SUBMITTED
          if (isset($_POST["search"])) {
            // (B1) SEARCH FOR USERS
            require "search.php";

            // (B2) DISPLAY RESULTS
            if (count($results) > 0) { foreach ($results as $r) {
              printf("<div>%s - %s</div>", $r["title"], $r["body"]);
            }} else { echo "No results found"; }
          }
          ?>

            <!-- (A) SEARCH FORM -->
            <form onsubmit="return ajsearch();" >
                <h1 class="mt-5">SEARCH</h1>
                <input type="text" id="search" required/>
                <input type="submit" value="Search"/>
              </form>

              <!-- (B) SEARCH RESULTS -->
              <div id="results" class="mt-3">

              </div>


      </div>
    </div>


  </header>
  
  <main>
  
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="3000">
            <div class="img-gradient">
            <!-- <img src="./assets/images/bg.jpeg" alt="" class="bd-placeholder-img" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false" width="100%" height="100%"> -->
            </div>

          <div class="container">
            <div class="carousel-caption text-center">
                <img src="./assets/images/logo.png" alt="" 
                id="logo" 
                data-aos="fade-down"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"  
                />
              <h2
                data-aos="fade-up"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out"  
              >Welcome to Kelvingrove  <br/>
                Art Gallery and Museum</h2>
              <!-- <p>Welcome to Kelvingrove 
                Art Gallery and Museum</p> -->
              <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
            </div>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <!-- <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg> -->
          <div class="img-gradient-1">
            </div>
          

          <div class="container">
            <div class="carousel-caption">
              <h1>Another example headline.</h1>
              <p>Some representative placeholder content for the second slide of the carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Learn more</a></p>
            </div>
          </div>
        </div>

        <div class="carousel-item" data-bs-interval="3000">
          <div class="img-gradient-2">
          </div>
          
          <div class="container">
            <div class="carousel-caption text-end">
              <h1>One more for good measure.</h1>
              <p>Some representative placeholder content for the third slide of this carousel.</p>
              <p><a class="btn btn-lg btn-primary" href="#">Browse gallery</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Carousel END-->


    <div class="container marketing">
    <div class="row featurette">
        <div class="col-md-7 order-md-2 justify-content" 
        data-aos="fade-up-right"
        >
          <h2 class="featurette-heading fw-normal lh-1">
            Kelvingrove Museum opened in 1901 <br/>  </h2>
              <p class="text-muted fs-5 fw-bold" style="line-height: normal"> 
              and is a firm favourite with local people and visitors. It has stunning architecture and a family friendly atmosphere.</p>
          
          <p class="lead fs-6">
            Explore our 22 galleries and discover everything from art to animals, 
            Ancient Egypt to Charles Rennie Mackintosh and so much more. 
            We also have a changing programme of temporary exhibitions and displays.
          </p>
          <p class="text-end">
              <a class="btn btn-lg btn-primary fs-6" href="#">Learn more today</a>
          </p>

        </div>
        <div class="col-md-5 order-md-1 d-flex align-items-center justify-content">
            <img src="./assets/images/photo1.png" alt="" 
            class="featurette-image img-fluid mx-auto d-flex align-items-center justify-content" 
            width="300" height="300"
            data-aos="fade-up-left"
            >
         
            <!-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
              <title>Placeholder</title>
              <rect width="100%" height="100%" fill="#eee"/>
              <text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text>
            </svg> -->
  
        </div>


      </div>
  
      <hr class="featurette-divider">




  
      <!-- Three columns of text below the carousel -->
      <div class="row" 
      data-aos="zoom-in"
      >
        <div class="col-lg-4">
            <div class="bd-placeholder-img rounded-circle d-flex justify-content-center" style="background:MistyRose;  width:140px; height:140px; margin:0 auto; " >
                <i class="far fa-3x fa-bell text-center align-items-center"  style=" color: transparent;  margin:30% auto; z-index: 1; position: relative;"></i>
              <img src="./assets/images/ima1.jpg" alt="" class="rounded-circle" style=" width:140px; height:140px; margin:0 auto; opacity: .4;">

              </div>
  
          <h2 class="fw-normal mt-3 ">WE ARE FREE</h2>
          <p> 
            No need to book, <br/>
            just drop in. <br/>
            Regular opening hours <br/>

          </p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">

            <div class="bd-placeholder-img rounded-circle d-flex justify-content-center" style="background: #1c7ed6; opacity: .6;  width:140px; height:140px; margin:0 auto; z-index: -1;" >
                <i class="far fa-clock fa-3x text-center align-items-center"  style=" color: transparent;  margin:30% auto; "></i>
                <img src="./assets/images/ima2.jpg" alt="" class="rounded-circle" style=" width:140px; height:140px; margin:0 auto; opacity: .7;">

                       </div>

          <h2 class="fw-normal mt-3">Opening Time</h2>
          <p>
            Monday - Thursday <br/>
            Saturday: 10am-5pm <br/>
            Friday and Sunday: 11am-5pm <br/>
          </p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4">
         
         
            <div class="bd-placeholder-img rounded-circle d-flex justify-content-center" style="background:MistyRose;  width:140px; height:140px; margin:0 auto; " >
                <i class="fas fa-seedling fa-3x text-center align-items-center"  style=" color: transparent;  margin:30% auto; "></i>
                <img src="./assets/images/ima3.jpg" alt="" class="rounded-circle" style=" width:140px; height:140px; margin:0 auto; opacity: .7;">

          
              </div>
  
          <h2 class="fw-normal mt-3 ">Special Event</h2>
          <p>
            The organ recitals will be <br/>
            performed daily at 1pm, <br/>
            Sundays, they will be at 3pm. <br/>          
          </p>
          <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->
  
  
      <!-- START THE FEATURETTES
  
      <hr class="featurette-divider">
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">First featurette heading. <span class="text-muted">It’ll blow your mind.</span></h2>
          <p class="lead">Some great placeholder content for the first featurette here. Imagine some exciting prose here.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
  
  
      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">And yes, this is the last block of representative placeholder content. Again, not really intended to be actually read, simply here to give you a better view of what this would look like with some actual content. Your content.</p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
  
        </div>
      </div>
  
      <hr class="featurette-divider">
   -->
      <!-- /END THE FEATURETTES -->
  
      <div class="owl-carousel owl-theme">
        <div class="item">
        
          <img src="./assets/images/gallery1.jpg" alt="">
        </div>
        <div class="item">
          
          <img src="./assets/images/gallery2.jpg" alt="">
        </div>
        <div class="item">
         
          <img src="./assets/images/gallery3.jpg" alt="">
        </div>
        <div class="item">
        <img src="./assets/images/gallery4.jpg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/gallery5.jpeg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/gallery6.jpeg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/ima1.jpg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/ima2.jpg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/photo3.jpeg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/ima3.jpg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/photo1.jpeg" alt="">
        </div>
        <div class="item">
          <img src="./assets/images/photo2.jpeg" alt="">
        </div>
      </div>



    </div><!-- /.container -->

    
    <!-- FOOTER -->
    <footer>
     <div class="container">
      <div class="footer-logo float-end">
          <img src="./assets/images/logo.png" alt="" class="rounded-circle" id="footer-logo">
          <a href="#" class="text-center d-flex justify-content-center align-self-center">Back to top</a>
      </div>

      <h1 class="">
        Kelvingrove <br/>
        Art Gallery and Museum
      </h1>
      <p class="mb-0">PEOPLE MAKE GLASGOW - Glasgow Life</p>
      <p>&copy; 2017–2022 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      <p style="font-size: .7rem;"><small>
        All Pictures from ART UK ® is a registered trade mark of the Public Catalogue Foundation. <br/> 
        Art UK is the operating name of the Public Catalogue Foundation, a charity registered in England and Wales (1096185) and Scotland (SC048601).
      </small></p>


    </div>
    </footer>

  </main>




</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

<script>

document.addEventListener("DOMContentLoaded", function(){
el_autohide = document.querySelector('.autohide');
// add padding-top to bady (if necessary)
navbar_height = document.querySelector('.navbar').offsetHeight;
document.body.style.paddingTop = navbar_height + 'px';

if(el_autohide){
  var last_scroll_top = 0;
  window.addEventListener('scroll', function() {
        let scroll_top = window.scrollY;
       if(scroll_top < last_scroll_top) {
            el_autohide.classList.remove('scrolled-down');
            el_autohide.classList.add('scrolled-up');
        }
        else {
            el_autohide.classList.remove('scrolled-up');
            el_autohide.classList.add('scrolled-down');
        }
        last_scroll_top = scroll_top;
  }); 
  // window.addEventListener
}
// if

}); 
// DOMContentLoaded  end

</script>


<script>

  var owl = $('.owl-carousel');
  owl.owlCarousel({
      loop:true,
      nav:true,
      margin:10,
      autoplay:true,
      autoplayTimeout:1000,
      autoplayHoverPause:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:3
          },            
          960:{
              items:5
          },
          1200:{
              items:6
          }
      }
  });
  owl.on('mousewheel', '.owl-stage', function (e) {
      if (e.deltaY>0) {
          owl.trigger('next.owl');
      } else {
          owl.trigger('prev.owl');
      }
      e.preventDefault();
  });

</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();

  </script>
<script>
function ajsearch() {
  // (A) GET SEARCH TERM
  var data = new FormData();
  data.append("search", document.getElementById("search").value);
  data.append("ajax", 1);
 
  // (B) AJAX SEARCH REQUEST
  fetch("search.php", { method:"POST", body:data })
  .then(res => res.json()).then((results) => {
    var wrapper = document.getElementById("results");
    if (results.length > 0) {
      wrapper.innerHTML = "";
      for (let res of results) {
        let line = document.createElement("div");
        line.innerHTML = `${res["title"]} - ${res["body"]}`;
        wrapper.appendChild(line);
      }
    } else { wrapper.innerHTML = "No results found"; }
  });
  return false;
}
</script>

</html>