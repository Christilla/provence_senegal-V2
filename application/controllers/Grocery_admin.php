<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Grocery_admin extends CI_Controller {

    public function __construct(){

        parent::__construct();

        $this->load->database();
        $this->load->helper('url');

        $this->load->library('grocery_CRUD');
        $this->config->load('grocery_crud');

    }

    public function news()
    {
        $datas['title'] = 'CRUD_news';

        $crud = new grocery_CRUD();

        /* Create a new CRUD */

        $crud->set_table('news');

        $crud->set_theme('flexigrid');
      
        $output = $crud->render();
    
        $datas['css_files'] = $output->css_files;

        $this->load->view('templates/header',$datas);
        $this->load->view('pages/CRUD_news',$output);
        $this->load->view('templates/footer',$datas);

    }

}

