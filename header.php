<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="maximum-scale=5.0, user-scalable=yes, width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<title><?php wp_title(""); ?></title>

	<?php if(!is_404()): ?>
		<?php miniCSS::url( 'https://fonts.googleapis.com/css?family=Lato:400,700|Playfair+Display:400,400i,700i' ); ?>
	<?php endif; ?>

	<?php wp_head()?>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-4492713-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-4492713-1');
	</script>

</head>

<?php bodyClass(); ?>

<a href="#skiptomaincontent" style="display:none;">Skip to main content</a>

<header class="site-header <?php echo is_front_page() ? 'front-header' : 'int-header b-lazy will-parallax parallax-internal-header'; ?>" <?php get__header__image(); ?> >

	<div class="nav-bar">
		<div class="menu-trigger">
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="hamburger"></div>
			<div class="trigger-text">MENU</div>
		</div>
		<div class="nav-bar-logo">
			<?php echo is_front_page() ? '<h1>' : ''; ?>
			<a href="<?php bloginfo('url'); ?>">
				<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Santa Barbara Plastic Surgery Center & Medi Spa">
			</a>
			<?php echo is_front_page() ? '</h1>' : ''; ?>
		</div>
		<div class="navbar-social">
			<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
			<a href="<?php the_field('twitter','options'); ?>" target="_blank" rel="noopener" title="twitter" aria-label="twitter"><i class="fab fa-twitter"></i></a>
			<a href="<?php the_field('instagram','options'); ?>" target="_blank" rel="noopener" title="instagram" aria-label="instagram"><i class="fab fa-instagram"></i></a>
			<a href="<?php the_field('youtube','options'); ?>" target="_blank" rel="noopener" title="youtube" aria-label="youtube"><i class="fab fa-youtube"></i></a>
		</div>
		<div class="nav-bar-extras">
			<div class="extra-names">
				Wesley G. Schooler, M.D., F.A.C.S.   <span>|</span>   Leslie Irvine, M.D.
			</div>
			<div class="connect">
				<i class="fas fa-comments"></i>
			</div>
			<?php if(have_rows('locations', 'option')): ?>
				<?php while(have_rows('locations', 'option')): the_row(); ?>
					<a href="<?php the_sub_field('phone_link'); ?>" class="head-phone track-outbound" data-label="Phone - Header"><?php the_sub_field('phone'); ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> 
		<nav>
			<?php wp_nav_menu( array(
				'menu' 		=> 'Main',
				'container_class' => 'menu-wrap menu-is-closed',
				'menu_id'	=> 'menu-main',
				'menu_class' => 'main-menu',
			)); ?>
		</nav> 
	</div>

	<?php 
		// Inside Page Title
		if(!is_front_page()): 
	 ?>

		<div class="inside-logo">
			 <a href="<?php bloginfo('url'); ?>">
			 	<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo">
			 </a>
		</div>

		<section class="page-title">
				<?php if(is_front_page()): ?>
					<h1><?php // do nothing if homepage  ?></h1>
				<?php elseif(this_is('gallery-case')): ?>
					<?php $category_title =  get_the_title($post->in_cat_ID); ?>
					<h1><?php echo $category_title ?> Gallery</h1>
				<?php elseif(this_is('gallery-child')): ?>
					<?php $category_title =  get_the_title($post->in_cat_ID); ?>
					<h1><?php echo $category_title ?> Gallery</h1>
				<?php elseif(this_is('gallery')): ?>
					<h1>Photo Gallery</h1>
				<?php elseif (is_archive() =='newsroom'): ?>
					<div class="heading-text">Newsroom</div>
				<?php elseif (is_search()): ?>
					<div class="heading-text">Search Results</div>
				 <?php elseif (is_home() or is_archive()): ?>
					<div class="heading-text">Blog</div>
				<?php elseif (is_single()): ?>
					<div class="heading-text">Blog</div>
				<?php else: ?> 
					<h1><?the_title();?></h1>
				<?php endif; ?>
				<div class="page-title-split-line"></div>
		</section>
	<?php endif; ?>

</header> 

<?php if(!is_front_page() ): // Inside Page Breadcrumbs  ?>
<section class="site-crumbs">
	<?php echo __salaciouscrumb(); ?>
</section>
<?php endif; ?>

