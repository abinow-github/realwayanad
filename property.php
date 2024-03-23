<?php
session_start();
include('dashboard/root/db.php');
$url = $_GET['url'];
// Retrieve the value from the session
if (isset($_SESSION['table'])) {
    $table = $_SESSION['table'];
} else {
    $table = ''; // Set a default value if the session variable is not set
}
$currentUrl = $_SERVER['REQUEST_URI'];
$pathParts = explode('/', $currentUrl);
// Get the third element (index 2) after splitting the path
$thirdWord = isset($pathParts[3]) ? $pathParts[3] : '';
$category= $thirdWord;
$table = str_replace('-', '_', $thirdWord);

$query = $mysqli->prepare('SELECT * FROM '.$table.' WHERE `url`= ?');
$query->bind_param('s', $url);
$query->execute();
$query_result = $query->get_result();

$query_data = $query_result->fetch_assoc();

// Get all URLs from your database based on your logic
$allUrlsQuery = $mysqli->prepare('SELECT url FROM '.$table);
$allUrlsQuery->execute();
$allUrlsResult = $allUrlsQuery->get_result();
$allUrls = [];
while ($row = $allUrlsResult->fetch_assoc()) {
    $allUrls[] = $row['url'];
}

// Find the index of the current URL in the array
$currentUrlIndex = array_search($url, $allUrls);

// Calculate the index of the next URL considering the looping
$nextUrlIndex = ($currentUrlIndex + 1) % count($allUrls);
$prevUrlIndex = ($currentUrlIndex - 1 + count($allUrls)) % count($allUrls);


// Get the next URL
$nextUrl = $allUrls[$nextUrlIndex];
$prevUrl = $allUrls[$prevUrlIndex];

// Store the next URL in the session
$_SESSION['next_url'] = $nextUrl;
$_SESSION['prev_url'] = $prevUrl;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realwayanad</title>
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo BASE_URL; ?>/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo BASE_URL; ?>/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo BASE_URL; ?>/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo BASE_URL; ?>/favicon/site.webmanifest">
    <link rel="mask-icon" href="<?php echo BASE_URL; ?>/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/property.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css'>

<!-- lightbox -->
<link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/lightbox/simple-lightbox.css" />

</head>
<style>
    .nav-link.properties{
    color: #ea4425 !important;
  }
  .contact-part{
    display: flex;
    flex-direction: column;
    position: fixed;
    right: 100px;
    box-shadow: 0px 0px 2px 2px #3dd68475;
    padding:  20px;
    h2{
      font-size: 30px;
      font-weight: bold;
      text-align: center;
      padding-bottom: 20px;
    }
    .name,.call,.mail{
      font-size: 18px;
      font-weight: bold;
      text-decoration: none;
      padding: 7px 0;
      border-bottom: 1px solid rgba(43, 41, 41, 0.475);
      display: flex;
      align-items: center;
    }
}
.icon-hover:hover + lord-icon {
    /* Add styles for the hovered lord-icon here */
    /* Example: Change the color when hovered */
    color: red;
}
@media screen and (max-width:765px) {
  .contact-part{
    position: relative;
    right: auto;
    width: 90%;
    left: auto;
    margin: auto;
    margin-top: 30px;
  }
}
</style>
  
<body>
    <header id="hdr">
        <!-- navbar -->
        <nav class="navbar navbar-expand-lg navbar-light scrolled">
            <div class="container-fluid">
              <a class="navbar-brand" href="<?php echo BASE_URL; ?>/home"><img src="<?php echo BASE_URL; ?>/assets/img/logo/Realwayanad-LOGO.png" alt="" srcset=""></a>
              <button class="navbar-toggler" id="navbar-toggler" type="button" data-bs-toggle="collapse"  onclick="showNav()">
                <span class="line1"></span>
                <span class="line2"></span>
                <span class="line3"></span>
                <span class="line4"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link home" aria-current="page" href="<?php echo BASE_URL; ?>/home">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/about">About</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle properties" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Properties
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/properties/villa">Villa</a></li>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/properties/small-plot">Small Plot</a></li>
                      <li><a class="dropdown-item" href="<?php echo BASE_URL; ?>/properties/house">House</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL; ?>/contact-us">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <!-- navbar END -->
        <!-- banner -->
        <div class="banner">
        </div>
        <!-- banner END -->

    </header>
    <script src="<?php echo BASE_URL; ?>/assets/js/footer.js"></script>


