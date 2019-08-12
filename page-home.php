<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php the_title(); ?></title>

  <!-- Custom styles for this template -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.1/css/v4-shims.css">  

  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <div class="wrapper">
    <!-- Social Header -->
    <nav class="navbar navbar-expand-lg navbar-light socials" style="background-color: #fff;">
    <div class="container">
      <?php the_custom_logo( $blog_id ); ?>
      <div>
        <ul class="navbar-nav ml-auto flex-row">
          <li class="nav-item">
            <a class="nav-link" href="#"><span class="phone">CALL US: +1 800 450 17 04</span><span> | </span></a>
          </li>        
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-facebook"></i>
                  <span class="sr-only">(current)</span>
                </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fab fa-skype"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-instagram"></i></a>
          </li>                        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light primary-menu" style="background-color: #b1cbd8;">
    <div class="container">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-0">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home 
              <span class="sr-only">(current)</span><i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gallery <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pages <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </li>          
          <li class="nav-item">
            <a class="nav-link" href="#">Contact <i class="fa fa-angle-right" aria-hidden="true"></i></a>
          </li>
        </ul>
      </div>
      <form id="searchbox" action="/action_page.php" class="search-box"  style="display: none;">
        <input type="text" placeholder="Search.." name="search">
        <button type="submit"><i class="fa fa-search"></i></button>
      </form>
      <div id="faSearch">
        <button type="submit"><i class="fa fa-search"></i></button>
      </div>      
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container-fluid">
    <div class="row">

      <!-- Carousel -->
      <div id="carouselMarineControls" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="carousel-caption d-none d-md-block">
              <img src= "<?php echo get_bloginfo('template_url') . '/images/ship.png'; ?>" width=75>
              <h5 class="natural-power">Natural Power</h5>
              <p class="p-caption">vivamus orci sem, consectetur ut vestibulub.</p>
            </div>          
            <img class="slide-img d-block w-100" src="<?php echo get_bloginfo('template_url') . '/images/1600x810clr.png'; ?>" alt="First slide" height="480">
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <img src= "<?php echo get_bloginfo('template_url') . '/images/ship.png'; ?>" width=75>
              <h5 class="natural-power">Natural Power</h5>
              <p class="p-caption">vivamus orci sem, consectetur ut vestibulub.</p>
            </div>             
            <img class="slide-img d-block w-100" src="<?php echo get_bloginfo('template_url') . '/images/1600x810clr.png'; ?>" alt="Second slide">
          </div>
          <div class="carousel-item">
            <div class="carousel-caption d-none d-md-block">
              <img src= "<?php echo get_bloginfo('template_url') . '/images/ship.png'; ?>" width=75>
              <h5 class="natural-power">Natural Power</h5>
              <p class="p-caption">vivamus orci sem, consectetur ut vestibulub.</p>
            </div>             
            <img class="slide-img d-block w-100" src="<?php echo get_bloginfo('template_url') . '/images/1600x810clr.png'; ?>" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselMarineControls" role="button" data-slide="prev">
          <span class="prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselMarineControls" role="button" data-slide="next">
          <span class="next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>   
    </div><!-- .row -->

    <!-- Page Features Services -->
    <div class="row text-center services-row">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="square">
            <img class="card-img-top d-block" src="<?php echo get_bloginfo('template_url') . '/images/cog.png'; ?>" width="40px" alt="Icon">
          </div>
          <div class="card-body">
            <h4 class="card-title">Web development</h4>
            <p class="card-text">It was hard to make it so cool</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="square">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url') . '/images/linechart.png'; ?>" width="40px" alt="Icon">            
          </div>
          <div class="card-body">
            <h4 class="card-title">SEO Monitoring</h4>
            <p class="card-text">It was hard to make it so cool</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="square">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url') . '/images/community.png'; ?>" width="40px" alt="Icon">            
          </div>
          <div class="card-body">
            <h4 class="card-title">Network Communities</h4>
            <p class="card-text">It was hard to make it so cool</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <div class="square">
            <img class="card-img-top" src="<?php echo get_bloginfo('template_url') . '/images/piechart.png'; ?>" width="40px" alt="Icon">
          </div>
          <div class="card-body">
            <h4 class="card-title">Web analytics</h4>
            <p class="card-text">It was hard to make it so cool</p>
          </div>
        </div>
      </div>

    </div><!-- .row -->

  </div> <!-- .container -->

  <!-- Footer -->
  <footer class="footer pt-2 pb-5 bg-dark">
    <div class="container">
      <p class="copyright m-0">&copy; 2019 MARINE. All Rights Reserved</p>
    </div><!-- .container -->
  </footer>

  </div><!-- .wrapper -->

  <?php wp_footer(); ?>

  <script>
    $('#faSearch').mouseover(function() {
      $('#searchbox').show('slow');
    });
    $('#faSearch').click(function() {
      $('#searchbox').hide(100);
    });
  </script>  
</body>

</html>
