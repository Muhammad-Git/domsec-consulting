<?php /* Template Name: faq - Page Template */ ?>
<?php get_header(); $s1 = get_field('section_1');?>


<section class="faq-sec-1">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="main">
                    <div class="container">
                        <div class="accordion" id="faq">
                        	
                        	<?php $x=1; if( have_rows('section_1') ): while( have_rows('section_1') ) : the_row(); ?>
                        	
                            <div class="card">
                                <div class="card-header" id="faqhead<?php echo $x; ?>">
                                    <a href="#" class="<?php if($x==1){ echo 'btn btn-header-link'; } else { echo 'btn btn-header-link collapsed'; } ?>" data-toggle="collapse" data-target="#faq<?php echo $x; ?>"
                                        aria-expanded="true" aria-controls="faq<?php echo $x; ?>"><?php echo get_sub_field('question'); ?></a>
                                </div>

                                <div id="faq<?php echo $x; ?>" class="<?php if($x==1){ echo 'collapse show'; } else { echo 'collapse'; } ?>" aria-labelledby="faqhead<?php echo $x; ?>" data-parent="#faq">
                                    <div class="card-body">
                                    <?php echo get_sub_field('answer'); ?>
                                    </div>
                                </div>
                            </div>
                            
                            <?php $x++; endwhile; endif; ?>
                         <!--   <div class="card">
                                <div class="card-header" id="faqhead2">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq2" aria-expanded="true" aria-controls="faq2">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>-->
                            
                            <!--<div class="card">
                                <div class="card-header" id="faqhead3">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq3" aria-expanded="true" aria-controls="faq3">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead4">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq4" aria-expanded="true" aria-controls="faq4">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq4" class="collapse" aria-labelledby="faqhead4" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead5">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq5" aria-expanded="true" aria-controls="faq5">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq5" class="collapse" aria-labelledby="faqhead5" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead6">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq6" aria-expanded="true" aria-controls="faq6">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq6" class="collapse" aria-labelledby="faqhead6" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-header" id="faqhead7">
                                    <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse"
                                        data-target="#faq7" aria-expanded="true" aria-controls="faq7">Duis vitae arcu efficitur, egestas sem volutpat, faucibus ?</a>
                                </div>

                                <div id="faq7" class="collapse" aria-labelledby="faqhead7" data-parent="#faq">
                                    <div class="card-body">
                                    Nulla eu nisl pharetra, aliquam diam in, consectetur augue. Phasellus maximus est justo, egestas rutrum felis vestibulum non. Mauris ultricies scelerisque augue eget porttitor. Ut tincidunt tellus eu velit mollis aliquet. Sed vulputate nunc a rutrum venenatis. 
                                    </div>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php get_footer(); ?>