<section class="section-4 property">
    <div class="container">
        <div class="row">

          <div class="col-md-8">

            <!-- carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="1500" ><!--  data-ride="carousel" data-interval="1500" -->
      <!-- Indicators -->
      
    
      <!-- Wrapper for Slides -->
      <div class="carousel-inner gallery">

        
        <!-- <a class="item active" href="<?php echo BASE_URL; ?>/dashboard/gallery/<?php echo $table ?>/<?php echo $query_data['images'] ?> ">
          <div class="fill">
            <img src="<?php echo BASE_URL; ?>/dashboard/gallery/<?php echo $table ?>/<?php echo $query_data['images'] ?>">
          </div>
        </a> -->

        <?php
            $images = explode(',', $query_data['images']);
             foreach ($images as $image) {
            ?>
          <a class="item <?php echo ($image === reset($images)) ? 'active' : ''; ?>" href="<?php echo BASE_URL; ?>/dashboard/gallery/<?php echo $table ?>/<?php echo $image; ?>">
           <div class="fill">
            <img src="<?php echo BASE_URL; ?>/dashboard/gallery/<?php echo $table ?>/<?php echo $image; ?>">
            </div>
          </a>
           <?php
             }
             ?>


      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <span class="icon-prev"></span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <span class="icon-next"></span>
      </a>
    
    </div>
<!--.................... carousel END ...........................-->
<div class="title-div">
  <h1><?php echo $query_data['pname']?></h1>
</div>
<div class="price"><?php echo $query_data['price']?></div>
<div class="place"><i class="fa-solid fa-location-dot"></i> <?php echo $query_data['place']?></div>
<div class="content">
<?php echo $query_data['txt']?>
</div>
          </div>



          <div class="col-md-3 contact-part">
            <h2>Contact Information</h2>
            <div class="name"><lord-icon
              src="https://cdn.lordicon.com/hrjifpbq.json"
              trigger="hover"
              style="height:20px">
          </lord-icon><?php echo $query_data['phone']?></div>
            <a href="tel:<?php echo $query_data['phone']?>" class="call"><lord-icon
              src="https://cdn.lordicon.com/srsgifqc.json"
              trigger="hover"
              style="height:20px">
          </lord-icon> <?php echo $query_data['phone']?></a>
            <a href="mail.to:<?php echo $query_data['mail']?>" class="mail icon-hover"><lord-icon
              src="https://cdn.lordicon.com/xtzvywzp.json"
              trigger="hover"
              style="height:20px">
          </lord-icon><?php echo $query_data['mail']?></a>
          </div>

        </div>
    </div>
</section>



