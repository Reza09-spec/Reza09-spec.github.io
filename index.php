<!DOCTYPE php>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title>LGS CERT INTERNATIONAL ACADEMY</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
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
                  <img loading="lazy" src="images/logo.png" alt="Constra">
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
                          <img loading="lazy" src="images/logo-abmsc.png" alt="ABMSC Accreditation">
                        </a>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="info-box">
                      <div class="info-box-content">
                        <a class="d-block" href="https://thecpd.group/" target="_blank">
                          <img loading="lazy" src="images/logo-cpd.png" alt="The CPD Accreditation">
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

                      <li <?php if ($page == "home") { ?> class="nav-item active" <?php } ?>><a class="nav-link" href="?page=home">Home</a></li>

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

<!-- <?php
  // include 'inc/menu.php';
?> -->

<div class="banner-carousel banner-carousel-1 mb-0">
  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
    <div class="slider-content">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12 text-center">
                <h3 class="slide-sub-title" data-animation-in="slideInRight">LGS is a quick, flexible and professionally managed company</h3>
                <p data-animation-in="slideInLeft" data-duration-in="1.2">
                    <a href="?page=services" class="slider btn btn-primary">Our Services</a>
                    <a href="?page=contact" class="slider btn btn-primary border">Contact Now</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
    <div class="slider-content text-left">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="slideInLeft">We can to help embed excellence into the way people and products work</h3>
                <p data-animation-in="slideInRight">
                    <a href="?page=services" class="slider btn btn-primary border">Our Services</a>
                </p>
              </div>
          </div>
        </div>
    </div>
  </div>

  <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
    <div class="slider-content text-right">
        <div class="container h-100">
          <div class="row align-items-center h-100">
              <div class="col-md-12">
                <h3 class="slide-sub-title" data-animation-in="fadeIn">Improve performance, reduce risk and achieve sustainable growth</h3>
                <div data-animation-in="slideInLeft">
                    <a href="?page=contact" class="slider btn btn-primary" aria-label="contact-with-us">Get Free Quote</a>
                    <a href="?page=about" class="slider btn btn-primary border" aria-label="learn-more-about-us">Learn more</a>
                </div>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

<section class="call-to-action-box no-padding">
  <div class="container">
    <div class="action-style-box">
        <div class="row align-items-center">
          <div class="col-md-8 text-center text-md-left">
              <div class="call-to-action-text">
                <h3 class="action-title">Check your certificate here</h3>
              </div>
          </div><!-- Col end -->
          <div class="col-md-4 text-center text-md-right mt-3 mt-md-0">
              <div class="call-to-action-btn">
                <a class="btn btn-dark" href="pages/check-cert/check-cert.php">Check Certificate</a>
              </div>
          </div><!-- col end -->
        </div><!-- row end -->
    </div><!-- Action style box -->
  </div><!-- Container end -->
</section><!-- Action end -->

