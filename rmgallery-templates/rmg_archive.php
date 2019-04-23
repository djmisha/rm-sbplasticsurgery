<? get_header();?>

<main class="interior">
	    <article class="content" id="skiptomaincontent">
		<div class="">
			<?php echo rmg_archive_content(); ?>
		</div>
		
		<?php

			$cat_cpt = rmg_helpers::$category_cpt_name;
			global $rmg_case;
			$args = array(
	        'post_type'     => $cat_cpt, #rmg-category
	        'post_parent'   => 0, #first we get the parents
	        'orderby'       => 'menu_order',
	        'order'         => 'ASC'
	    );

	    ?>
		
				<div class="gal-buttons">
					<?php query_posts( $args ); if(have_posts()) : while (have_posts()) : the_post();?>
						<a href="#<?php echo $post->post_name;?>" class="button"><?php echo $post->post_title;?></a>
					<?php endwhile; endif;?>
				</div>


		    	<?php query_posts( $args ); if(have_posts()) : while (have_posts()) : the_post();?>

		    	<div class="category-slide slide" data-procedure-name="<?php echo $post->post_title;?>">
		    		<h2 class="" id="<?php echo $post->post_name;?>"><?php the_title(); ?></h2>
		    		<?php
		    		$postCases	= $post->cases;
					$bnaPerCase	= 1;	# BNA per case

					foreach ($postCases as $case):
						$caseId 	= $case['case_id'];
						$caseLink	= $rmg_case::make_case_link( array( 'position' => $case['position'] , 'category_id' => $post->ID) );
						$caseName 	= $rmg_case::make_case_name( array( 'position' => $case['position'] ) );
						$images		= $case['rmg_case_imgs'];
						$imgCount	= 0;
						$caseContent = $case['post_content'];

				?>
				<div class="single-case case-<?php echo $caseId ?>">
					<div class="img-set">
						<?php
						foreach ( $images as $img ):
							if($imgCount == $bnaPerCase) break; # BNA per case
							if(!empty($img['before_image_path'])):

								echo '<div class="before">';
								// echo $caseName;
								// echo '" class="fancybox" href="';
								// echo $rmg_case::get_image($img['before_image_path'], 'original');
								echo '<img src="';
								echo $rmg_case::get_image($img['before_image_path'], 'medium');
								echo '" alt="before" /><label>Before</label></div>';										
							endif;

							if(!empty($img['after_image_path'])):
								echo '<div class="after">';
								// echo $caseName;
								// echo '" class="fancybox" href="';
								// echo $rmg_case::get_image($img['after_image_path'], 'original');
								echo '<img src="';
								echo $rmg_case::get_image($img['after_image_path'], 'medium');
								echo '" alt="after" /><label>After</label></div>';
							endif;
							$imgCount++;

							

						endforeach;
						?>
					</div>
					<?php echo '<div class="patient-details">';  ?>
					<?php echo '<h3>'.$caseName.'</h3>'; ?>
					<?php echo  $caseContent . '</div>';  ?>
				</div>

				<?php
				#endof-cases;
			endforeach;
			?>
		</div><!-- end of slide/procedure -->

	<?php endwhile; endif;?>
</article>
<?php get_sidebar()?>

</main>

<? get_footer();?>