<footer class="footer">
<div class="container">
    <div class="footer_inner">
      <div class="c-footer">
        <div class="layout">
          <div class="layout_item txt">
            <div class="newsletter">
              <h3 class="newsletter_title col-md-8">Invest in Tomorrow, Live for Today  Your Real Estate Journey Starts Here.</h3>
            </div>
          </div>

          <div class="layout_item w-25">
            <nav class="c-nav-tool">
              <h4 class="c-nav-tool_title">Menu</h4>
              <ul class="c-nav-tool_list">
                <li>
                  <a href="<?php echo BASE_URL; ?>/home" class="c-link">Home</a>
                </li>

                <li>
                  <a href="<?php echo BASE_URL; ?>/about" class="c-link">About Us</a>
                </li>

                <li>
                  <a href="<?php echo BASE_URL; ?>/contact" class="c-link">Contact</a>
                </li>
              </ul>
            </nav>

          </div>

          <div class="layout_item w-25">
            <nav class="c-nav-tool">
              <h4 class="c-nav-tool_title">Properties</h4>
              <ul class="c-nav-tool_list">

                <li class="c-nav-tool_item">
                  <a href="<?php echo BASE_URL; ?>/properties/villa" class="c-link">Villa</a>
                </li>

                <li class="c-nav-tool_item">
                  <a href="<?php echo BASE_URL; ?>/properties/small-plot" class="c-link">small plot</a>
                </li>

                <li class="c-nav-tool_item">
                  <a href="<?php echo BASE_URL; ?>/properties/house" class="c-link">house</a>
                </li>

                

                
              </ul>
            </nav>

          </div>
          <div class="layout_item w-25">
            <nav class="c-nav-tool">
              <h4 class="c-nav-tool_title">Contact</h4>
              <ul class="c-nav-tool_list">

                <li class="c-nav-tool_item">
                  <a  class="c-link">nivedhya arcade,near noornal church, Ooty road ,chunkam sulthan bathery - 673592</a>
                </li>

                <li class="c-nav-tool_item">
                  <a href="tel:9544287507" class="c-link">9544287507</a>
                </li>

                

                
              </ul>
            </nav>

          </div>
        </div>
        <div class="layout c-2">
          <div class="layout_item w-50">
            <div class="footer_copyright">
              <!-- <p> Powerd by iberrtech</p> -->
            </div>
          </div>
          <div class="layout_item w-25">
            <ul class="flex">
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M12 2C6.477 2 2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.879V14.89h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.989C18.343 21.129 22 16.99 22 12c0-5.523-4.477-10-10-10z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="32" height="32">
                    <path fill="none" d="M0 0h24v24H0z" />
                    <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
          <div class="layout_item w-25" style="display:flex;justify-content: end;align-items: center;">
            <a href="#hdr">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="36" height="36">
              <path fill="none" d="M0 0h24v24H0z" />
              <path d="M12 2c5.52 0 10 4.48 10 10s-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2zm1 10h3l-4-4-4 4h3v4h2v-4z" />
            </svg>
          </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
</footer>


<!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Then include Slick slider script -->
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script src="<?php echo BASE_URL; ?>/assets/js/property.js"></script>
   <!-- lightbox -->
<script src="<?php echo BASE_URL; ?>/assets/lightbox/simple-lightbox.js"></script>
<script>
      document.addEventListener('DOMContentLoaded', function () {
        var $gallery = new SimpleLightbox('.gallery a', {});
    });
</script>
<!-- Code injected by live-server -->
<script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
        (function() {
            function refreshCSS() {
                var sheets = [].slice.call(document.getElementsByTagName("link"));
                var head = document.getElementsByTagName("head")[0];
                for (var i = 0; i < sheets.length; ++i) {
                    var elem = sheets[i];
                    var parent = elem.parentElement || head;
                    parent.removeChild(elem);
                    var rel = elem.rel;
                    if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
                        var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
                        elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
                    }
                    parent.appendChild(elem);
                }
            }
            var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
            var address = protocol + window.location.host + window.location.pathname + '/ws';
            var socket = new WebSocket(address);
            socket.onmessage = function(msg) {
                if (msg.data == 'reload') window.location.reload();
                else if (msg.data == 'refreshcss') refreshCSS();
            };
            if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
                console.log('Live reload enabled.');
                sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
            }
        })();
    } else {
        console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
    // ]]>
</script>
  <!-- call button and whatsapp -->
  <a class="wts-icn" href="https:/wa.me:9544287507">
    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
  </a>
  <a class="cal-icn" href="tel:9544287507">
    <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
  </a>
   
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>