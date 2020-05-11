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
				<div class="container">
					<h2>My Work</h2>
					<div class="columns is-multiline is-mobile">
				<?php
					// check if the repeater field has rows of data
					if( have_rows('featured_work') ):
					 	// loop through the rows of data
					    while ( have_rows('featured_work') ) : the_row();
							$title = get_sub_field('work_title');
							$category = get_sub_field('work_category');
							$link = get_sub_field('work_link');
							$image = get_sub_field('work_image'); ?>

								<div class="column is-12-mobile is-half-tablet is-one-third-desktop">
									<div class="title-wrap">
										<h3><?php echo $title; ?></h3>
										<h4><?php echo $category; ?></h4>
									</div>
									<figure class="image is-4by3">
										<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
									</figure>
									<a class="site-button" href="<?php echo $link; ?>">View Site</a>
								</div>

				<?php	  endwhile;
						else :
					    // no rows found
					endif; ?>
				</div><!-- .columns -->
			</div><!-- .container -->
		</section><!-- #portfolio -->
		</main><!-- #main -->


<?php

get_footer();
