<?php
get_header();
?>
<main>
	<div class="slider">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<?php
							$args = array(
								'category' => array( 'premium' ),
							);
							$products = wc_get_products($args);

							$active = "active";
							foreach ($products as $product) {
							?>
							<div class="carousel-item <?php echo $active; ?>">
								<div class="row">
									<?php $active = ""; ?>
									<div class="col-md-6">
										<?php
                                        $id = $product->get_id();
                                        ?>
										<img class="img-fluid slider" src="<?php echo get_the_post_thumbnail_url($id) ?>" alt="lol">
									</div>
									<div class="col-md-6">
										<p class="description">
											<?php echo $product->get_description() ?>
										</p>
									</div>
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
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">


			<div class="col-12">
				<nav>
					<?php wp_nav_menu(array("menu"=>"category")); ?>
				</nav>
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
	</div>
</main>
<?php
get_sidebar();
get_footer();