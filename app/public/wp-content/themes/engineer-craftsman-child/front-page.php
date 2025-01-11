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


            <?php elseif( get_row_layout() == 'counter_section' ): ?>    
                <section class="counter-sec">
                    <div class="container">
                        <?php if( have_rows('counter_content') ): ?>
                        <div class="row gy-4">
                             <?php while ( have_rows('counter_content') ) : the_row(); ?>
                            <div class="col-12 col-md-4">
                                <div class="counter-sec-content">
                                    <h3 class=""><span class="counter"><?php echo get_sub_field('number'); ?></span> <em >+</em></h3>
                                    <p><?php echo get_sub_field('content'); ?></p>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </section>



                <?php elseif( get_row_layout() == 'crafting_section' ): ?>  
                <section class="crafting-sec">
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-12 top-heading">
                                <h2><?php echo get_sub_field('heading'); ?></h2>
                                <p><?php echo get_sub_field('description'); ?></p>
                            </div>
                        </div>
                        <?php if( have_rows('crafting_content') ): ?>
                        <div class="row crafting-row gy-5">
                            <?php while ( have_rows('crafting_content') ) : the_row(); ?>
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="crafting-content">
                                <div class="icon">
                                    <svg width="25" height="37" viewBox="0 0 25 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.7883 0.419403H2.02737C0.945592 0.419403 0.0654297 1.29949 0.0654297 2.38134V6.45776C0.0654297 6.75326 0.304929 6.99283 0.600505 6.99283C0.89608 6.99283 1.13558 6.75326 1.13558 6.45776V3.63435H11.8727V21.3139C11.8727 21.6094 12.1122 21.849 12.4078 21.849C12.7034 21.849 12.9429 21.6094 12.9429 21.3139V3.63435H17.3336C17.6292 3.63435 17.8687 3.39478 17.8687 3.09927C17.8687 2.80377 17.6292 2.5642 17.3336 2.5642H1.13558V2.38134C1.13558 1.88957 1.5356 1.48955 2.02737 1.48955H22.7883C23.28 1.48955 23.6801 1.88957 23.6801 2.38134V2.5642H19.82C19.5244 2.5642 19.2849 2.80377 19.2849 3.09927C19.2849 3.39478 19.5244 3.63435 19.82 3.63435H23.6801V27.8911H12.9429V23.8154C12.9429 23.5199 12.7034 23.2804 12.4078 23.2804C12.1122 23.2804 11.8727 23.5199 11.8727 23.8154V27.8911H1.13558V8.96241C1.13558 8.6669 0.89608 8.42733 0.600505 8.42733C0.304929 8.42733 0.0654297 8.6669 0.0654297 8.96241V35.6987C0.0654297 36.3871 0.625546 36.9472 1.31394 36.9472H3.02618C3.51795 36.9472 3.91797 36.5472 3.91797 36.0554C3.91797 35.7603 4.15797 35.5203 4.45304 35.5203H20.3626C20.6577 35.5203 20.8977 35.7603 20.8977 36.0554C20.8977 36.5472 21.2977 36.9472 21.7895 36.9472H23.5017C24.1901 36.9472 24.7502 36.3871 24.7502 35.6987V2.38134C24.7502 1.29949 23.8701 0.419403 22.7883 0.419403ZM23.6801 35.6987C23.6801 35.797 23.6001 35.877 23.5017 35.877H21.958C21.8689 35.0756 21.1874 34.4502 20.3626 34.4502H4.45304C3.62817 34.4502 2.9467 35.0756 2.85766 35.877H1.31394C1.26665 35.877 1.22132 35.8582 1.18788 35.8247C1.15445 35.7913 1.13564 35.746 1.13558 35.6987V33.2426H15.6911C15.9867 33.2426 16.2262 33.003 16.2262 32.7075C16.2262 32.412 15.9867 32.1725 15.6911 32.1725H1.13558V28.9612H23.6801V32.1725H18.1927C17.8971 32.1725 17.6576 32.412 17.6576 32.7075C17.6576 33.003 17.8971 33.2426 18.1927 33.2426H23.6801V35.6987Z" fill="white" />
                                    <path d="M10.6856 17.1437V14.3817C10.6856 14.0862 10.4461 13.8466 10.1505 13.8466C9.85492 13.8466 9.61542 14.0862 9.61542 14.3817V17.1437C9.61542 17.4392 9.85492 17.6788 10.1505 17.6788C10.4461 17.6788 10.6856 17.4392 10.6856 17.1437ZM15.2 17.1437V14.3817C15.2 14.0862 14.9605 13.8466 14.665 13.8466C14.3694 13.8466 14.1299 14.0862 14.1299 14.3817V17.1437C14.1299 17.4392 14.3694 17.6788 14.665 17.6788C14.9605 17.6788 15.2 17.4392 15.2 17.1437ZM14.1291 30.0314H10.6712C10.3756 30.0314 10.1361 30.2709 10.1361 30.5665C10.1361 30.862 10.3756 31.1015 10.6712 31.1015H14.1291C14.4247 31.1015 14.6642 30.862 14.6642 30.5665C14.6642 30.2709 14.4247 30.0314 14.1291 30.0314Z" fill="white" />
                                    </svg>
                                </div>
                                <h4><?php echo get_sub_field('title'); ?></h4>
                                <a href="<?php echo get_sub_field('button_link')['url']; ?>" class="read-more"><?php echo get_sub_field('button_link')['title']; ?> <svg width="50" height="19" viewBox="0 0 50 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M48.718 10.028H1.02564C0.458333 10.028 0 9.56971 0 9.0024C0 8.4351 0.458333 7.97676 1.02564 7.97676H46.2404L40.016 1.7524C39.6154 1.35176 39.6154 0.701122 40.016 0.300481C40.4167 -0.10016 41.0673 -0.10016 41.468 0.300481L49.4455 8.27804C49.7404 8.57292 49.8269 9.01202 49.6667 9.39663C49.5064 9.77804 49.1314 10.028 48.718 10.028Z" fill="#161616" />
                                    <path d="M40.7308 18.0152C40.468 18.0152 40.2051 17.9159 40.0064 17.7139C39.6058 17.3133 39.6058 16.6627 40.0064 16.262L47.9936 8.27485C48.3942 7.8742 49.0449 7.8742 49.4455 8.27485C49.8462 8.67549 49.8462 9.32613 49.4455 9.72677L41.4583 17.7139C41.2564 17.9159 40.9936 18.0152 40.7308 18.0152Z" fill="#161616" />
                                    </svg>
                                </a>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                        <div class="row mt-3 mt-md-5">
                            <div class="col-12 m-auto text-center">
                                <a href="><?php echo get_sub_field('read_more')['url']; ?>" class="btnn"><?php echo get_sub_field('read_more')['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </section>



                 <?php elseif( get_row_layout() == 'project_section' ): ?>  

                    <section class="projects">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 top-heading text-center">
                                    <h2>Our recent <span>Projects</span></h2>
                                </div>
                            </div>

                            <div class="row pro-row">
                                <div class="col-12">
                                    <div class="pro-grid-container">
                                        <div class="pro-left pro-col">
                                            <div class="pro-content">
                                            <div class="img">
                                                <a href="images/project-img1.png" class="glightbox">
                                                    <img src="images/project-img1.png" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <p class="mb-0">Tellus ridiculus senectus scelerisque; ornare tortor cras conubia facilisis.</p>
                                        </div>
                                        </div>

                                        <div class="pro-col">
                                            <div class="pro-content">
                                            <div class="img">
                                                <a href="images/project-img2.png" class="glightbox">
                                                    <img src="images/project-img2.png" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <p class="mb-0">Tellus ridiculus senectus scelerisque; ornare tortor cras conubia facilisis.</p>
                                        </div>
                                        </div>

                                        <div class="pro-col">
                                            <div class="pro-content">
                                            <div class="img">
                                                <a href="images/project-img3.png" class="glightbox">
                                                    <img src="images/project-img3.png" alt="" class="img-fluid">
                                                </a>
                                            </div>
                                            <p class="mb-0">Tellus ridiculus senectus scelerisque; ornare tortor cras conubia facilisis.</p>
                                        </div>
                                        </div>

                                        <div class="pro-col">
                                            <div class="pro-content">
                                            <div class="img">
                                            <a href="images/project-img4.png" class="glightbox">
                                                <img src="images/project-img4.png" alt="" class="img-fluid">
                                            </a>
                                            </div>
                                            <p class="mb-0">Tellus ridiculus senectus scelerisque; ornare tortor cras conubia facilisis.</p>
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