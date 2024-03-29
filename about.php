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

            #gfg:hover {
                /* transition-property: background-size; */
                opacity: .6;
                transition: transform .3s ease-in-out;
                animation-name: move;
                animation-duration: .3s;
                animation-timing-function: ease-in-out;
              }
              @keyframes move {
            from {  transform:scale(102%); 
                     font-size: 1.5rem;
                     background-origin: content-box;
    
                     }
                 }
              to {    transform:scale(100%);               
                      font-size: 1.5rem;
                      background-origin: content-box;
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
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="img-about">
            </div>

          <div class="container">
            <div class="carousel-caption text-center">
                <h6
                data-aos="fade-down"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out">
                About</h6>
                <!-- <p>Some representative placeholder content for the second slide of the carousel.</p> -->
              <h2
              class="text-center"
                data-aos="fade-up"
                data-aos-delay="5"
                data-aos-duration="1000"
                data-aos-easing="ease-in-out" >
                Who We Are  <br/>
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

    <aside class="bd-aside sticky-xl-top text-muted align-self-end justify-content-end mb-3 mb-xl-5 float-end">
      <h2 class="h6 pb-3 mb-4 border-bottom">On this page</h2>
      <nav class="small" id="toc">
        <ul class="list-unstyled">
          <li class="my-2">
            <button class="btn d-inline-flex align-items-center collapsed border-0" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#contents-collapse" aria-controls="contents-collapse">Contents</button>
            <ul class="list-unstyled ps-3 collapse" id="contents-collapse">
              <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#about">About</a></li>
              <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#artwork">Artwork</a></li>
              <li><a class="d-inline-flex align-items-center rounded text-decoration-none" href="#gallery">Gallery</a></li>
            </ul>
          </li>
        </ul>
      </nav>
    </aside>


   <div class="container"> <!-- main content wrapper -- container -->
      <section id="main" class="container">
            <div class="page-header">
              <p>
                <!-- <i class="fas fa-long-arrow-alt-left"></i>
                 <a href="./about.html"> OffiVenues</a> -->
              </p>
            
              <h2> Kelvingrove Art Gallery and Museum	</h2>
              <p >  Open to the public	</p>
            </div>
        </section>

      <section class="module page-header-picture">
            <div class="row">
            <figure class="d-flex justify-content-center flex-column">
                    <img src="./assets/images/gallery1.jpg"
                    alt="Kelvingrove Art Gallery and Museum"
                    id="about-photo"
                    class="mt-4 mb-4"
                    />
                    <figcaption>Kelvingrove Art Gallery and Museum</figcaption>
                      <p class="caption">Photo credit:  Culture and Sport Glasgow (Glasgow Museums)</p>
                  </figure>
          </div>
      </section>

  <section class="description d-flex flex-row" id="about">
    <div class="description-wrap">
      <div class="description-main align-items-start">
      <p>Kelvingrove Art Gallery and Museum houses one of Europe’s great art collections. It is the most popular free-to-enter visitor attraction in Scotland and the most visited museum in the United Kingdom outside London.
  
  The purpose-built museum opened in 1901. The scope of the museum is wide ranging and, when Kelvingrove re-opened in July 2006 after a three-year restoration and redisplay project, it was organised into two halves: Life and Expression. The Life galleries represent natural history, human history and prehistory. The Expression galleries include the fine art collections. A significant part of the paintings collection comes from the bequest of Archibald McLellan.
  
  The important collection of French 19th century paintings includes works by Monet, Gauguin and Renoir. Further highlights are Rembrandt’s ‘Man in Armour’, ‘Christ and the Adulteress’ by Titian and Salvador Dali’s ‘Christ of St John of the Cross’. Scottish art includes paintings by the Scottish Colourists and the Glasgow Boys.</p>
            </div>

          <div class="description-aside ">
            <div class="align-items-end">
                    <div class="share-label">Share this page</div>
                    <ul class="menu menu-social">
                            <li class="facebook">
                  <a class="addthis_init addthis_button_facebook " href="#" title="Share on Facebook">Share on Facebook</a>
                </li>
                                        <li class="twitter">
                  <a class="addthis_init addthis_button_twitter" href="#" title="Share on Twitter">Share on Twitter</a>
                </li>
                        </ul>
                            <figure>
              <img src="https://d3d00swyhr67nd.cloudfront.net/_source/location_logos/GM_location_logo_1.gif" alt="Kelvingrove Art Gallery and Museum" />
            </figure>
                            <p><a href="http://www.glasgowlife.org.uk/museums/kelvingrove/Pages/default.aspx" class="link" target="_blank">Visit venue's website</a></p>
          
                    <p>
              Kelvingrove Art Gallery and Museum is managed by 
              <a href="https://artuk.org/visit/collection/glasgow-museums-568">
                Glasgow Museums						</a>
            </p>
                            <p>
              Glasgow Museums is an 
              <a href="https://artuk.org/for-collections">
                Art UK Founder Partner						</a>
            </p>
                </div>	
        
      </div>
   </div>	
  </section>


  <hr class="featurette-divider">


  <section class="artwork-venue d-flex flex-row" name="venue-info">
    <div class="d-flex">
      <div class="">
        <h1>
                  Kelvingrove Art Gallery and Museum							</h1>
                <h2>Argyle Street, Glasgow G3 8AG Scotland </h2>
        
                <p>museums@glasgowlife.org.uk</p>
              
                <p>0141 276 9599</p>
        
                <a href="http://www.glasgowlife.org.uk/museums/kelvingrove/Pages/default.aspx" class="link" target="_blank"><span>http://www.glasgowlife.org.uk/museums/kelvingrove/Pages/default.aspx</span></a>
        
        <p class="hours">Please remember to double-check the opening hours with the venue concerned before making a special visit</p>
  
        
      </div>
  
        <!-- <div class="map">
        <div id="map" data-map-venue='{"latitude":"55.8684124","longitude": "-4.2905449"}'></div>
        </div> -->

        </div>
  </section>



  <!-- TWITTER -->
  <section class="module feeds">
    <div class="wrap">	
      <div class="side">
        <h1 class="twitter">
        <a href="https://twitter.com/KelvingroveArt" class="link"><span>KelvingroveArt</span></a>
         </h1>
      </div>
      <ul class="">
              <li>
          <p class="date">
            
            04 June 2022				</p>
          <p class="tweet">What's On Scotland's Lascar Heritage Saturday 18th June, 9.30 - 4.00 <a class="ext-link" target="_blank" href="http://twitter.com/KelvinHall16">@KelvinHall16</a> <a class="ext-link" target="_blank" href="http://twitter.com/banglaglasgow">@banglaglasgow</a> and <a class="ext-link" target="_blank" href="http://twitter.com/GlasgowMuseums">@GlasgowMuseums</a> invite you to attend our first joint seminar exploring the lives South Asian seamen and their longstanding connections to Scotland. <a class="ext-link" target="_blank" href="https://t.co/VUGCLMUfiv">https://t.co/VUGCLMUfiv</a></p>			
        </li>
            </ul>
    </div>
  </section>




  <hr class="featurette-divider">
  



  <section class="artworks" id="artwork">
    <div class="artworks-wrap">
      <div class="side">
        <h1>Artworks</h1>
      </div>	


      <div class="artworks-carousel owl-carousel owl-theme">
        <div class="item" >
          <a href="https://artuk.org/discover/artworks/still-life-blue-and-brown-84112"></a>
              
           <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_2994-001.jpg" alt="Still Life, Blue and Brown" />
              
            <div class="info">
            <span class="title">Still Life, Blue and Brown</span>
               <span class="artist">
                William George Gillies (1898–1973)</span>
             </div>	

            </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/reflection-self-portrait-83383"></a>
              
          <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_2156-001.jpg" alt="Reflection (Self Portrait)" />
                  
          <div class="info">
          <span class="title">Reflection (Self Portrait)</span>
                        <span class="artist">
              Isabel Babianska Brodie (1920–2006)							</span>
                    </div>
          

        </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/baron-of-buchlyvie-horse-portrait-85823"></a>
              
                        <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_NR_26-001.jpg" alt="'Baron of Buchlyvie' Horse Portrait" />
                      
            <div class="info">
              <span class="title">'Baron of Buchlyvie' Horse Portrait</span>
                            <span class="artist">
                  Stuart Reid (1883–1971)							</span>
                        </div>	
  
        </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/the-port-of-algiers-85156"></a>
              
                        <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_3030-001.jpg" alt="The Port of Algiers" />
                      
            <div class="info">
              <span class="title">The Port of Algiers</span>
                            <span class="artist">
                  Albert Marquet (1875–1947)							</span>
                        </div>	
  
        </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/tea-cup-294153"></a>
              
          <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_S_472-001.jpg" alt="Tea Cup" />
        
<div class="info">
<span class="title">Tea Cup</span>
              <span class="artist">
    Siva Prasad Marar (b.1972)							</span>
          </div>	

        </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/homer-293753"></a>
              
          <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_S_101-001.jpg" alt="Homer" />
        
<div class="info">
<span class="title">Homer</span>
              <span class="artist">
    Hamo Thornycroft (1850–1925)							</span>
          </div>	

        </div>
        <div class="item">
          <a href="https://artuk.org/discover/artworks/venus-with-cupid-on-back-of-dolphin-293763"></a>
              
          <img src="https://d3d00swyhr67nd.cloudfront.net/w250/collection/GL/GM/GL_GM_S_12_1-001.jpg" alt="Venus with Cupid on Back of Dolphin" />
        
<div class="info">
<span class="title">Venus with Cupid on Back of Dolphin</span>
              <span class="artist">
    Ludwig Michael von Schwanthaler (1802–1848)							</span>
          </div>	
        </div>
        <div class="item">
          <li class="item more">
            <a href="https://artuk.org/discover/artworks/venue/kelvingrove-art-gallery-and-museum-3305">	
              <span>478 more</span>
            </a>
          </li>
        </div>
    
      </div>
    </div>
  </section>


  <section class="container" id="gallery">
    <div class="venue-carousel-wrap">
         <div class="side">

                    <span class="label">
                      Kelvingrove Art Gallery and Museum is part of
                    </span>
        
                    <h1>Glasgow <br/> 
                       Museums
                    </h1>
        
                    <p class="caption">Glasgow Museums artworks can also be found at these venues</p>
        
                  <a href="https://artuk.org/visit/collection/glasgow-museums-568" class="link"><span>More information</span></a>
        
                </div>

         <div class="container py-5">

      
          <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4" data-masonry='{"percentPosition": true }'  >
            
            <div class="col" >
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_3.jpg');
                  background-size: cover; 
                  background-position: center top;
                  background-repeat: no-repeat;"
                  onmouseover="mouseover()"
                  onmouseout="mouseout()"
                  id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>Earth</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>3d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('./assets/images/gallery6.jpeg');
                  background-size: cover; 
                  background-position: center top;
                  background-repeat: no-repeat;"
                  onmouseover="mouseover()"
                  onmouseout="mouseout()"
                  id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>Pakistan</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>4d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('./assets/images/gallery5.jpeg');
                  background-size: cover; 
                  background-position: center top;
                  background-repeat: no-repeat;"
                  onmouseover="mouseover()"
                  onmouseout="mouseout()"
                  id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>California</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>5d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
        
          
          <!-- <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5"> -->
            
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_9.jpg');
                  background-size: cover; 
                  background-position: center top;
                  background-repeat: no-repeat;"
                  onmouseover="mouseover()"
                  onmouseout="mouseout()"
                  id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>Earth</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>3d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_7.jpg');
                 background-size: cover; 
                  background-position: center top;
                  background-repeat: no-repeat;"
                  onmouseover="mouseover()"
                  onmouseout="mouseout()"
                  id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>Pakistan</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>4d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
      
            <div class="col">
              <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4 shadow-lg" 
              style="background-image: url('https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_10.jpg');"
              background-size: cover; 
              background-position: center top;
              background-repeat: no-repeat;"
              onmouseover="mouseover()"
              onmouseout="mouseout()"
              id="gfg"
              >
                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                  <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
                  <ul class="d-flex list-unstyled mt-auto">
                    <li class="me-auto">
                      <!-- <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white"> -->
                    </li>
                    <li class="d-flex align-items-center me-3">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg>
                      <small>California</small>
                    </li>
                    <li class="d-flex align-items-center">
                      <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg>
                      <small>5d</small>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          <!-- </div> -->
        </div>
        </div>
      </div>
</section >
        
        
        <!-- <div class="carousel standard" data-carousel="" data-type="standard">
          <a class="prev" title="Previous"></a>
          <ul>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/gallery-of-modern-art-goma-3307">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_3.jpg" alt="Gallery of Modern Art (GoMA)" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/gallery-of-modern-art-goma-3307" class="title">Gallery of Modern Art (GoMA)</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/glasgow-museums-resource-centre-gmrc-3306">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_2.jpg" alt="Glasgow Museums Resource Centre (GMRC)" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/glasgow-museums-resource-centre-gmrc-3306" class="title">Glasgow Museums Resource Centre (GMRC)</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/kelvin-hall-stores-7842">
                                        <img src="https://artuk.org/skins/artuk/img/placeholder-w250.png">
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/kelvin-hall-stores-7842" class="title">Kelvin Hall Stores</a>
                                      <p>Glasgow</p>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/kelvingrove-art-gallery-and-museum-3305">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_1.jpg" alt="Kelvingrove Art Gallery and Museum" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/kelvingrove-art-gallery-and-museum-3305" class="title">Kelvingrove Art Gallery and Museum</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/peoples-palace-and-winter-gardens-3309">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_5.jpg" alt="People’s Palace and Winter Gardens" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/peoples-palace-and-winter-gardens-3309" class="title">People’s Palace and Winter Gardens</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/pollok-house-3310">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GL_GM_location_image_6.jpg" alt="Pollok House" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/pollok-house-3310" class="title">Pollok House</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/provands-lordship-3311">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_7.jpg" alt="Provand’s Lordship" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/provands-lordship-3311" class="title">Provand’s Lordship</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/riverside-museum-3308">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_4.jpg" alt="Riverside Museum" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/riverside-museum-3308" class="title">Riverside Museum</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/scotland-street-school-museum-3312">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_8.jpg" alt="Scotland Street School Museum" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/scotland-street-school-museum-3312" class="title">Scotland Street School Museum</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/st-mungo-museum-of-religious-life-and-art-3313">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_9.jpg" alt="St Mungo Museum of Religious Life and Art" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/st-mungo-museum-of-religious-life-and-art-3313" class="title">St Mungo Museum of Religious Life and Art</a>
                                    </div>
              </li>
                            <li data-width="275" style="width:275px;" class="item">
                <a href="https://artuk.org/visit/venues/the-burrell-collection-3314">
                                        <img src="https://d3d00swyhr67nd.cloudfront.net/w550/GM_location_image_10.jpg" alt="The Burrell Collection" />
                                    </a>
                <div class="caption">
                  <a href="https://artuk.org/visit/venues/the-burrell-collection-3314" class="title">The Burrell Collection</a>
                                    </div>
              </li>
            
            
          </ul>
          <a class="next" title="Next"></a>
        </div> -->
    </div>

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


<script>

  var owl = $('.owl-carousel');
  owl.Defaults = {
    autoHeight: false,
    autoHeightClass: 'owl-height'
  };

  owl.owlCarousel({
      loop:true,
      nav:true,
      margin:10,
      autoHeight:true,
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
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

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