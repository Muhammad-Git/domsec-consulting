<?php /* Template Name: Contact Us - Page Template */ ?>
<?php get_header(); 
$s1 = get_field('section_1');?>

<style>
	
	.page-id-21 footer > .container{
		
		display:none;
	}
</style>

<section class="cont-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text text-center">
                    <div class="heading">
                        <?php echo the_content();?>
                    </div>

                   <?php echo do_shortcode('[contact-form-7 id="157" title="Get In Touch"]');?> 
                </div>
            </div>
        </div>
    </div>
</section>

<section>
    <div>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/map.jpg" class="img-fluid w-100" alt="">
    </div>
</section>
<!--<footer>-->
<!--	<div class="f-btm">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-lg-6 col-md-12">-->
<!--                        <p><?php echo $options['copyright']?></p>-->
<!--                    </div>-->

<!--                     <div class="col-lg-6 col-md-12">-->
<!--                        <p class="text-right">Made with Love with <a href="http://insitech.ae/" target="_blank">Insitech <img src="<?php echo get_template_directory_uri(); ?>/assets/images/insitech.png" class="img-fluid" alt=""></a> </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>  -->
<!--        </div>-->
<!--</footer>-->

<?php get_footer(); ?>