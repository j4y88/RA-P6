<h2 class="center-text">LATEST ADVENTURES</h2>

<?php

echo "<br><br>";

$args = array(
	'numberposts' => 4,
	'post_type' => 'adventures',
	'order' => 'DESC',
	'post_status' => 'publish', 
);

$recent_posts = wp_get_recent_posts( $args, ARRAY_A );
echo "<br><br>";
echo "<div class='flex'>";
//echo "<div class='flex flex-center-j'>";
foreach ($recent_posts as $post) {
	$url = wp_get_attachment_url( get_post_thumbnail_id($post[ID]));
	echo "<div class='flex flex-col'>";
	echo "<img src='".$url."' class='height30px'>";
	echo "<br>";
	echo $post[post_title];
	echo "</div>";
	
}
echo "</div>";
echo "<br><br>";
?>