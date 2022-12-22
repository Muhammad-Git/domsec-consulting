<?php /* Template Name: About Template */ ?>
<?php get_header();
$s1 = get_field('section_1');
$s2 = get_field('section_2');
$s6 = get_field('section_6',13);
$s7 = get_field('section_7',13);
?>


<section class="about-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text box">
                    <h3><?php echo $s1['title']; ?></h3>
                    <?php echo $s1['content']; ?>
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="img-box">
                    <img src="<?php echo $s1['image']; ?>" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="text box-2">
                    <div class="heading">
                        <h2><?php echo $s1['title_1']; ?></h2>
                    </div>
                    <?php echo $s1['content_1']; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="about-sec-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12">
                <div class="text box">
                    <div class="heading">
                        <h2><?php echo $s2['title_1']; ?></h2>
                    </div>
                    <?php echo $s2['content_1']; ?>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="text box-2">
                    <div class="heading">
                        <h2><?php echo $s2['title_2']; ?></h2>
                    </div>
                    <?php echo $s2['content_2']; ?>
                </div>
            </div>
        </div>
    </div>
</section>




<section class="home-sec-6" style="background-image: url(<?php echo $s6['image'];?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <?php echo $s6['content'];?>
                    </div>

                    <div class="testi-slider">
                    	
                    	<?php if( have_rows('section_6',13)) : while ( have_rows('section_6',13) ) : the_row(); ?>
                    	<?php if( have_rows('section_6_repeater') ): while ( have_rows('section_6_repeater') ) : the_row(); ?>      
                        <div class="text">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/quote.png" class="img-fluid" alt="">
                            <p><?php echo get_sub_field('content'); ?></p>
                            <a href=""><?php echo get_sub_field('title'); ?>e</a>
                        </div>
                            <?php endwhile; endif; ?>
                            <?php endwhile; endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    
<section class="home-sec-7" style="background-image:url(<?php echo $s7 ['image']; ?>) ;">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <div class="heading">
                        <h2><?php echo $s7['title'];?></h2>
                        <p><?php echo $s7['content'];?></p>
                        <div class="cell">
                            <div>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/cell.png" class="img-fluid" alt="">
                            </div>
                            <a href="tel:<?php echo $options['phone_number1'];?>"><?php echo $options['phone_number1'];?></a>
                        </div>

                        <a href="<?php echo $s7['page_link'];?>" class="t-btn"><i class="fa fa-calendar-o" aria-hidden="true"></i><?php echo $s7['button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>