<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_services
 * @subpackage Ds_services/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_services
 * @subpackage Ds_services/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_services
{

	public function __construct()
	{
	}

	public function ds_services_home_code()
	{

		$args = array(
			'post_type'      => 'services',
			'post_status'    => 'publish',
			// 'posts_per_page' => 3,
		);
		$services = get_posts($args);
	include_once ds_atcon_PLAGIN_DIR . '/public/partials/services/home.php';
	}
	public function ds_services_testimonials_code()
	{

		$args = array(
			'post_type'      => 'testimonialss',
			'post_status'    => 'publish',
			// 'posts_per_page' => 3,
		);
		$testimonialss = get_posts($args);
	include_once ds_atcon_PLAGIN_DIR . '/public/partials/services/testimonials.php';
	}

}