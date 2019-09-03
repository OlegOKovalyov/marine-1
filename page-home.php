<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo('charset')?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php the_title(); ?></title>

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700,800&display=swap" rel="stylesheet">
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="tel:<?php echo $mytheme['phone-1']; ?>"><span class="phone">CALL US: <?php echo $mytheme['phone1']; ?> </span><span> | </span></a>
            </li>        
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['facebook']; ?>" target="_blank"><i class="fa fa-facebook"></i>
                    <span class="sr-only">(current)</span>
                  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['skype']; ?>" target="_blank"><i class="fab fa-skype"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['vimeo']; ?>" target="_blank"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['linkedin']; ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo $mytheme['instagram']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
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
          <button><i class="fa fa-search"></i></button>
        </div>      
      </div>
    </nav>

    <!-- Page Content -->
    <div class="lp-content container-fluid">
      <div class="row">

        <!-- Carousel -->
        <div id="carouselMarineControls" class="carousel slide w-100" data-ride="carousel">
          <?php 
            $slide_query = new WP_Query( array('post_type' => 'slider') );
            if( $slide_query->have_posts() ){
              while( $slide_query->have_posts() ){ 
                $slide_query->the_post();
          ?>    
          <div class="carousel-item">
            <div class="carousel-caption d-md-block">
              <img src="<?php echo get_bloginfo('template_url') . '/images/ship.png'; ?>" width=75>
              <h5 class="natural-power">Natural Power</h5>
              <p class="p-caption">vivamus orci sem, consectetur ut vestibulum.</p>
            </div>          
            <img class="slide-img d-block w-100" src="<?php the_post_thumbnail_url( $post ); ?>" alt="Slide">
          </div><!-- .carousel-item -->
          <?php
            }
            wp_reset_postdata(); // reset $post
          } 
          else
            echo 'Записей нет.';
          ?> 
          <a class="carousel-control-prev" href="#carouselMarineControls" role="button" data-slide="prev">
            <span class="prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselMarineControls" role="button" data-slide="next">
            <span class="next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>

        </div><!-- #carouselMarineControls -->

      </div><!-- .row -->

      <!-- Page Features Services -->
      <div class="services-row row text-center">
        <div class="container d-flex justify-content-around flex-wrap">

          <div class="col-md-3 col-sm-6 mb-4">
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

          <div class="col-md-3 col-sm-6 mb-4">
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

          <div class="col-md-3 col-sm-6 mb-4">
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

          <div class="col-md-3 col-sm-6 mb-4">
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
        </div>
      </div><!-- .row .services-row -->

      <!-- Call To Action -->
      <div class="call-action row">
          <div class="container">
            <div class="check-details d-flex justify-content-between">
                  <h3><span class="primary-txt">A fully responsive theme</span> with clean design for your success!</h3>
                  <span>
                    <a class="btn btn-primary" href="#" role="button"><i class="fa fa-info-circle"></i> Check Details</a>
                  </span>
            </div>
          </div><!-- .call-action -->          
      </div>

      <!-- Recent Posts -->
      <div class="p-recent">
        <div class="container">
          <h5>Recent Posts</h5>
          <div class="p-block-wrap d-flex flex-wrap row">
            <?php 
              $args = array(
              'numberposts' => 8,
              'post_type' => post,
              'tag_slug__in' => array('web', 'news'),
              'post_status' => 'publish',
            ); ?>
            <?php $post_query = new WP_Query( $args );
              while ($post_query -> have_posts()) : $post_query -> the_post(); ?>

                <div class="p-block d-flex flex-row col-md-6 col-sm-12 col-12">
                  <div class="p-date">
                    <?php $day = get_the_date('j'); $month_year = get_the_date('M, Y') ?>
                    <div class="p-date-day"><?php echo $day; ?></div>
                    <div class="p-date-my"><?php echo $month_year; ?></div>
                    <div class="p-img-type text-center"><?php the_field('image_icon') ?></i></div>
                  </div>
                  <div class="p-img">
                    <img class="d-block w-100" src="<?php the_post_thumbnail_url( $post ); ?>" alt="Post Image">
                  </div>
                  <div class="p-resume">
                    <div class="auth-cat-comment">
                      <div class="p-auth">
                        <span><?php echo "By "; the_author(); ?></span>
                        <span><i class="fa fa-square" aria-hidden="true"></i></span>
                        <span><?php the_tags(''); ?></span>
                        <span><i class="fa fa-square" aria-hidden="true"></i></span>
                        <span><?php comments_number('0', '1', '%'); echo ' Comments'; ?></span>
                        <span><i class="fa fa-square" aria-hidden="true"></i></span>
                        <a href="<?php the_permalink(); ?>">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
                      </div>
                    </div>
                    <div class="p-title">
                      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </div>
                    <div class="p-excerpt"><?php the_excerpt() ?></div>                   
                  </div>
                </div><!-- .p-block --> 

            <?php 
              endwhile;
              wp_reset_postdata();
            ?>             
          </div><!-- .p-block-wrap -->
        </div><!-- .container -->
      </div><!-- .p-recent -->

      <!-- Our Team -->
      <div class="our-team row">
        <div class="container">
          <h3>Our Team</h3>
          <div class="card-wrap d-flex flex-wrap pb-4">
            <?php 
              $args = array(
              'numberposts' => 4,
              'post_type' => 'team',
              'post_status' => 'publish',
            ); ?>
            <?php $team_query = new WP_Query( $args );
              while ($team_query -> have_posts()) : $team_query -> the_post(); ?>       
                <div class="card d-flex flex-column col-md-3 col-sm-12 col-12" style="width: 18rem;">
                  <img class="card-img-top d-block w-100" src="<?php the_post_thumbnail_url( $post ); ?>" alt="Team member photo">

                  <div class="card-body">
                    <h5 class="card-title text-center"><?php the_title(); ?></h5>
                    <p class="position text-center"><?php the_field('position'); ?></p>
                    <div class="card-text"><?php the_content(); ?></div>
                    <hr width="35%">
                    <div class="block-socials">
                      <ul class="team-socials d-flex justify-content-around">
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook ml-2"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('skype'); ?>" target="_blank"><i class="fab fa-skype"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('google_plus'); ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('vimeo'); ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <li class="socials-item">
                          <a class="socials-link" href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i></a>
                        </li>                        
                      </ul>
                    </div>
                  </div>
                </div><!-- .card -->
              <?php 
                endwhile;
                wp_reset_postdata();
              ?>         
          </div><!-- .card-wrap -->      
        </div><!-- .container -->
      </div><!-- .our-team .row -->

      <!-- Our Clients -->
      <div class="our-clients row">
        <div class="container">
          <div class="row d-flex justify-content-between flex-wrap py-4">
            <div class="img-wrap"><img src="<?php echo get_bloginfo('template_url') . '/images/netcredit.png'; ?>"></div>
            <div class="img-wrap"><img src="<?php echo get_bloginfo('template_url') . '/images/paroo.png'; ?>"></div>
            <div class="img-wrap"><img src="<?php echo get_bloginfo('template_url') . '/images/foxter.png'; ?>"></div>
            <div class="img-wrap"><img src="<?php echo get_bloginfo('template_url') . '/images/queenscounsel.png'; ?>"></div>
            <div class="img-wrap"><img src="<?php echo get_bloginfo('template_url') . '/images/camcord.png'; ?>"></div>
          </div>          
        </div>
      </div><!-- .our-clients .row -->

      <div class="get-in-touch row">
        <div class="container">
          <h3>Get In Touch!</h3>
          <div class="form-wrap mb-5">
          <?php echo do_shortcode( '[contact-form-7 id="89" title="Get In Touch"]' ); ?>         
          </div><!-- .form-wrap -->         
        </div><!-- .container -->
      </div><!-- .get-in-touch .row -->


    </div><!-- .container-fluid .lp-content-->

    <!-- Footer -->
    <footer>
      <div class="pre-footer">
         
        <div class="container d-flex">
          <div class="row">         
            <div class="col-md-3 col-sm-6">
              <div class="footer-logo">
                <span>
                  <img src="<?php echo get_bloginfo('template_url') . '/images/logo_footer.png'; ?>">
                </span>
                <span class="logo-text">MARINE</span>
              </div>
              
              <p>Vivamus orci sem, consectetur ut vestibulum a, mper ac dui. Aenean tellus nisl, commodo eu aliquet ut, pulvinar ut sapien. Proin tate aliquam mi nec hendrerit.</p>
            </div>
            <div class="col-md-3 col-sm-6">
              <h5>Recent Posts</h5>
              <?php 
              $args = array(
                'numberposts' => 2,
                // 'category' => 5,
                'post_status' => 'publish',
              ); 

              $result = wp_get_recent_posts($args);

              foreach( $result as $p ){ 
                ?>
                <div class="p-footer-block">
                  <div><?php echo $p['post_date'] . ' | BY '; ?><span><?php the_author(); ?></span></div>
                  <a class="post-link" href="<?php echo get_permalink($p['ID']) ?>"><?php echo $p['post_title'] ?></a><br />
                  <div><?php echo $p['post_excerpt']; ?></div> 
                </div>
                <?php 
              } 
              ?>            
            </div>
            <div class="col-md-3 col-sm-6">
              <h5>Contacts</h5>
              <div class="contacts-wrap row">
                <div class="col-md-2 mb-4">
                  <img class="i_footer" src="<?php echo get_bloginfo('template_url') . '/images/i_location.png'; ?>">
                </div>
                <div class="col-md-10 pl-3 mb-4">
                  <span>Phoenix Inc.<br> PO Box 21177<br>Little Lonsdale St, Melbourne<br>Victoria 8011 Australia</span>
                </div>
                <div class="col-md-2 mb-4">
                  <img class="i_footer" src="<?php echo get_bloginfo('template_url') . '/images/i_mobile.png'; ?>">                
                </div>
                <div class="col-md-10 pl-3 mb-4">               
                  <span>
                    Phone: <a class="footer-phone" href="tel:<?php echo $mytheme['phone-2']; ?>"><?php echo $mytheme['phone2']; ?></a><br>
                    Fax: <a class="footer-phone" href="tel:<?php echo $mytheme['phone-2']; ?>"><?php echo $mytheme['phone2']; ?></a></span>
                </div>
                <div class="col-md-2 mb-3">
                  <img class="i_footer" src="<?php echo get_bloginfo('template_url') . '/images/i_mail.png'; ?>">                
                </div>
                <div class="col-md-10 pl-3">
                  <span><a class="footer-email" href="mailto:<?php echo $mytheme['email']; ?>"><?php echo $mytheme['email']; ?></a></span>
                </div>              

              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <h5>Newsletter Signup</h5>
              <p>By subscribing to our mailing list you will get the latest news from us.</p>
              <button type="button" class="btn btn-info btn-block"><img class="float-right" src="<?php echo get_bloginfo('template_url') . '/images/i_check.png'; ?>"></button>
              <h5>Follow Us</h5>
                <div class="block-socials">
                  <ul class="team-socials d-flex justify-content-start">
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['facebook']; ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['twitter']; ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['skype']; ?>" target="_blank"><i class="fab fa-skype" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['googleplus']; ?>" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['vimeo']; ?>"><i class="fa fa-vimeo" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['linkedin']; ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </li>
                    <li class="socials-item">
                      <a class="socials-link" href="<?php echo $mytheme['instagram']; ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </li>                        
                  </ul>
                </div>            
            </div>
          </div><!-- .row --> 
        </div><!-- .container -->
       
      </div><!-- .pre-footer -->
  
    <div class="footer pt-2 pb-5">
      <div class="container">
        <p class="copyright m-0 pt-2">&copy; 2019 MARINE. All Rights Reserved</p>
      </div><!-- .container .footer-container -->
    </div>
        </footer>
  </div><!-- .wrapper -->

  <?php wp_footer(); ?>

  <script>
    $('#faSearch').mouseover(function() {
      $('#searchbox').show('slow');
    }); // end mouseover
    $(document).on('click keypress', function() {
      $('#searchbox').hide(100);
    }); // end on
  </script> 

  <script>
    var $matched = $('#carouselMarineControls');
    $matched.find("div:first").addClass("active");
  </script>  

</body>

</html>
