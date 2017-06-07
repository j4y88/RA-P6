<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>
this is single.php
<div class="flex flex-center-j">
	<section id="latestjournals" class="flex width90">
		<div class="width75">
			<div class="flex flex-col verticalLine">
			  	<div class="width90 marginB25">
			  		<style>
			  		.journalImage {
			  			background:url('<?php echo get_the_post_thumbnail_url(); ?>') center center;
			  			background-size: cover;
			  			}
			  		</style>
			  		<div class='journalImageCell journalImage'>
						<p class="journalTitleTxt"><?php echo get_the_title(); ?></p>
						<p class="journalDateTxt"><?php echo get_the_date(); ?></p>
					</div>
					<p class="journalContentTxt"><?php echo get_the_content(); ?></p>
				    </a>
				</div>
			</div>
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
		<div class="flex flex-col marginH10">
			<?php dynamic_sidebar('sidebar'); ?>
		</div>
	</section>
</div>


<?php get_footer(); ?>