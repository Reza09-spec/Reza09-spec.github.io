<!-- Bootstrap -->
  <link rel="stylesheet" href="../../plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="../../plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="../../plugins/slick/slick.css">
  <link rel="stylesheet" href="../../plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="../../plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="../../css/style.css">

  <link rel="icon" type="image/png" href="../../images/favicon.png">
<?php 
include '../../inc/connection.php';
?>
<body>

<div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">ITS Tower Niffaro Park 6th Floor Unit 10, South Jakarta - Indonesia</p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="#">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="#">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="#">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="#">
                          <span class="social-icon"><i class="fab fa-telegram"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-one">
  <div class="bg-white">
    <div class="container">
      <div class="logo-area">
          <div class="row align-items-center">
            <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">
                <a class="d-block" href="https://lgscert.com/" target="_blank">
                  <img loading="lazy" src="../../images/logo.png" alt="Constra">
                </a>
            </div><!-- logo end -->
  
            <div class="col-lg-9 header-right">
                <ul class="top-info-box">
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                          <p class="info-box-title">Email Us</p>
                          <p class="info-box-subtitle">arydaffadaffi@yahoo.com</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <a class="d-block" href="https://abm-sc.org/" target="_blank">
                          <img loading="lazy" src="../../images/logo-abmsc.png" alt="ABMSC Accreditation">
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <a class="d-block" href="https://thecpd.group/" target="_blank">
                          <img loading="lazy" src="../../images/logo-cpd.png" alt="The CPD Accreditation">
                        </a>
                      </div>
                    </div>
                  </li>
                  <li class="header-get-a-quote">
                    <a class="btn btn-primary" href="?page=contact">Get A Quote</a>
                  </li>
                </ul><!-- Ul end -->
            </div><!-- header right end -->
          </div><!-- logo area end -->
  
      </div><!-- Row end -->
    </div><!-- Container end -->
  </div>

  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-dark p-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                    <?php 
                      @$page  = $_GET['page'];
                    ?>
                    <ul class="nav navbar-nav mr-auto">

                      <li <?php if ($page == "home") { ?> class="nav-item active" <?php } ?>><a class="nav-link" href="../../?page=home">Home</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=about">About Us</a></li>
                            <li><a href="?page=team">Our Team</a></li>
                            <li><a href="?page=pricing">Pricing</a></li>
                          </ul>
                      </li>
              
                      <li <?php if ($page == "projects") { ?> class="nav-item active" <?php } ?>><a class="nav-link" href="?page=projects">Portfolio</a></li>

                      <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="?page=services">ISO Training</a></li>
                            <li><a href="?page=other-services">Other Training & Consultant</a></li>
                          </ul>
                      </li>
              
                      <li <?php if ($page == "news") { ?> class="nav-item active" <?php } ?>><a class="nav-link" href="?page=news">News</a></li>
              
                      <li <?php if ($page == "contact") { ?> class="nav-item active" <?php } ?>><a class="nav-link" href="?page=contact">Contact</a></li>
                    </ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->

        <div class="nav-search">
          <span id="search"><i class="fa fa-search"></i></span>
        </div><!-- Search end -->

        <div class="search-block" style="display: none;">
          <label for="search-field" class="w-100 mb-0">
            <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
          </label>
          <span class="search-close">&times;</span>
        </div><!-- Site search end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header> 
<!--/ Header end -->

<div id="banner-area" class="banner-area" style="background-image:url(../../images/banner/banner1.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Check Certificate</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="?page=home">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Check Certificate</li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 

<section id="main-container" class="main-container">
  <div class="container">
    <div class="row">

      <div class="col-md-12">
        <h3 class="column-title">Input your certificate number here</h3>   
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" role="form" name="pencarian" id="pencarian">
          <div class="error-container"></div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <input class="form-control form-control-search" name="search" id="search" placeholder="Certificate Number" type="text" required>
              </div>
            </div>
          </div>
          <div class="text-center"><br>
            <input type="submit" class="btn btn-primary solid blank" name="submit" id="submit" value="Search">
          </div> 
        </form>
      </div>

      <div class="col-md-12">
        <div class="table-responsive">
          <?php
            if ((isset($_POST['submit'])) AND ($_POST['search'] <> "")) {
              $search = $_POST['search'];
              $sql = mysqli_query($koneksi,"SELECT * FROM tb_client WHERE certificate_code LIKE '%$search%'") or die(mysqli_error());
              $jumlah = mysqli_num_rows($sql);        
          ?>
            <table class="table">
              <thead style=" background-color: #031631; color: white;"> 
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Certificate Code</th>
                  <th scope="col">Training Name</th>
                  <th scope="col">Participant Name</th>
                  <th scope="col">Date</th>
                  <th scope="col">Accreditation Name</th>
                  <th scope="col">Agency Name</th>  
                </tr>
              </thead>
              <tbody>
                <?php
                  if ($jumlah >= 1) {
                    echo '<h3 class="column-title-small">Data Found</h3>';
                    $nomer=1;
                    while ($hasil = @mysqli_fetch_array ($sql)) 
                    {
                ?>
                <tr>
                  <td scope="row"><?php echo "$nomer"; ?></td>
                  <td><?php echo $hasil['certificate_code'] ;?></td>
                  <td><?php echo $hasil['training_name'] ;?></td>
                  <td><?php echo $hasil['participant_name'] ;?></td>
                  <td><?php echo $hasil['date'] ;?></td>
                  <td><?php echo $hasil['acc_name'] ;?></td>
                  <td><?php echo $hasil['agency_name'] ;?></td>
                </tr>
              </tbody>
            <?php
                   $nomer++;
                   };
            }
            else {
              echo '<h3 class="column-title-small">Data Not Found!</h3>';
            }
            ?>
            </table>
            <?php
            }
            ?>
        </div><!-- Col end -->
      </div>
    </div><!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

<footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" class="footer-logo" src="../../images/footer-logo.png" alt="Constra">
            <p>LGS Certification as Trustee for The Leading Global Standards is the business standards company that helps organizations all over the world.</p>
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours">
              We work 6 days a week. Call us if you have an emergency, with our Hotline and Contact form.
              <br><br> Monday - Friday : <span class="text-right">08:00 AM ‐ 04:00 PM </span>
              <br> Saturday : <span class="text-right">08.00 AM - 03.00 PM</span>
              <br> Sunday and holidays : <span class="text-right">Closed</span>
            </div>
          </div><!-- Col end -->

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
            <h3 class="widget-title">Services</h3>
            <ul class="list-arrow">
              <li><a href="?page=services">ISO Training</a></li>
              <li><a href="?page=other-services">Other Training & Consultant</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <div class="copyright-info">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>, Designed by <a href="https://themefisher.com">Themefisher</a></span>
            </div>
          </div>

          <div class="col-md-6">
            <div class="footer-menu text-center text-md-right">
              <ul class="list-unstyled mb-0">
                <li><a href="?page=about">About</a></li>
                <li><a href="?page=team">Our Team</a></li>
                <li><a href="?page=news">Blog</a></li>
                <li><a href="?page=pricing">Pricing</a></li>
              </ul>
            </div>
          </div>
        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->
</body>

  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="../../plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="../../plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="../../plugins/slick/slick.min.js"></script>
  <script src="../../plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="../../plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="../../plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="../../plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="../../js/script.js"></script>