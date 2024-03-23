<?php
session_start();
include('dashboard/root/db.php');

$currentUrl = $_SERVER['REQUEST_URI'];
$pathParts = explode('/', $currentUrl);
// Get the third element (index 2) after splitting the path
$thirdWord = isset($pathParts[3]) ? $pathParts[3] : '';
$category= $thirdWord;
$table = str_replace('-', '_', $thirdWord);
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
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/properties.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- lordicon -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>
</head>
<style>
    .nav-link.properties{
    color: #ea4425 !important;
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
                    <a class="nav-link" href="<?php echo BASE_URL; ?>about">About</a>
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
                    <a class="nav-link" href="<?php echo BASE_URL; ?>contact-us">Contact</a>
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

<!-- sort bar -->   <!-- now the sortbar display none -->
<div class="search_wrapper search_wr_1     with_search_on_end  with_search_form_float " id="search_wrapper" data-postid="18642" style="display: none;">

  <div id="search_wrapper_color"></div>
  <div class="adv-search-1 " id="adv-search-1">
      <div id="adv-search-header-1"> Advanced Search</div>
      <form role="search" method="get" id="adv_search_form" action="https://www.wayanadlinks.com/advanced-search/">


          <div class="adv1-holder">
              <div class="col-md-3 areas">
                  <div class="dropdown form-control ">
                      <div data-toggle="dropdown" id="advanced_area" class=" filter_menu_trigger  " xxmaca cacaall areas data-value="all">areas
                          <span class="caret  caret_filter "></span>
                      </div> <input type="hidden" name="advanced_area" value="">
                      <ul id="adv-search-area" class="dropdown-menu filter_menu" role="menu" aria-labelledby="advanced_area">
                          <li role="presentation" data-value="all">Areas</li>
                          <li role="presentation" data-value="4th-mile" data-parentcity="">4th Mile</li>
                          <li role="presentation" data-value="ambalavayal" data-parentcity="kalpetta">Ambalavayal</li>
                          <li role="presentation" data-value="arivayal" data-parentcity="kalpetta">Arivayal</li>
                          <li role="presentation" data-value="cheeral" data-parentcity="">Cheeral</li>
                          <li role="presentation" data-value="chethalayam" data-parentcity="">Chethalayam</li>
                          <li role="presentation" data-value="dwaraka" data-parentcity="">Dwaraka</li>
                          <li role="presentation" data-value="edapetty" data-parentcity="">Edapetty</li>
                          <li role="presentation" data-value="irulam" data-parentcity="">Irulam</li>
                          <li role="presentation" data-value="kakkavayal" data-parentcity="kalpetta">Kakkavayal</li>
                          <li role="presentation" data-value="kalpetta" data-parentcity="kalpetta">Kalpetta</li>
                          <li role="presentation" data-value="kaniyampatta" data-parentcity="kalpetta">Kaniyampatta</li>
                          <li role="presentation" data-value="karapuzha" data-parentcity="kalpetta">Karapuzha</li>
                          <li role="presentation" data-value="kattikulam" data-parentcity="kalpetta">Kattikulam</li>
                          <li role="presentation" data-value="kenichira" data-parentcity="wayanad">Kenichira</li>
                          <li role="presentation" data-value="kottathara" data-parentcity="kalpetta">Kottathara</li>
                          <li role="presentation" data-value="mananthavady" data-parentcity="kalpetta">Mananthavady</li>
                          <li role="presentation" data-value="meenangadi" data-parentcity="kalpetta">Meenangadi</li>
                          <li role="presentation" data-value="meppady" data-parentcity="kalpetta">Meppady</li>
                          <li role="presentation" data-value="muttil" data-parentcity="">Muttil</li>
                          <li role="presentation" data-value="nadavayal" data-parentcity="kalpetta">Nadavayal</li>
                          <li role="presentation" data-value="padinjarathara" data-parentcity="">Padinjarathara</li>
                          <li role="presentation" data-value="panamaram" data-parentcity="wayanad">Panamaram</li>
                          <li role="presentation" data-value="perya" data-parentcity="">Perya</li>
                          <li role="presentation" data-value="pozhuthana" data-parentcity="kalpetta">Pozhuthana</li>
                          <li role="presentation" data-value="pulpally" data-parentcity="wayanad">Pulpally</li>
                          <li role="presentation" data-value="sulthan-bathery" data-parentcity="kalpetta">Sulthan Bathery</li>
                          <li role="presentation" data-value="vakeri" data-parentcity=""> - Vakeri</li>
                          <li role="presentation" data-value="tavinjal" data-parentcity="kalpetta">Tavinjal</li>
                          <li role="presentation" data-value="thirunelli" data-parentcity="">Thirunelli</li>
                          <li role="presentation" data-value="vaduvanchal" data-parentcity="kalpetta">Vaduvanchal</li>
                          <li role="presentation" data-value="valad" data-parentcity="">Valad</li>
                          <li role="presentation" data-value="varadoor" data-parentcity="">Varadoor</li>
                          <li role="presentation" data-value="vythiri" data-parentcity="kalpetta">Vythiri</li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 categories">
                  <div class="dropdown form-control ">
                      <div data-toggle="dropdown" id="adv_categ" class=" filter_menu_trigger  " xxmaca cacaall Categories data-value="all">Categories
                          <span class="caret  caret_filter "></span>
                      </div> <input type="hidden" name="filter_search_type[]" value="">
                      <ul id="categlist" class="dropdown-menu filter_menu" role="menu" aria-labelledby="adv_categ">
                          <li role="presentation" data-value="all">Categories</li>
                          <li role="presentation" data-value="houses-villas">Houses / Villas</li>
                          <li role="presentation" data-value="lands">Lands</li>
                          <li role="presentation" data-value="rubber-plots">Rubber Plots</li>
                          <li role="presentation" data-value="small-plots">Small Plots</li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-3 none"></div>
              <div class="col-md-3 none"></div>
              <div class="col-md-3 Location"><input type="text" id="location" name="location" placeholder="Location" value="" class="advanced_select form-control"></div>
              <div class="col-md-3 Village"><input type="text" id="village" name="village" placeholder="Village" value="" class="advanced_select form-control"></div>
              <div class="col-md-6 property_price">
                  <div class="adv_search_slider">
                      <p>
                          <label for="amount">Price range:</label>
                          <span id="amount" class="wpresidence_slider_price">₹ 0 to ₹ 150,000,000</span>
                      </p>
                      <div id="slider_price"></div>
                      <input type="hidden" id="price_low" name="price_low" value="0" />
                      <input type="hidden" id="price_max" name="price_max" value="150000000" />
                  </div>
              </div>
          </div>

          <input name="submit" type="submit" class="wpresidence_button" id="advanced_submit_2" value="SEARCH PROPERTIES">


          <div id="results">
              <div class="results_header">
                  We found <span id="results_no">0</span> results.
                  <span id="preview_view_all">View results</span>

              </div>
              <div id="results_wrapper">
              </div>

              <input type="hidden" id="wpestate_regular_search_nonce" name="wpestate_regular_search_nonce" value="d12d9067cd" /><input type="hidden" name="_wp_http_referer" value="/" /></div>

      </form>
      <div style="clear:both;"></div>

  </div>

</div>
<!-- sort bar END -->

<section class="section-2 cards">
    <div class="container">
        <div class="row"> 

        <?php
              $sql ="SELECT * FROM  $table ORDER BY id DESC";
              $result =$mysqli->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                $imageFilenames = explode(',', $row['images']);
                $firstImage = trim($imageFilenames[0]);
                $baseurl= BASE_URL;
                $imagePath = "$baseurl/dashboard/gallery/$table/" . $firstImage;
              ?>

            <div class="col-md-4 col-lg-3 col-8 ">
                <div class="card" onclick="window.location.href='<?php echo $table; ?>/<?php echo $row['url']; ?>'">
                  <div class="img-div"><img src="<?php echo $imagePath; ?>" alt=""> <div class="place"><i class="fa-solid fa-location-dot"></i> Wayanad</div></div>
                  <div class="card-body">
                    <div class="popertie-name"><?php echo $row['pname']; ?></div>
                    <div class="price"><?php echo $row['price']; ?></div>
                    <p class="description">
                      3 plots for sale each plot 15 cents, location sulthan bathery kenichira pulpally road asking price 1.50 per cent, negotiable
                    </p>
                    <a href="whatsapp://send?text=Check out this link: <?php echo $table; ?>/<?php echo $row['url']; ?>" target="_blank" rel="noopener noreferrer" class="share"><lord-icon
                      src="https://cdn.lordicon.com/boyoxams.json"
                      trigger="hover"
                      colors="primary:#9f2610"
                      style="width:90%;height:90%">
                  </lord-icon></a>
                  </div>
                  <div class="card-footer">
                    <div class="name"><?php echo $row['name']; ?></div>
                    <div class="buttons">
                      <a href="tel:<?php echo $row['phone']; ?>" class="call">Call Now</a>
                    </div>
                  </div>
                </div>
            </div>
            <?php 
                }
            }?>

            
            
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
                  <a href="home" class="c-link">Home</a>
                </li>

                <li>
                  <a href="about" class="c-link">About Us</a>
                </li>

                <li>
                  <a href="contact" class="c-link">Contact</a>
                </li>
              </ul>
            </nav>

          </div>

          <div class="layout_item w-25">
            <nav class="c-nav-tool">
              <h4 class="c-nav-tool_title">Properties</h4>
              <ul class="c-nav-tool_list">

                <li class="c-nav-tool_item">
                  <a href="/pages/shipping-returns" class="c-link">Villa</a>
                </li>

                <li class="c-nav-tool_item">
                  <a href="/pages/help" class="c-link">Appartment</a>
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
<script src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
  <!-- call button and whatsapp -->
  <a class="wts-icn" href="https:/wa.me:9544287507">
    <i class="fa-brands fa-whatsapp" style="color: #ffffff;"></i>
  </a>
  <a class="cal-icn" href="tel:9544287507">
    <i class="fa-solid fa-phone" style="color: #ffffff;"></i>
  </a>
    <!-- bootstrap 5 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>