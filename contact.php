<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1.0, width=device-width" />
    <title>National Museums Scotland</title>
    <link rel="stylesheet" href="./style.css">
    <script src="https://kit.fontawesome.com/9c05ce6683.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,700,900&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script type="text/javascript" src='./map.js'></script>
    <link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.1/mapsjs-ui.css" />
    <script src="https://js.api.here.com/v3/3.1/mapsjs-core.js"
    type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-service.js"
        type="text/javascript" charset="utf-8"></script>
    <script src="https://js.api.here.com/v3/3.1/mapsjs-ui.js"
        type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="https://js.api.here.com/v3/3.1/mapsjs-mapevents.js"></script>
  

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
             
          #map { height: 100vh; width: 100vw; }

          #contactUs {
            font-family: "Poppins", sans-serif;
            color: #000; }

          .text-black {
            color: #000; }

          .content {
            padding: 7rem 0; }

          .form-control {
            border: none;
            border: 1px solid #d9d9d9;
            border-radius: 0; }
            .form-control:active, .form-control:focus {
              outline: none;
              -webkit-box-shadow: none;
              box-shadow: none;
              border-color: #000; }

          .col-form-label {
            color: #000; }

          .btn, .form-control {
            height: 55px; }

          .btn:active, .btn:focus {
            outline: none;
            -webkit-box-shadow: none;
            box-shadow: none; }

          label.error {
            font-size: 12px;
            color: red; }

          #message {
            resize: vertical; }

          #form-message-warning, #form-message-success {
            display: none; }

          #form-message-warning {
            color: #B90B0B; }

          #form-message-success {
            color: #55A44E;
            font-size: 18px;
            font-weight: bold; }

          .submitting {
            float: left;
            width: 100%;
            padding: 10px 0;
            display: none;
            font-weight: bold;
            font-size: 12px;
            color: #000; }

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
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="img-contact">
            </div>

          <div class="container">
            <div class="carousel-caption text-center">
                <h6
                data-aos="fade-down"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                Contact</h6>
                <!-- <p>Some representative placeholder content for the second slide of the carousel.</p> -->
              <h2
              class="text-center"
                data-aos="fade-up"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out" >
                Get in touch  <br/>
              </h2>
              <!-- <p>Welcome to Kelvingrove 
                Art Gallery and Museum</p> -->
              <!-- <p><a class="btn btn-lg btn-primary" href="#">Sign up today</a></p> -->
            </div>
          </div>
        </div>

      </div>
    </div>
  
    <!-- Carousel END-->

    <div class="container">

      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <h2 id="contactUs" >Contact Us</h2>
            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quaerat autem corrupti asperiores accusantium et fuga! Facere excepturi, quo eos, nobis doloremque dolor labore expedita illum iusto, aut repellat fuga!</p>
  
            <ul class="list-unstyled pl-md-5 mb-5">
              <li class="d-flex text-black mb-2">
                <span class="mr-3">
                  <i class="fas fa-map-marker-alt mx-2"></i>
                </span> 
                Kelvingrove Art Gallery and Museum
                <br> Argyle Street, Glasgow, G3 8AG
              </li>
              <li class="d-flex text-black mb-2"><span class="mr-3">
                <i class="fas fa-phone-alt mx-2"></i>  
              </span>
                0141 276 9599</li>
              <li class="d-flex text-black"><span class="mr-3">
                <i class="fas fa-at mx-2"></i>
              </span> 
                museums@glasgowlife.org.uk </li>
            </ul>
          </div>
  
          <div class="col-md-6">
            <form class="mb-5" method="post" id="contactForm" name="contactForm">
              <div class="row">
                
                <div class="col-md-12 form-group">
                  <label for="name" class="col-form-label">Name</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
              </div>
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="email" class="col-form-label">Email</label>
                  <input type="text" class="form-control" name="email" id="email">
                </div>
              </div>
  
              <div class="row">
                <div class="col-md-12 form-group">
                  <label for="message" class="col-form-label">Message</label>
                  <textarea class="form-control" name="message" id="message" cols="30" rows="7"></textarea>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="mt-3 btn btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                </div>
              </div>
            </form>
  
            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Your message was sent, thank you!
            </div>
          </div>
        </div>
    </div>
  
    </div>

    <section>
      <div id="map" style="width:100%; height: 500px;"> </div>
    </section>

    <br />

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

<script src="./assets/js/jquery.validate.min.js"></script>
<script src="./assets/js/main.js"></script>
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