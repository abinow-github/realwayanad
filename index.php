<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>realwayanad</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- aos library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
</head>
<style>
  .nav-link.home{
    color: #ea4425 !important;
  }
</style>
<body>
    <header id="hdr">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home"><img src="assets/img/logo/Realwayanad-LOGO.png" alt="" srcset=""></a>
              <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse"  onclick="showNav()">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
                <span class="line4"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link home" aria-current="page" href="home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="about">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Properties
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="properties/villa">Villa</a></li>
                      <li><a class="dropdown-item" href="properties/small-plot">Small Plot</a></li>
                      <li><a class="dropdown-item" href="properties/house">House</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact-us">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- navbar END -->
        <!-- banner -->
        <div class="banner">
          <div class="container">
            <div class="caption-div">
              <h1>Wayanad: Your Land Oasis</h1>
              <h2>complete solution for properties</h2>
            </div>
          </div>
        </div>
        <!-- banner END -->

    </header>
    
<!-- ............ section-1 about us ............ -->
    <section class="section-1">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3 data-aos="fade-up" data-aos-duration="1000">
              Welcome to Real Wayanad, where your dream home is just a step away! Established in 2019, we are pleased to be a significant player in Wayanad's thriving real estate sector. As your trusted partner in property solutions, we stand out for our commitment to excellence, code of conduct, and customized service.
            </h3>
          </div>
        </div>
      </div>
      <img src="assets/img/about/about-bnr-1.jpg"  class="about-img" srcset="">
    </section>
<!-- ............ section-1 about us END ............ -->
    
<!-- ............ section-2 properties............ -->
<section class="section-2">
  <div class="container">
    <div class="row card-sliderr">
      <section class="section-1-2 scr-anime logo-sldr col-lg-12 mt-4">
        <section class="property-slider">

  
 

        <div class="slide">
          <div class="card" onclick="window.location.href='property'">
            <div class="img-div"><img src="test-img-4.jpg" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
            <div class="card-body">
              <div class="popertie-name">3 plots for sale</div>
              <div class="price">1.50/cent</div>
              <p class="description">
                3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
              </p>
              <a href="" class="share"><lord-icon
                src="https://cdn.lordicon.com/boyoxams.json"
                trigger="hover"
                style="width:90%;height:90%">
            </lord-icon></a>
            </div>
            <div class="card-footer">
              <div class="name">unknown</div>
              <div class="buttons">
                <a href="" class="call">Call Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" onclick="window.location.href='property'">
            <div class="img-div"><img src="test-img-5.jpg" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
            <div class="card-body">
              <div class="popertie-name">3 plots for sale</div>
              <div class="price">1.50/cent</div>
              <p class="description">
                3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
              </p>
              <a href="" class="share"><lord-icon
                src="https://cdn.lordicon.com/boyoxams.json"
                trigger="hover"
                style="width:90%;height:90%">
            </lord-icon></a>
            </div>
            <div class="card-footer">
              <div class="name">unknown</div>
              <div class="buttons">
                <a href="" class="call">Call Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" onclick="window.location.href='property'">
            <div class="img-div"><img src="test-img-4.jpg" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
            <div class="card-body">
              <div class="popertie-name">3 plots for sale</div>
              <div class="price">1.50/cent</div>
              <p class="description">
                3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
              </p>
              <a href="" class="share"><lord-icon
                src="https://cdn.lordicon.com/boyoxams.json"
                trigger="hover"
                style="width:90%;height:90%">
            </lord-icon></a>
            </div>
            <div class="card-footer">
              <div class="name">unknown</div>
              <div class="buttons">
                <a href="" class="call">Call Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" onclick="window.location.href='property'">
            <div class="img-div"><img src="test-img-3.jpg" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
            <div class="card-body">
              <div class="popertie-name">3 plots for sale</div>
              <div class="price">1.50/cent</div>
              <p class="description">
                3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
              </p>
              <a href="" class="share"><lord-icon
                src="https://cdn.lordicon.com/boyoxams.json"
                trigger="hover"
                style="width:90%;height:90%">
            </lord-icon></a>
            </div>
            <div class="card-footer">
              <div class="name">unknown</div>
              <div class="buttons">
                <a href="" class="call">Call Now</a>
              </div>
            </div>
          </div>
        </div>

        <div class="slide">
          <div class="card" onclick="window.location.href='property'">
            <div class="img-div"><img src="test-img-2.jpg" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
            <div class="card-body">
              <div class="popertie-name">3 plots for sale</div>
              <div class="price">1.50/cent</div>
              <p class="description">
                3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
              </p>
              <a href="" class="share"><lord-icon
                src="https://cdn.lordicon.com/boyoxams.json"
                trigger="hover"
                style="width:90%;height:90%">
            </lord-icon></a>
            </div>
            <div class="card-footer">
              <div class="name">unknown</div>
              <div class="buttons">
                <a href="" class="call">Call Now</a>
              </div>
            </div>
          </div>
        </div>
        

        
             </section>
    </section>
    </div>
  </div>
  <div class="dark-layer"></div>
</section>
<!-- ............ section-2 properties ............ -->
    
<!-- ............ section-3 features............ -->
    <section class="section-3">
<div class="container-fluid ">
        <div class="row">
          <div class="col-md-5">
            <div class="card">
              <div class="card-title">Local Expertise</div>
              <p class="card-cnt">Our team has extensive knowledge of the Wayanad real estate market, allowing us to provide you with relevant insights and guidance.</p>
            </div>
          </div>
        </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-title">Personalized Service</div>
            <p class="card-cnt">We believe in developing lasting relationships with our clients. Your complete satisfaction is our priority, and we go the extra mile to fulfill your needs.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-title">Diverse Property Portfolio</div>
            <p class="card-cnt">From charming cottages nestled in the hills to premium commercial spaces, we have an extensive range of properties designed for your unique needs.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-title">Transparency and Integrity</div>
            <p class="card-cnt">Trust is the foundation of our business. We value honesty and integrity in all of our dealings, ensuring that our clients have a seamless and trustworthy experience.</p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-5">
          <div class="card">
            <div class="card-title">Community Connection</div>
            <p class="card-cnt">Real Wayanad is about far more than simply transactions; it's about being an integral part of the Wayanad community. We dedicate ourselves to positively impacting the region's growth and development.</p>
          </div>
        </div>
      </div>

    </div>
    </section>
    <!-- aos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <script>
   AOS.init();
  </script>
<!-- ............ section-3 features ............ -->

<!-- footer -->
<footer class="footer" id="footer"> 
</footer>
<!-- foooter END -->

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Then include Slick slider script -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
       //////speciality slider
$(document).ready(function(){
    $('.property-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        dots: false,
        pauseOnHover: false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: 520,
            settings: {
                slidesToShow: 1
            }
        }]
    });
  });
    </script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/footer.js"></script>
    
  <!-- animate on card -->
  <script>
    testung
  </script>
    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>