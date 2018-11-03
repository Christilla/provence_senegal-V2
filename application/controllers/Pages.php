<?php

class Pages extends CI_Controller 
{

    public function __construct()
	{
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('html');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('security');
    

	}

    public function view($page = 'home')
    {    
        
        

            if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
            {
                    
                    show_404();
            }

            $data['title'] = ucfirst($page); 

            $this->load->view('templates/header', $data);
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer', $data);
    }

    public function connexion(){

        $this->load->model('pages_model');
        $data['title'] = ucfirst('connexion');

        $datas['member'] = $this->session->userdata['oMember'];

        if ($this->form_validation->run('pages/connexion') == FALSE)
        {
            $this->form_validation->set_error_delimiters('<p class ="error"></p>');

            $this->load->view('templates/header',$data);
            $this->load->view('pages/connexion');
            $this->load->view('templates/footer',$data);


        } else {

            $oMember = $this->pages_model->retrieveAdmin(array($this->input->post()['pseudo']));
			if(!is_null($oMember) && password_verify($this->input->post()['password'], $oMember->password) === true){
                
                /* var_dump($this->input->post()['']);
                die();*/
 
				$this->_initSession($oMember);
			}else{
				$this->session->set_flashdata('login_error', "<p class='error'>Vos identifiants de connexion ne sont pas corrects !</p>");
				redirect('connexion#connexion');
            }

           /*  var_dump($this->session->userData());
            die(); */
			redirect('dashboard');

        }
    }   

    protected function _initSession($oMember = null){

        /*  Initialiaze a session  */
        
		if(! is_null($oMember)){
			$this->session->set_userdata('oMember', $oMember);
			return;
		}
       
    }

    public function actu(){

        $this->load->model('news_model');
        $datas['aoNews'] = $this->news_model->get_all();

        $this->load->view('templates/header',$datas);
        $this->load->view('pages/actu',$datas);
        $this->load->view('templates/footer',$datas);

    }

    public function logout(){

        $this->session->unset_userdata('oMember');
        redirect('home');
    }
    
}
