<?
	// Template Name: Home
?>

<?get_header()?>


<div class="welcome-parallax will-parallax parallax-welcome">
	<div class="welcome" id="skiptomaincontent">
		<div class="welcome-cta">
			<div class="home-logo">
				<a href="<?php bloginfo('url'); ?>">
					<?php inline_svg('logo') ?>
					<h1>Polacek Center for Plastic Surgery</h1>
					<span>Non-Surgical Rejuvenation</span>
					<div class="logo-line-top"></div>
					<span>Lori G. Polacek, MD</span>
					<div class="logo-line-bottom"></div>
				</a>
			</div>
			<div class="home-addy">
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer" target="_blank"  rel="noopener">
							<i class="fas fa-map-marker-alt"></i> <?php the_sub_field('address', 'option'); ?> <?php the_sub_field('city', 'option'); ?>
						</a>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
		</div>
		<div class="welcome-bottom-row">
			<div class="bottom-tag">
				<h2>
					<?php the_field('welcome_headline'); ?>
				</h2> 
					</div>
			<div class="bottom-buttons">
				<a href="<?php the_field('procedures_button'); ?>" class="button" rel="nofollow" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icon-procedure.png" alt="icon">Procedures</a>
				<a href="<?php the_field('request_an_appointment_button'); ?>" class="button" rel="nofollow" rel="nofollow"><img src="<?php bloginfo('template_directory'); ?>/images/icon-calendar.png" alt="icon">Request an Appointment</a>
			</div>
		</div>
	</div>
</div> 


<section class="home-doctor will-parallax home-doctor-parallax">
	<div class="doc-content">
		<img src="<?php bloginfo('template_directory'); ?>/images/img-doctors.png" alt="doctor" class="doc-image">
		<h2><?php the_field('doctor_head'); ?></h2>
		<?php the_field('doctor_cont'); ?>
		<?php if(have_rows('doctor_logos')): ?>
			<ul class="home-buttons-list" >
				<?php while(have_rows('doctor_logos')): the_row(); ?>
					<li>
						<img src="<?php the_sub_field('logo'); ?>" alt="logo image">
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="doctors-buttons">
		<div class="doctors-buttons-again">
			<a href="<?php the_field('doctor_bio_button'); ?>" rel="nofollow">Lori G. Polacek, MD <span>Board-Certified Plastic Surgeon</span> </a>
			<a href="<?php the_field('assistant_bio_button'); ?>" rel="nofollow">Beth Walker <span> Medical Aesthetician </span> </a> 
		</div>
	</div>
</section>


<section class="home-why-choose">
	<div class="choosy-border"></div>
	<h2><?php the_field('why_choose_headline'); ?></h2>
	<div class="choosy-border-smaller"></div>
	<h3><?php the_field('why_choose_subheadline'); ?></h3>
	<div class="why-choose-content">
		<?php the_field('why_choose_content'); ?>
		<?php if(have_rows('why_choose_logos')): ?>
			<ul>
				<?php while(have_rows('why_choose_logos')): the_row(); ?>
					<li>
						<img src="<?php the_sub_field('logo'); ?>" alt="logo">
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="choosy-border"></div>
</section>


<div class="home-featured-procedures">
	<?php if(have_rows('featured_procedures_1')): ?>
		<?php $count = 3; ?>
		<ul>
			<?php while(have_rows('featured_procedures_1')): the_row(); ?>
				<li style="background-image: url('<?php the_sub_field('image'); ?>');" class="wow fadeIn" data-wow-offset="0" data-wow-delay=".<?echo $count; ?>0s" data-wow-duration="1.5s" >
					<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
						<div class="feat-overlay"></div>
						<div class="the-seth">
							<div class="the-seth-button">
								<div class="the-seth-button-again">
									<?php the_sub_field('headline'); ?>
									<span>Learn More</span>
									<div class="seths-line"></div>
								</div>	
							</div>	
						</div>
					</a>
				</li>
				<?php $count++; ?>
			<?php endwhile; ?>
		</ul>
	<?php endif; ?>
</div>


<section class="home-reviews will-parallax home-reviews-parallax">
	<div class="the-review-box">
		<div class="the-review">
			<div class="the-stars">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
			</div>
			<?php the_field('home_reviews_content'); ?>
		</div>
	</div>
	<div class="review-buttons">
		<a href="<?php the_field('read_more_reviews_button'); ?>" class="button" rel="nofollow">Read More Reviews</a>
		<a href="<?php the_field('leave_your_review_button'); ?>" class="button" rel="nofollow">Leave Your Review</a>
	</div>
</section>


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