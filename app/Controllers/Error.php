<?php namespace DrMVC\App\Controllers;

/**
 * Class Error
 * @package DrMVC\App\Controllers
 */
class Error extends External
{
    /**
     * Error constructor
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function action_index()
    {
        $this->view->data['title'] = '404';

        // Render the templates
        echo $this->view->render('error.twig', array('data' => $this->data));
    }
}