 <?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyright']
 ?>
 
 <?php wp_footer(); ?>
<footer>
	
	
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="box-1">
                    <div class="logo">
                        <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/f-logo.png" class="img-fluid" alt=""></a>
                    </div>

                    <ul>
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> 
                            <a href=""><span>Address</span>
                                <?php echo $options['Address'];?> </a>
                        </li>

                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i> 
                            <a href="tel:<?php echo $options['phone_number'];?>"><span>Phone</span>
                                <?php echo $options['phone_number'];?></a>
                        </li>

                        <li>
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                            <a href="mailto:<?php echo $options['email'];?>"><span>Email</span>
                                <?php echo $options['email'];?></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <div class="main-link">
                    <div class="links">
                        <h4>Quick Links</h4>
                        <?php wp_nav_menu(array('menu'=>'Footer Menu' , 'menu_class'=>''))?>
                        <!--<ul>-->
                        <!--    <li><a href="">Home</a></li>-->
                        <!--    <li><a href="">About Us</a></li>-->
                        <!--    <li><a href="">Services</a></li>-->
                        <!--    <li><a href="">Contact Us</a></li>-->
                        <!--</ul>-->
                    </div>

                    <div class="links">
                        <h4>Social Media</h4>
                        <ul>
                            <li><a href="<?php echo $options['facebook'];?>" target="_blank">Facebook</a></li>
                            <li><a href="<?php echo $options['twitter'];?>" target="_blank">Twitter</a></li>
                            <li><a href="<?php echo $options['linkedin'];?>" target="_blank">Linked In</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-md-6">
                <div class="box-3">
                    <h4>Contact Us</h4>
                    <?php echo do_shortcode('[contact-form-7 id="127" title="Contact form 1"]');?>
                </div>
            </div>
        </div>
    </div>
    <div class="f-btm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p><?php echo $options['copyright']?></p>
                </div>

                 <div class="col-lg-6 col-md-12">
                    <p class="text-right">Made with Love with <a href="http://insitech.ae/" target="_blank">Insitech <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insitech.png" class="img-fluid" alt=""></a> </p>
                </div>
            </div>
        </div>  
    </div>
</footer>
    

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow-animate.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/lib.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>

<script type="text/javascript">

        $(document).on('ready', function () {

            $(".testi-slider").slick({
                dots: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows:false
            });


            wow = new WOW(
                {
                animateClass: 'animated',
                offset:       100,
                callback:     function(box) {
                console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
                }
                }
            );
            
            wow.init(); 
            
              
        });   
    </script>

</body>
</html>