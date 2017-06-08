<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header();
?>
this is single-adventures.php
<div class="flex flex-center-j">
	<section id="latestjournals" class="flex width75">
		<?php if (have_posts()) { 
			while (have_posts()) : the_post();?>
			  	<div class="flex flex-col width90 marginB25">
					<h2 class=""><?php echo get_the_title(); ?></h2>
					<h4 class=""><?php echo get_the_date(); ?></h4>
					<p class="journalContentTxt"><?php echo get_the_content(); ?></p>
					<div class="flex">
						<a href='#' class='btn-black'><i class='fa fa-facebook' aria-hidden='true'></i> Like</a>
						<a href='#' class='btn-black'><i class='fa fa-twitter' aria-hidden='true'></i> Tweet</a>
						<a href='#' class='btn-black'><i class='fa fa-pinterest' aria-hidden='true'></i> Pin</a>
					</div>
				</div>
			<?php endwhile; 
		}?>
	</section>
</div>
<?php get_footer(); ?>