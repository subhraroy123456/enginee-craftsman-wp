<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Engineer Craftsman</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >

    <div class="scrollToTopBtn">
        <iconify-icon icon="formkit:arrowup"></iconify-icon>
    </div>


    <header>
        <nav>
            <div class="container container-flex">
                <div class="logo">
                    <a href="<?php echo site_url(); ?>">
                        <img src="<?php echo get_field('logo', 'option')['url']; ?>" />
                    </a>
                </div>
                <div class="menu-right">
                    <div class="menu">
                        <div class="times">
                            <iconify-icon icon="stash:times"></iconify-icon>
                        </div>
                        <ul class="list-unstyled p-0 m-0">
                            <li><a href="" class="active">home</a></li>
                            <li><a href="">about</a></li>
                            <li><a href="">services</a></li>
                            <li><a href="">projects</a></li>
                        </ul>
                    </div>

                    <div class="menu-right-btn">
                        <a href="" class="btnn">get a quote</a>
                    </div>
                    <div class="bars">
                        <iconify-icon icon="f7:bars"></iconify-icon>
                    </div>
                </div>
            </div>
        </nav>
    </header>