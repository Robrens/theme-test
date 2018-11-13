<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php wp_head() ?>
</head>

<body>

    <header id="masthead" class="site-header" role="banner">
        <nav>
            <h1 class="branding">
                <?php the_title(); ?>
            </h1>
            <?php wp_nav_menu(); ?>
        </nav>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <p>plop</p>
                </div>
                <?php
                $args = array(
                    'category' => array( 'prenium' ),
                );
                $products = wc_get_products($args);
                
                // 
                
                foreach ($products as $product) {
                ?>
                <div class="carousel-item">
                    <div class="col-6">
                        <?php
                    $id = $product->get_id();
                    ?><img class="img-fluid" src="<?php echo get_the_post_thumbnail_url($id) ?>"
                            alt="lol">
                    </div>
                    <div class="col-6">
                        <?php
                        ?>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">