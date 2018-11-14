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

		<div class="col-12">
			<div class="row">
				<?php
			$args = array(
                'category' => array( 'premium', 'utilities' ),
            );
            $products = wc_get_products($args);
			foreach ($products as $product) {
				?>
				<div class="col-lg-4 col-md-6">
					<div class="card" style="width: 18rem;">
						<?php
					$id = $product->get_id();
					?>
						<img class="img-fluid slider" src="<?php echo get_the_post_thumbnail_url($id) ?>" alt="lol">
						<div class="card-body">
							<p class="card-text">
								<?php echo $product->get_description() ?>
							</p>
							<a href="#" class="btn btn-primary">Product info</a>
						</div>
					</div>
				</div>
				<?php
			};
			?>
			</div>
		</div>
	</div>
</main>
<?php
get_sidebar();
get_footer();