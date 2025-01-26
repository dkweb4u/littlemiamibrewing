<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.css" integrity="sha512-EaaldggZt4DPKMYBa143vxXQqLq5LE29DG/0OoVenoyxDrAScYrcYcHIuxYO9YNTIQMgD8c8gIUU8FQw7WpXSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>

    <div class="dk-theme">
    
        <!-- dk theme -->
        <header>
        <div class="top-bar">
               <div class="offer">
               ONLINE FOOD ORDER FOR TAKEOUT
               </div>
            </div>
   
         <nav>
            <div class="logo">
                <a href="<?php echo site_url() ?>">
                    <img src="<?php echo get_theme_file_uri('/images/logo/logo.png') ?>" alt="">
                </a>
            </div>
            <div class="menu-container">
             <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation'
                  ));
                ?>
        </div>
        <div class="end-column">          
           <div class="social-icons">
<?php
$mythemesetup = json_decode(file_get_contents(get_template_directory().'/mytheme.json'),true);
;?>
           <a href="<?=$mythemesetup['llocation']?>"><i class="fa fa-map-marker"></i></a>	
           <a href="<?=$mythemesetup['facebook']?>" target="_blank"><i class="fa fa-facebook"></i></a>	
           <a href="<?=$mythemesetup['tweeter']?>" target="_blank"><i class="fa fa-twitter"></i></a>			<a href="<?=$mythemesetup['instagram']?>" target="_blank"><i class="fa fa-instagram"></i></a>						
        </div>
          
        </div>
        <div class="menu-icon">
            <span></span>
            <span></span>
            <span></span>
        </div>
         </nav>
        </header>
        <!-- header end -->

        