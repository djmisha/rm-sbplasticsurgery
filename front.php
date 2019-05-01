<?
	// Template Name: Home
?>

<?get_header()?>
		

<div class="welcome-parallax will-parallax parallax-welcome b-lazy" id="skiptomaincontent" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<div class="welcome-logo">
		<a href="<?php bloginfo('url'); ?>">
			<img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo">
		</a>
	</div>
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<?php the_field('welcome_content'); ?>
			<a href="<?php the_field('gallery_button'); ?>" class="button" rel="nofollow" rel="nofollow">Patient Photo Gallery</a>
		</div>
	</div>
</div> 



<div class="home-featured-procedures">
	<?php if(have_rows('featured_procedures_1')): ?>
		<?php $count = 3; ?>
		<ul>
			<?php while(have_rows('featured_procedures_1')): the_row(); ?>
				<li style="background-image: url('<?php the_sub_field('image'); ?>');" class="wow fadeIn" data-wow-offset="0" data-wow-delay=".<?echo $count; ?>0s" data-wow-duration="1.5s" >
						<div class="feat-overlay">
							<div class="feat-links">
								
							<?php if(have_rows('procedure_links')): ?>
									<?php while(have_rows('procedure_links')): the_row(); ?>
										<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
											<?php the_sub_field(''); ?>
									<?php endwhile; ?>
							<?php endif; ?>
						</div>
							</div>
						<div class="proced-name">
							<?php the_sub_field('headline'); ?>
						</div>
				</li>
				<?php $count++; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>

<section class="home-doctor home-doctor-parallax will-parallax b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-doctors.jpg">
	<div class="doc-content">
		<img data-src="<?php bloginfo('template_directory'); ?>/images/img-doctors.png" alt="doctor" class="doc-image b-lazy" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
		<h2><?php the_field('doctor_head'); ?></h2>
		<?php the_field('doctor_cont'); ?>
		<a href="<?php the_field('meet_dr_scholer_button'); ?>" rel="nofollow" class="button">Meet Dr. Schooler</a>
		<a href="<?php the_field('meet_dr_irvine_button'); ?>" rel="nofollow" class="button">Meet Dr. Irvine</a>
	</div>
</section>


<div class="home-featured-breast b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-feature.jpg" >
		<span><?php the_field('breast_feature_subheadline'); ?></span>
		<h2><?php the_field('breast_feature_headline'); ?></h2>
		<?php the_field('breast_feature_content'); ?>
		<a href="<?php the_field('breast_aug_link'); ?>" class="button" rel="nofollow" name="Learn More">Learn More</a>
</div>



<section class="home-media-results">
	<div class="the-media">
		<h2>In the Media</h2>
		<div class="media-border-smaller"></div>
		<?php the_field('home_media_content'); ?>
	</div>
	<div class="the-results">
		<h2>Patient Results</h2>
		<div class="media-border-smaller"></div>
		<div class="results-images">
			<img src="<?php the_field('before_image'); ?>" alt="results before image">
			<img src="<?php the_field('after_image'); ?>" alt="results after image">
		</div>
		<a href="<?php bloginfo('template_directory'); ?>/gallery/" class="button" rel="nofollow">Photo Gallery</a>
	</div>	
</section>	

<?get_footer()?>