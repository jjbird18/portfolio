<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stutz_portfolio
 */

get_header();

$about_title = get_field('about_title');
$about_description = get_field('about_description');


?>

		<main id="main" class="site-main">
			<section id="about_section">
				<div class="container">
					<h2><?php echo $about_title; ?></h2>
					<p><?php echo $about_description; ?></p>
				</div>
			</section>


			<section id="portfolio_section">
				<div class="container is-fullhd">
					<div class="columns is-multiline is-mobile">
				<?php
					// check if the repeater field has rows of data
					if( have_rows('featured_work') ):
						$count = 0;
						$total = count(get_field('featured_work'));
					 	// loop through the rows of data
					    while ( have_rows('featured_work') ) : the_row();
							$title = get_sub_field('work_title');
							$category = get_sub_field('work_category');
							$link = get_sub_field('work_link');
							$image = get_sub_field('work_image'); ?>
							<?php if ($count == 0  ) { ?>

								<div class="column is-12-mobile is-6-tablet is-12-desktop work-tile-full">
									<div style="background: url(<?php echo $image['url']; ?>);" class="work-wrap">
										<div class="overlay-wrap animation-element">
											<div class="inner-content">
													<h3><?php echo $title; ?></h3>
													<h4><?php echo $category; ?></h4>
													<a target="_blank" rel="noreferrer noopener" class="site-button" href="<?php echo $link; ?>">View Site</a>
												</div>
											</div>
										</div>
								 </div>
						 <?php } elseif ($count > 0) { ?>
						 <div class="column is-12-mobile is-6-tablet is-6-desktop work-tiles">
								<div style="background: url(<?php echo $image['url']; ?>);" class="work-wrap">
									<div class="overlay-wrap animation-element">
										<div class="inner-content">
												<h3><?php echo $title; ?></h3>
												<h4><?php echo $category; ?></h4>
												<a target="_blank" rel="noreferrer noopener" class="site-button" href="<?php echo $link; ?>">View Site</a>
											</div>
										</div>
									</div>
								</div>

						 <? } ?>
 				<?php $count++; ?>
				<?php	  endwhile;
						else :
					    // no rows found
					endif; ?>
				</div><!-- .columns -->
			</div><!-- .container -->
		</section><!-- #portfolio -->

		<section id="contact_section">
				<div class="container">
					<div class="columns is-centered">
						<div class="column is-12-mobile is-9">
							<h2>Contact Me</h2>
							<p>Thanks for stopping by. If you want to work together or have any questions, please reach out to me. I would love to hear from you.</p>
							<?php echo do_shortcode('[contact-form-7 id="62" title="Contact form"]'); ?>
						</div>
				</div>
			</div>
		</section><!-- #contact -->
		</main><!-- #main -->


<?php

get_footer();
