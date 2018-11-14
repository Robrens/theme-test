<?php
get_header();
?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-12">
                    <nav>
                            <?php wp_nav_menu(array("menu"=>"category")); ?>
                    </nav>
                </div>
		</div>
	</div>
</main>

<div>
<?php
    while ( have_posts() ) : the_post();
		the_content();
	endwhile;
?>
</div>
<?php
get_sidebar();
get_footer();
