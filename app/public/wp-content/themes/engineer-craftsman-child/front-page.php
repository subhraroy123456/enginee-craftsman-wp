<?php
/* Template Name:  Homepage */
get_header();
?>


<?php if( have_rows('home_sections') ): ?>
    <?php while( have_rows('home_sections') ): the_row(); ?>
        <?php if( get_row_layout() == 'banner' ): ?>

            <div class="hero">
                <?php if( have_rows('banner_slider') ): ?>
                <div class="hero-slider">
                    <div class="swiper swiper-hero">
                        <div class="swiper-wrapper">
                            <?php while ( have_rows('banner_slider') ) : the_row(); ?>
                            <div class="swiper-slide">
                                <div class="swiper-slide-content" style="background: url(<?php echo get_sub_field('image')['url'] ?>) no-repeat;">
                                    <div class="hero-social">
                                        <a href="">
                                            <iconify-icon icon="iconoir:instagram"></iconify-icon>
                                        </a>
                                        <a href="">
                                            <iconify-icon icon="ic:baseline-tiktok"></iconify-icon>
                                        </a>
                                        <a href="">
                                            <iconify-icon icon="mdi:youtube"></iconify-icon>
                                        </a>
                                    </div>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <h1><?php echo get_sub_field('heading'); ?></h1>
                                                <p><?php echo get_sub_field('description'); ?></p>
                                                <div class="hero-btn">
                                                    <a href="<?php echo get_sub_field('button_link')['url']; ?>" class="btnn"><?php echo get_sub_field('button_link')['title']; ?></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
               <?php endif; ?>
            </div>


            <?php elseif( get_row_layout() == 'design_space_section' ): ?>
                <section class="design-space">
                    <div class="container">
                        <div class="row align-items-center gy-4">
                            <div class="col-12 col-md-5">
                                <div class="top-heading">
                                    <h2><?php echo get_sub_field('heading'); ?></h2>
                                    <p><?php echo get_sub_field('description'); ?></p>
                                    <a href="<?php echo get_sub_field('button_link')['url']; ?>" class="read-more"><?php echo get_sub_field('button_link')['title']; ?>
                                        <svg width="50" height="19" viewBox="0 0 50 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M48.718 10.028H1.02564C0.458333 10.028 0 9.56971 0 9.0024C0 8.4351 0.458333 7.97676 1.02564 7.97676H46.2404L40.016 1.7524C39.6154 1.35176 39.6154 0.701122 40.016 0.300481C40.4167 -0.10016 41.0673 -0.10016 41.468 0.300481L49.4455 8.27804C49.7404 8.57292 49.8269 9.01202 49.6667 9.39663C49.5064 9.77804 49.1314 10.028 48.718 10.028Z" fill="#161616"/>
                                            <path d="M40.7308 18.0152C40.468 18.0152 40.2051 17.9159 40.0064 17.7139C39.6058 17.3133 39.6058 16.6627 40.0064 16.262L47.9936 8.27485C48.3942 7.8742 49.0449 7.8742 49.4455 8.27485C49.8462 8.67549 49.8462 9.32613 49.4455 9.72677L41.4583 17.7139C41.2564 17.9159 40.9936 18.0152 40.7308 18.0152Z" fill="#161616"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>

                            <div class="col-12 col-md-7">
                                <div class="design-space-right">
                                    <div class="row gy-4 align-items-center">
                                        <div class="col-12 col-md-6">
                                            <div class="design-left">
                                                <img src="<?php echo get_sub_field('image1')['url'] ?>" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6 col-rel">
                                            <div class="img-dots">
                                                <img src="images/dots.png" alt="">
                                            </div>
                                            <div class="design-right">
                                                <div class="design-right-counter">
                                                    <h3><span class="counter"><?php echo get_sub_field('experience_number'); ?></span><em>+</em> years expriences</h3>
                                                </div>
                                                <div class="img">
                                                    <img src="<?php echo get_sub_field('image2')['url'] ?>" alt="" class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


             <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>


    <?php get_footer(); ?>