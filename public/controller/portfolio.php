<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://github.com/EsubalewAmenu
 * @since      1.0.0
 *
 * @package    Ds_portfolio
 * @subpackage Ds_portfolio/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    Ds_portfolio
 * @subpackage Ds_portfolio/admin
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class DS_portfolio
{

	public function __construct()
	{
	}

	public function ds_portfolio_home_code()
	{

		$args = array(
			'post_type'      => 'portfolios',
			'post_status'    => 'publish',
			// 'posts_per_page' => 3,
		);
		$portfolios = get_posts($args);
	include_once ds_atcon_PLAGIN_DIR . '/public/partials/portfolio/home.php';
	}
}