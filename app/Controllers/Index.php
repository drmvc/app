<?php namespace DrMVC\App\Controllers;

use DrMVC\Helpers\UUID;
use DrMVC\Helpers\Cleaner;
use DrMVC\App\Models\Example;

/**
 * Class Index
 * @package DrMVC\App\Controllers
 */
class Index extends External
{
    /**
     * @var Example
     */
    public $_example;

    /**
     * Index constructor
     */
    public function __construct()
    {
        parent::__construct();

        // Create test class
        $this->_example = new Example();
    }

    /**
     * Index page action
     */
    public function action_index()
    {
        // Page title
        $this->data['title'] = $this->language->get('index');

        // Simple examples how to work with methods
        $this->data['uuid'] = UUID::v4();
        $this->data['dummy'] = Cleaner::run('~!@#$%^&*()_+');

        // Render the templates
        echo $this->view->render('index.twig', array('data' => $this->data));
    }

    public function action_page1()
    {
        // Render the templates
        echo $this->view->render('page1.twig', array('data' => $this->data));
    }

    public function action_page2()
    {
        // Render the templates
        echo $this->view->render('page2.twig', array('data' => $this->data));
    }
}
