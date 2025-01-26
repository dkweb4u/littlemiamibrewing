<?php
$mythemesetup = json_decode(file_get_contents(get_template_directory().'/mytheme.json'),true);
?>
        <!-- dk theme end -->

        <footer>
        <div class="footer-top">
   <div class="container">
   <div class="row">
                    <div class="col-lg-7">
                    <div class="title">
                        <h4>Newsletter</h4>
                        <p>Subscribe to our Newsletter to keep up on the latest news at LMBC</p>
                    </div>
 
                    </div>

                    <div class="col-lg-5">
                        <div class="mail-champ">
                        <form action="//littlemiamibrewing.us19.list-manage.com/subscribe/post?u=182ce07230d55a7cc2ffb50f1&amp;id=0a0195cc83" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate="">
	
    <div class="mc-field-group">
        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Enter Your E-mail Address">
    </div>
        <div class="clear"><input type="submit" value="Go" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </form>
                        </div>
                    </div>

                   </div>
   </div>

                </div>
<div class="footer-middle">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4 class="title">
                Our Location
                </h4>
                <ul>
                    <li><a href="<?=$mythemesetup['llocation']?>" target="_blank"><?=$mythemesetup['address']?></a></li>
                    <li>
                    Group Reservations/  Lost Inquiries  <br> <a href="mailto:<?=$mythemesetup['email1']?>"><?=$mythemesetup['email1']?></a></li>
                    <li>
                        
Band Inquiries <br> <a href="mailto:<?=$mythemesetup['email2']?>"><?=$mythemesetup['email2']?></a>
                    </li>
                    <li>
                    Taproom/Brewery Phone: <a href="tel:<?=$mythemesetup['myphone']?>"><?=$mythemesetup['myphone']?></a></li>
                </ul>
            </div>
            <!--  -->
            <div class="col-lg-4">
                <h4 class="title">
                Taproom Hours. Kitchen closes 1 hour earlier
                </h4>
               <ul class="timings">
                <li><span>Monday</span><span>11am - 10pm</span></li>
                <li><span>Tuesday</span><span>11am - 10pm</span></li>
                <li><span>Wednesday</span><span>11am - 10pm</span></li>
                <li><span>Thursday</span><span>11am - 12pm</span></li>
                <li><span>Friday</span><span>11am - 12pm</span></li>
                <li><span>Saturday</span><span>11am - 12pm</span></li>
                <li><span>Sunday</span><span>11am - 9pm</span></li>
               </ul>
              
            </div>
            <!--  -->
            <div class="col-lg-4">
                <h4 class="title">
                Follow us
                </h4>
                <div class="social-icons">
<?php
$mythemesetup = json_decode(file_get_contents(get_template_directory().'/mytheme.json'),true);
;?>
           <a href="<?=$mythemesetup['facebook']?>" target="_blank"><i class="fa fa-facebook"></i></a>	
           <a href="<?=$mythemesetup['tweeter']?>" target="_blank"><i class="fa fa-twitter"></i></a>			<a href="<?=$mythemesetup['instagram']?>" target="_blank"><i class="fa fa-instagram"></i></a>						
        </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom">
    <div class="container">
     <div class="row">
     <div class="col-lg-5">
       <div class="copy">
       <p>  © 2017-<?=date('Y')?> All Rights Reserved. Little Miami Brewing Company.</p>
       </div>
      </div>
      <div class="col-lg-7">
     <?php 
                  wp_nav_menu(array(
                    'theme_location' => 'footerMenuLocation'
                  ));
                ?>
     </div>
     </div>
    
    </div>
</div>
        </footer>

        </div>
        <?php wp_footer(); ?>

</body>

</html>