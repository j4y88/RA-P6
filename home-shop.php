<h2 class="center-text">SHOP STUFF</h2>

<?php
$terms = get_terms( 'type', array(
    'hide_empty' => false,
) );
echo "<div class='flex flex-center-j'>";
foreach ($terms as $term) {
	echo "<div class='flex flex-col flex-center-j home-shop-cell'>";
	echo "<img src='".get_bloginfo("stylesheet_directory")."/assets/images/product-type-icons/".$term->name.".svg' class='height30px'>";
	echo "<p>$term->description</p>";
	echo "<button class='home-shop-button'>$term->name Stuff</button>";
	echo "</div>";
}
echo "</div>";

?>