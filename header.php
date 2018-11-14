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
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav>
                        <h1 class="branding">
                            <?php bloginfo( 'name' ); ?>
                        </h1>
                        <?php 
                        wp_nav_menu(array("menu"=>"primary")); ?>
                    </nav>
                </div>
                
        </div>
    </header><!-- #masthead -->

    <div id="content" class="site-content" tabindex="-1">
        <div class="col-full">