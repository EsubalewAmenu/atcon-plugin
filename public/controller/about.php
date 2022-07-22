<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_about
 * @subpackage Ds_about/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_about
 * @subpackage Ds_about/admin
 * @author     Esubalew Amenu <esubalew.steps009@gmail.com>
 */
class DS_about
{

	public function __construct()
	{
	}

	public function ds_about_a1_code()
	{

        $args = array(
            'post_type'      => 'abouts',
            'post_status'    => 'publish',
            // 'posts_per_page' => 3,
        );
        $abouts = get_posts($args);

	include_once ds_atcon_PLAGIN_DIR . '/public/partials/about/a1.php';
	}
	public function ds_about_steps_code()
	{        
		$args = array(
		'post_type'      => 'steps',
		'post_status'    => 'publish',
		// 'posts_per_page' => 3,
	);
	$steps = get_posts($args);
	include_once ds_atcon_PLAGIN_DIR . '/public/partials/about/steps.php';
	}
	public function ds_about_features_code()
	{
		   
		$args = array(
			'post_type'      => 'features',
			'post_status'    => 'publish',
			// 'posts_per_page' => 3,
		);
		$features = get_posts($args);
	include_once ds_atcon_PLAGIN_DIR . '/public/partials/about/features.php';
	}

}