<section id="ts-features" class="ts-features">
  <div class="container">
    <div class="row">
        <div class="col-lg-6">
          <div class="ts-intro">
              <h2 class="into-title">About Us</h2>
              <h3 class="into-sub-title">Introduction</h3>
              <p>LGS Certification as Trustee for The Leading Global Standards is the business standards company that helps organizations all over the world make excellence in any purposes of organisation. We can to help embed excellence into the way people and products work.</p>
          </div><!-- Intro box end -->

          <div class="gap-20"></div>

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We've Repution for Excellence</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">We Build Partnerships</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->

          <div class="row">
              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">Guided by Commitment</h3>
                    </div>
                </div><!-- Service 1 end -->
              </div><!-- col end -->

              <div class="col-md-6">
                <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                    <div class="ts-service-box-content">
                      <h3 class="service-box-title">A Team of Professionals</h3>
                    </div>
                </div><!-- Service 2 end -->
              </div><!-- col end -->
          </div><!-- Content row 1 end -->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-4 mt-lg-0">
          <h3 class="into-sub-title">Our Values</h3>
          <p>LGS Certification as been delivering standards-based solutions to our customers. Operating through our experiences, we provide a list of comprehensive business solutions.</p>

          <div class="accordion accordion-group" id="our-values-accordion">
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          ISO Training
                      </button>
                    </h2>
                </div>
              
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                    <div class="card-body">
                      ISO training is beneficial for many parties ranging from practice or academics as well as for students who are entering self-development and preparing themselves in the world of work because there are several requirements for ISO ownership that are assessed in the recruitment process.
                    </div>
                </div>
              </div>
              <div class="card">
                <div class="card-header p-0 bg-transparent" id="headingTwo">
                    <h2 class="mb-0">
                      <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Other Training
                      </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                    <div class="card-body">
                      Training is defined as a variety of introductory efforts to develop workforce performance on the work they carry or something related to their work. This usually means making specific or specific changes in behavior, attitudes, skills, and knowledge. And for training to be effective, in training it must include a learning of experiences, training must be an organizational activity that is planned and designed in response to identified needs.
                    </div>
                </div>
              </div>
          </div>
          <!--/ Accordion end -->

        </div><!-- Col end -->
    </div><!-- Row end -->
  </div><!-- Container end -->
</section><!-- Feature are end -->

<section class="content">
  <div class="container">
    <div class="row">

        <div class="col-lg-6">
          <h3 class="column-title">Our Accreditation</h3>
          <div id="testimonial-slide" class="testimonial-slide">
              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      ABMSC is a non-governmental organization that provides accreditation services and training to public and private-sector organizations, serving the global marketplace. ABMSC is accreditation for training of LGSCERT from UK.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/logo-abmsc.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">ABMSC</h3>
                          <span class="quote-subtext">Accreditation Board Management <br> System Certification</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 1 end -->

              <div class="item">
                <div class="quote-item">
                    <span class="quote-text">
                      The CPD Group is made up from a wealth of expertise from academics, industry bodies, awarding organisations, employers and individual learners that share their valuable expertise with the World of CPD. The CPD Accreditation Group is accreditation for training of LGSCERT from UK.
                    </span>

                    <div class="quote-item-footer">
                      <img loading="lazy" class="testimonial-thumb" src="images/logo-cpd.png" alt="testimonial">
                      <div class="quote-item-info">
                          <h3 class="quote-author">CPD Accreditation</h3>
                          <span class="quote-subtext">The CPD Accreditation Group</span>
                      </div>
                    </div>
                </div><!-- Quote item end -->
              </div>
              <!--/ Item 2 end -->
          </div>
          <!--/ Testimonial carousel end-->
        </div><!-- Col end -->

        <div class="col-lg-6 mt-5 mt-lg-0">
          <h3 class="column-title">Our Partner</h3>
          <div class="row all-clients">
              <div class="col-sm-4 col-6">
                <figure class="clients-logo">
                    <a href="https://www.lintasmanagementsystem.com" target="_blank"><img loading="lazy" class="img-fluid" src="images/acc-partner/partner1.png" alt="clients-logo" /></a>
                </figure>
              </div><!-- Client 1 end -->    
          </div><!-- Clients row end -->
        </div><!-- Col end -->

    </div>
    <!--/ Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Content end -->

