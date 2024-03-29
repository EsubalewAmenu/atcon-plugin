<?php

/**
 * The file that defines the core plugin class
 *
 * A class definition that includes attributes and functions used across both the
 * public-facing side of the site and the admin area.
 *
 * @link       https://github.com/EsubalewAmenu/
 * @since      1.0.0
 *
 * @package    Atcon
 * @subpackage Atcon/includes
 */

/**
 * The core plugin class.
 *
 * This is used to define internationalization, admin-specific hooks, and
 * public-facing site hooks.
 *
 * Also maintains the unique identifier of this plugin as well as the current
 * version of the plugin.
 *
 * @since      1.0.0
 * @package    Atcon
 * @subpackage Atcon/includes
 * @author     Esubalew Amenu <esubalew.a2009@gmail.com>
 */
class Atcon {

	/**
	 * The loader that's responsible for maintaining and registering all hooks that power
	 * the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      Atcon_Loader    $loader    Maintains and registers all hooks for the plugin.
	 */
	protected $loader;

	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.
	 * Load the dependencies, define the locale, and set the hooks for the admin area and
	 * the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function __construct() {
		if ( defined( 'ATCON_VERSION' ) ) {
			$this->version = ATCON_VERSION;
		} else {
			$this->version = '1.0.0';
		}
		$this->plugin_name = 'atcon';

		$this->load_dependencies();
		$this->set_locale();
		$this->define_admin_hooks();
		$this->define_public_hooks();

	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
	 * - Atcon_Loader. Orchestrates the hooks of the plugin.
	 * - Atcon_i18n. Defines internationalization functionality.
	 * - Atcon_Admin. Defines all hooks for the admin area.
	 * - Atcon_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-atcon-loader.php';

		/**
		 * The class responsible for defining internationalization functionality
		 * of the plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-atcon-i18n.php';

		/**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-atcon-admin.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/about.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/faq.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/feature.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/portfolio.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/service.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/step.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/team.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/controller/testimonial.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-atcon-public.php';

		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/about.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/faq.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/portfolio.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/services.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/controller/team.php';

		$this->loader = new Atcon_Loader();

	}

	/**
	 * Define the locale for this plugin for internationalization.
	 *
	 * Uses the Atcon_i18n class in order to set the domain and to register the hook
	 * with WordPress.ds_slider_post_type_registration_init
	 * @access   private
	 */
	private function set_locale() {

		$plugin_i18n = new Atcon_i18n();

		$this->loader->add_action( 'plugins_loaded', $plugin_i18n, 'load_plugin_textdomain' );

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_admin_hooks() {

		$plugin_admin = new Atcon_Admin( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'admin_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );



		$DS_Admin_abouts = new DS_Admin_abouts();
		$this->loader->add_action('init', $DS_Admin_abouts, 'ds_about_post_type_registration_init', 1, 1);

		$DS_Admin_faqs = new DS_Admin_faqs();
		$this->loader->add_action('init', $DS_Admin_faqs, 'ds_faq_post_type_registration_init', 1, 1);

		$DS_Admin_features = new DS_Admin_features();
		$this->loader->add_action('init', $DS_Admin_features, 'ds_feature_post_type_registration_init', 1, 1);

		$DS_Admin_portfolios = new DS_Admin_portfolios();
		$this->loader->add_action('init', $DS_Admin_portfolios, 'ds_portfolio_post_type_registration_init', 1, 1);

		$DS_Admin_services = new DS_Admin_services();
		$this->loader->add_action('init', $DS_Admin_services, 'ds_service_post_type_registration_init', 1, 1);

		$DS_Admin_steps = new DS_Admin_steps();
		$this->loader->add_action('init', $DS_Admin_steps, 'ds_step_post_type_registration_init', 1, 1);

		$DS_Admin_teams = new DS_Admin_teams();
		$this->loader->add_action('init', $DS_Admin_teams, 'ds_team_post_type_registration_init', 1, 1);

		$DS_Admin_testimonials = new DS_Admin_testimonials();
		$this->loader->add_action('init', $DS_Admin_testimonials, 'ds_testimonial_post_type_registration_init', 1, 1);
	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function define_public_hooks() {

		$plugin_public = new Atcon_Public( $this->get_plugin_name(), $this->get_version() );

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );

		$DS_about = new DS_about();
		$this->loader->add_shortcode( 'ds_about_a1_code', $DS_about, 'ds_about_a1_code' );
		$this->loader->add_shortcode( 'ds_about_steps_code', $DS_about, 'ds_about_steps_code' );
		$this->loader->add_shortcode( 'ds_about_features_code', $DS_about, 'ds_about_features_code' );

		$DS_faq = new DS_faq();
		$this->loader->add_shortcode( 'ds_faq_home_code', $DS_faq, 'ds_faq_home_code' );

		$DS_portfolio = new DS_portfolio();
		$this->loader->add_shortcode( 'ds_portfolio_home_code', $DS_portfolio, 'ds_portfolio_home_code' );

		$DS_services = new DS_services();
		$this->loader->add_shortcode( 'ds_services_home_code', $DS_services, 'ds_services_home_code' );
		$this->loader->add_shortcode( 'ds_services_testimonials_code', $DS_services, 'ds_services_testimonials_code' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function run() {
		$this->loader->run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function get_plugin_name() {
		return $this->plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Atcon_Loader    Orchestrates the hooks of the plugin.
	 */
	public function get_loader() {
		return $this->loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function get_version() {
		return $this->version;
	}

}
