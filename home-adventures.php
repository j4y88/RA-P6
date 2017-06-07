<?php
$args = array(
	'numberposts' => 4,
	'post_type' => 'adventures',
	'order' => 'DESC',
	'post_status' => 'publish', 
);
$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
?>
<style>
	.pic0 {
		background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_posts[0][ID])); ?>') center no-repeat;
		background-size: cover;
	}
	.pic1 {
		background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_posts[1][ID])); ?>') center no-repeat;
		background-size: cover;
	}
	.pic2 {
		background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_posts[2][ID])); ?>') center no-repeat;
		background-size: cover;
	}
	.pic3 {
		background: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id($recent_posts[3][ID])); ?>') center no-repeat;
		background-size: cover;
	}
</style>

<section id="latest" class="">
	<div class="flex flex-col flex-center-a">
		<h2 class="center-text">LATEST ADVENTURES</h2>
		<div class="flex">
			<div class="pic0 latestPhoto1">
				<h2 class="padding10 latestTxt"><?php echo $recent_posts[0][post_title]; ?></h2>
				<a href="<?php echo $recent_posts[0][guid]; ?>">
					<button id="ID" type="button" class="latestButton marginH10" name="ID">READ MORE</button>
				</a>
			</div>
			<div class="flex flex-col">
				<div class="pic1 latestPhoto2">
					<h2 class="padding10 latestTxt2"><?php echo $recent_posts[1][post_title]; ?></h2>
					<a href="<?php echo $recent_posts[1][guid]; ?>">
						<button id="ID" type="button" class="latestButton marginH10" name="ID">READ MORE</button>
					</a>
				</div>
				<div class="flex">
					<div class="pic2 latestPhoto3">
						<h2 class="padding10 latestTxt3"><?php echo $recent_posts[2][post_title]; ?></h2>
						<a href="<?php echo $recent_posts[2][guid]; ?>">
							<button id="ID" type="button" class="latestButton marginH10" name="ID">READ MORE</button>
						</a>
					</div>
					<div class="pic3 latestPhoto4">
						<h2 class="padding10 latestTxt3"><?php echo $recent_posts[3][post_title]; ?></h2>
						<a href="<?php echo $recent_posts[3][guid]; ?>">
							<button id="ID" type="button" class="latestButton marginH10" name="ID">READ MORE</button>
						</a>
					</div>
				</div>
			</div>
		</div>
		<a href="./adventures"><button id="latestOne" type="button" class="lastestMoreButton" name="latestOne">MORE ADVENTURES</button></a>
	</div>
	
</section>