<section id="main-container" class="main-container pb-2">
  <div class="container">
    <div class="row text-center">
        <div class="col-12">
          <h2 class="section-title">We Are Specialists In</h2>
          <h3 class="section-sub-title">What We Do</h3>
        </div>
    </div>
    <!--/ Title row end -->
    <div class="row">
      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service01.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon01.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training ISO 9001:2015</h3>
                  <p>Quality Management System</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=iso-9001" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 1 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service02.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon02.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training ISO 14001:2015</h3>
                  <p>Environmental Management System</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=iso-14001" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 2 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service03.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon03.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training OHSAS 18001:2007</h3>
                  <p>Occupational Health and Safety Management Systems</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=ohsas-18001" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 3 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service04.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon04.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training ISO 45001:2018</h3>
                  <p>Occupational Health and Safety Management Systems</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=iso-45001" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service1 end -->
      </div><!-- Col 4 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service05.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon05.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training ISO 50001:2018</h3>
                  <p>Energy Management Systems</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=iso-50001" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service2 end -->
      </div><!-- Col 5 end -->

      <div class="col-lg-4 col-md-6 mb-5">
        <div class="ts-service-box">
            <div class="ts-service-image-wrapper">
              <img loading="lazy" class="w-100" src="images/services/service06.jpg" alt="service-image">
            </div>
            <div class="d-flex">
              <div class="ts-service-box-img">
                  <img loading="lazy" src="images/icon-image/service-icon06.png" alt="service-icon">
              </div>
              <div class="ts-service-info">
                  <h3 class="service-box-title">Training ISO 22000:2018</h3>
                  <p>Food Safety Management Systems</p>
                  <a class="learn-more d-inline-block" href="?page=services&action=iso-22000" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
              </div>
            </div>
        </div><!-- Service3 end -->
      </div><!-- Col 6 end -->

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="?page=services">View All Projects</a>
        </div>
      </div>
      
    </div>
  </div>
  <!--/ Container end -->
</section><!-- Service end -->

<section id="project-area" class="project-area solid-bg">
  <div class="container">
    <div class="row text-center">
      <div class="col-lg-12">
        <h2 class="section-title">Work of Excellence</h2>
        <h3 class="section-sub-title">Recent Projects</h3>
      </div>
    </div>
    <!--/ Title row end -->

    <div class="row">
      <div class="col-12">
        <div class="shuffle-btn-group">
          <label class="active" for="all">
            <input type="radio" name="shuffle-filter" id="all" value="all" checked="checked">Show All
          </label>
          <label for="iso-training">
            <input type="radio" name="shuffle-filter" id="iso-training" value="iso-training">ISO Training
          </label>
          <label for="other-training">
            <input type="radio" name="shuffle-filter" id="other-training" value="other-training">Other Training
          </label>
        </div><!-- project filter end -->


        <div class="row shuffle-wrapper">
          <div class="col-1 shuffle-sizer"></div>

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;other-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-smkk-pu-pr.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-smkk-pu-pr.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training SMKK</a>
                  </h3>
                  <p class="project-cat">PU-PR</p>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 1 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;iso-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-iso-9001.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-iso-9001.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training ISO 9001:2015</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 2 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;iso-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-iso-9001-2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-iso-9001-2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training ISO 9001:2015</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 3 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;iso-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-iso-9001-14001-45001.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-iso-9001-14001-45001.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training ISO 9001:2015, ISO 14001:2015 & ISO 45001:2018</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 4 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;iso-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-iso-9001-14001-45001-2.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-iso-9001-14001-45001-2.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training ISO 9001:2015, ISO 14001:2015 & ISO 45001:2018</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 5 end -->

          <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;iso-training&quot;]">
            <div class="project-img-container">
              <a class="gallery-popup" href="images/projects/project-iso-9001-14001.jpg" aria-label="project-img">
                <img class="img-fluid" src="images/projects/project-iso-9001-14001.jpg" alt="project-img">
                <span class="gallery-icon"><i class="fa fa-plus"></i></span>
              </a>
              <div class="project-item-info">
                <div class="project-item-info-content">
                  <h3 class="project-item-title">
                    <a href="#">Training ISO 9001:2015 & ISO 14001:2015</a>
                  </h3>
                </div>
              </div>
            </div>
          </div><!-- shuffle item 6 end -->

        </div><!-- shuffle end -->
      </div>

      <div class="col-12">
        <div class="general-btn text-center">
          <a class="btn btn-primary" href="?page=projects">View All Projects</a>
        </div>
      </div>

    </div><!-- Content row end -->
  </div>
  <!--/ Container end -->
</section><!-- Project area end -->

<!-- copy content here -->

  <footer id="footer" class="footer bg-overlay">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">About Us</h3>
            <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra">
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


  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>