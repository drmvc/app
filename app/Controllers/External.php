<?php namespace DrMVC\App\Controllers;

use DrMVC\Core\Controller;

/**
 * Class Main
 * @package DrMVC\App\Controllers
 */
class External extends Controller
{
    // Styles
    public $styles_vendor;
    public $styles;

    // Scripts
    public $scripts_vendor;
    public $scripts;

    /**
     * Main constructor
     */
    public function __construct()
    {
        parent::__construct();

        // Include APPPATH/Language/LANGUAGE_CODE/index.php file
        $this->language->load('index');
        // Include APPPATH/Language/LANGUAGE_CODE/second.php file
        $this->language->load('second');

        // Data array available in view namespace into $data variable
        $this->data = array(
            'SITETITLE' => SITETITLE,
            // Add languages into work array
            'lng' => $this->language,
            // Vendor styles
            'vendor_styles' => array(
                'bootstrap/dist/css/bootstrap.min.css',
            ),
            // Vendor scripts
            'vendor_scripts' => array(
                'jquery/dist/jquery.min.js',
                'bootstrap/dist/js/bootstrap.min.js',
            ),
            // Application styles
            'styles' => array(),
            // Application scripts
            'scripts' => array()
        );

        $loader = new \Twig_Loader_Filesystem(APPPATH . '/Views/' . THEME);
        $options = array();
        //$options = array('cache' => APPPATH . '/../cache/', 'auto_reload' => true);
        $this->view = new \Twig_Environment($loader, $options);
    }

}