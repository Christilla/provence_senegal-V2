<?php

class Pages extends CI_Controller 
{

    public function __construct()
	{
        parent::__construct();
       
	}

    public function view($page = 'home')
    {    
        
        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->helper('download');

            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    
                    show_404();
            }

            $data['title'] = ucfirst($page); 

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }

}