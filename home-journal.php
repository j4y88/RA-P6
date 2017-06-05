<section id="journal">
	<div>
		<h2 class="center-text">INHABITENT JOURNAL</h2>
	</div>
	<div class="flex flex-col flex-center-a">
		<div class="flex flex-row flex-space-between width90">
	<?php
	$args = array(
	'posts_per_page' => 3,
	'orderby' => 'post_date',
	'order' => 'DESC',
	'post_type' => 'post',
	'post_status' => 'publish', 
	);

	$query = new WP_Query( $args );
	if ($query->have_posts()) {
		while ($query -> have_posts()) : $query -> the_post();
		//show_title();
		?>
		<div class="journalCell">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" onerror="" class="journalThumb">
			<div class="flex flex-col flex-space-between">
				<div class="greyBox flex flex-col flex-grow">
					<div class="">
						<p><?php 
							echo date('j F Y', strtotime(get_the_date()))." / ".get_comments_number()." Comments"; ?>
							</p>
						<h3 class="journalTxt"><?php echo get_the_title(); ?></h3>
					</div>
					<?php echo "<a href='".get_permalink()."'>"; ?>
					<button id="" type="button" class="journalButton" name="journalone">READ ENTRY</button></a>
				</div>
			</div>
		</div>
		<?php
		endwhile;
	}
	?>
	</div>
	</div> 
</section>

