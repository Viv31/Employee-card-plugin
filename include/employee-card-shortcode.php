<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function Employee_Shortcode(){
$args = array(
'post_type'=> 'employee-card',
'orderby'    => 'ID',
'post_status' => 'publish',
'order'    => 'DESC',
'posts_per_page' => -1 // this will retrive all the post that is published 
);
$result = new WP_Query( $args );
if ( $result-> have_posts() ) : ?>
<?php while ( $result->have_posts() ) : $result->the_post(); ?>
	<div class="emp-card" style="background-color:#ccc;">
<img src="<?php echo  get_the_post_thumbnail_url($result->ID,'post-thumbnail');?>" height="50">
<h3 style="padding: 10px;"><?php the_title(); ?></h3>
<p style="padding: 10px;"><?php the_content(); ?></p> 
</div>  
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
<?php
}
?>
<?php
add_shortcode('Employee-Card','Employee_Shortcode');

?>
