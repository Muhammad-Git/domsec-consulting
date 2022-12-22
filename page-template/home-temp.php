<?php /* Template Name: Home - Page Template */ ?>
<?php get_header(); 
$s1 = get_field('section_1');
$s2 = get_field('section_2');
$s3 = get_field('section_3');
$s4 = get_field('section_4');
$s5 = get_field('section_5');
$s6 = get_field('section_6');
$s7 = get_field('section_7');
?>

<section class="home-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="text">
                    <div class="heading">
                        <h2><?php echo $s1['title']; ?></h2>
                    </div>
                    <p><?php echo $s1['content']; ?> </p>
                    <a href="<?php echo $s1['page_link']; ?>"><?php echo $s1['button_title']; ?></a>
                </div>
                
            </div>
        </div>
    </div>
</section>
    
<section class="home-sec-2">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-12">
                <div class="img-box">
                    <img src="<?php echo $s2['image']; ?>" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-5 col-md-12">
                <div class="text">
                    <div class="heading">
                        <h2><?php echo $s2['title']; ?></h2>
                    </div>
                    <?php echo $s2['content']; ?>
                    <a href="<?php echo $s2['page_link']; ?>" class="t-btn-blue t-btn "><?php echo $s2['button_title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
    
<section class="home-sec-3" style="background-image: url(<?php echo $s3['image']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center heading">
                    <h2><?php echo $s3['title']; ?></h2>
                </div>
            </div>
            
            <?php if( have_rows('section_3')) : while ( have_rows('section_3') ) : the_row(); ?>

                 <?php if( have_rows('section_3_repeater') ): while ( have_rows('section_3_repeater') ) : the_row(); ?>
                
            <div class="col-lg-3 col-md-6">
                <div class="box">
                    <img src="<?php echo get_sub_field('image'); ?>" class="img-fluid" alt="">
                    <h4><?php echo get_sub_field('title'); ?></h4>
                </div>
            </div>
            
            <?php endwhile; endif; ?>
            <?php endwhile; endif; ?>
        </div>

        
    </div>
</section>
    
    <section class="home-sec-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="text">
                        <div class="heading">
                            <h2><?php echo $s4['title'];?></h2>
                        </div>
                        <p class="m-0"><?php echo $s4['content'];?></p>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12">
                    <div class="newslatter">
                      <?php echo do_shortcode('[email-subscribers-form id="1"]');?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="home-sec-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading text-center">
                        <h2><?php echo $s5['title'];?></h2>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <?php $x=1;  $args = array( 
                'post_type' => 'services' ,
                'posts_per_page' => '3',
                'order'=>'ASC',); 
                $index_query = new WP_Query($args); 
                while ($index_query->have_posts()) : $index_query->the_post(); ?>

                <div class="col-lg-4 col-md-6">
                    <div class="text">
                        <div class="img-box">
                            <img src="<?php echo the_post_thumbnail_url();?>" class="img-fluid w-100" alt="">
                        </div>
                        <div class="text-box text-center">
                            <h4><?php echo the_title(); ?></h4>
                        <p><?php echo the_content(); ?></p>
                        </div>
                    </div>
                </div>
                <?php $x++; endwhile; wp_reset_query(); ?>
            </div>

            <div class="row">
                <div class="col-md-12 text-center mt-4">
                    <a href="<?php echo $s5['page_link'];?>" class="t-btn"><?php echo $s5['button_title'];?></a>
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
                    	
                    	<?php if( have_rows('section_6')) : while ( have_rows('section_6') ) : the_row(); ?>
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