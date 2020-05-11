<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stutz_portfolio
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link href="https://fonts.googleapis.com/css?family=Lato|Montserrat&display=swap" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open();

//vars
$h1_title = get_field('h1_title');
$description_text = get_field('description_text');
$image = get_field('background_image');
?>

<div id="page" class="site">
	<header id="masthead" class="site-header">
			<section class="hero is-large">
			  <div  class="hero-body">
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			    <div class="container">
						<div class="columns">
							<div class="column">
					      <h1 class="tracking-in-expand"><?php echo $h1_title; ?></h1>
								<p class="tracking-in-expand-p"><?php echo $description_text; ?></p>
								<div class="button-section">
									<a id="work_btn" class="work-button roll-in-left">My Work</a>
									<a id="contact_btn" class="roll-in-left">Contact Me</a>
								</div>
							</div>
						</div>
			    </div>
			  </div>
		</section>
	</header><!-- #masthead -->
