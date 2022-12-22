<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />-->

<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lib.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
<title><?php bloginfo( 'title' ); ?></title>
<?php wp_head();?>
</head>
<?php
global $options;
global $logo;
global $copyrite;
$options = get_option('cOptn');
$logo = $options['logo'];
$copyrite = $options['copyrite'];
$size = 344;
$options['logo'] = wp_get_attachment_image($logo, array($size, $size), false);
$att_img = wp_get_attachment_image($logo, array($size, $size), false);
$logoSrc = wp_get_attachment_url($logo);
$att_src_thumb = wp_get_attachment_image_src($logo, array($size, $size), false);
?>
<body <?php body_class(); ?>>
<header>
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="top">
                        Schedule your Appointment: <a href="tel:<?php echo $options['phone_number'];?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $options['phone_number'];?></a>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="text-right top">
                        <a target="_blank" href="<?php echo $options['facebook'];?>">Facebook</a>
                        -<a target="_blank" href="<?php echo $options['twitter'];?>">Twitter</a>
                        -<a target="_blank" href="<?php echo $options['linkedin'];?>">Linked In</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-12">
                <div class="logo">
                    <a href="<?php echo site_url();?>">
                        <img src="<?php echo $logoSrc;?>" class="img-fluid" alt="">
                    </a>
                </div>
            </div>

            <div class="col-lg-9 col-md-12">
                <div class="nav-list">
                	<?php wp_nav_menu(array('menu'=>'Header Menu' , 'menu_class'=>''))?>
                    <!--<ul>-->
                    <!--    <li><a href="index.php" class="home-active">Home</a></li>-->
                    <!--    <li><a href="about.php" class="about-active">About Us</a></li>-->
                    <!--    <li><a href="services.php" class="services-active">Services</a></li>-->
                    <!--    <li><a href="faqs.php" class="faqs-active">FAQs</a></li>-->
                    <!--    <li><a href="contact.php" class="contact-active">Contact Us</a></li>-->
                    <!--    <li><a href="" class="t-btn">Schedule your Appointment</a></li>-->
                    <!--</ul>-->
                </div>
            </div>
        </div>
    </div>
</header>

<?php if(is_home() || is_front_page() ){ $hpbs = get_field('home_page_banner_section');?>

<section class="home-banner" style="background-image: url('<?php echo $hpbs['banner_image'];?>');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text">
                        <h3><?php echo $hpbs['banner_title'];?></h3>
                        <h1><?php echo $hpbs['banner_subtitle'];?></h1>
                        <p><?php echo $hpbs['banner_content'];?> </p>
                        <a href="<?php echo $hpbs['page_link'];?>" class="t-btn"><?php echo $hpbs['button_title'];?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php }else{?>



<?php if(get_field('bannerimage')) {

    $BannerImage = get_field('bannerimage');

}else{

   $BannerImage = get_template_directory_uri()."/assets/images/about/title.jpg";

}?>


<?php if(get_field('bannerheading')) {

    $BannerHeading = get_field('bannerheading');

}else{

   $BannerHeading = get_the_title();

}?>



<section class="page-title" style="background-image:url(<?php echo $BannerImage; ?>)">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text">
                    <h1><?php echo $BannerHeading; ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<?php }?>