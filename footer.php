
<footer>
	
	<section class="upper-footer b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-footer.jpg">
			

	</section> 
	
	<div class="middle-footer">
		<div class="footer-logos">
			<?php if(have_rows('footer_logos', 'option')): ?>
				<ul>
					<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
						<li>
							<img data-src="<?php the_sub_field('logo'); ?>" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" alt="top doc logo">
						</li>
					<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>

	<section class="lower-footer">
		 <div class="footer-address">
		 	<a href="<?php bloginfo('url'); ?>">
		 		<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Logo" class="b-lazy">
		 	</a>
			<?php if(have_rows('locations', 'option')): ?>
				<?php while(have_rows('locations', 'option')): the_row(); ?>
					<div class="the-loc">
						<div class="loc-phone">
							<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
								<?php the_sub_field('phone', 'option'); ?></a>
						</div>
						<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound" data-label="Address - Footer" target="_blank"  rel="noopener">
							<!-- <?php the_sub_field('name', 'option'); ?><br> -->
							<?php the_sub_field('address', 'option'); ?> <?php the_sub_field('city', 'option'); ?> <br />
						</a>
						<a href="https://www.santabarbarabreast.com"><span>Visit Our Breast site: </span>www.santabarbarabreast.com</a>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div> 
		<div class="model-disc">
			<p>Stock model images are used throughout this website and are for illustrative purposes only. All before-and-after photos and patient testimonials on our site are from actual patients, and have been published with permission. Individual results may vary.</p>
		</div>
		<div class="split-lower">
		<div class="copyright">Copyright &copy; <?=date("Y")?> <?bloginfo('title');?>. All rights reserved | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> </div>
		<div class="rm-sig"><a href="<?php the_field('rm_footer_link', 'options'); ?>" target="_blank" rel="noopener" title="<?php the_field('rm_footer_text', 'options'); ?>"><?php the_field('rm_footer_text', 'options'); ?></a> by <a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener"><?php inline_svg('rm-logo'); ?></a></div>
		</div>
		
	</section>  

</footer>

<?wp_footer();?>

<?php
$bsPort 				= 35730;
$browserSync 			= 'http://rosemontdev.com:'.$bsPort;
$browserSyncHdrs 		= @get_headers($browserSync);
if($browserSyncHdrs):
	?>
	<script async src="http://rosemontdev.com:<?php echo $bsPort?>/browser-sync/browser-sync-client.js?v=2.18.8"></script>
	<?
endif;
?>

</body>
</html>