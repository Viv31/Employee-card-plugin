<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

function Employee_card_custom_post_type(){
	register_post_type('Employee-Card',array(
		'labels'=>array(
			'name'=> __('Employee Cards'),
			'Singular_name'=>__('e-Card')
		),
		'supports'=>array('title','editor','thumbnail'),
		'public'=>true,
		'has_archive'=>true,
		'can_export'=>true,
		'rewrite' =>array('slug'=>'e-card')
));
}
add_action('init','Employee_card_custom_post_type');

?>