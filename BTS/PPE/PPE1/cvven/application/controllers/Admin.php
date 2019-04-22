<?php

 class Admin extends CI_Controller{
   public function __construct(){
                parent::__construct();
                $this->load->library('form_validation');
                $this->load->model('admin_model');
                $this->load->helper('url_helper');
                $this->form_validation->set_message('required', 'Error Message');
        }
    /**
     * Authentification de l'admin
     */
    public function loginadmin(){
      $page='loginadmin';
      $this->form_validation->set_rules('login', 'login','required');
      $this->form_validation->set_rules('password', 'Password','required');

      if ($this->form_validation->run()==False){
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page);
        $this->load->view('templates/footer');
      }else{
        //faire get de userlogin
        $UserLogin=$this->input->post('login');
        $UserPassword=$this->input->post('password');

      $numadmin=$this->admin_model->loginadmin($UserLogin,$UserPassword);
      //if($this->session->userdata('logged_in')){
        //  $this->session->unset_userdata('logged_in');
         // $this->session->unset_userdata('numadh');
         // $this->session->unset_userdata('login');
      //}
      if ($numadmin) {
        $userdataAdmin=array('numadmin' => $numadmin,
                             'login' => $UserLogin,
                             'logged_inAdmin'=>true
                           );
          $this->session->set_userdata($userdataAdmin);

         $data['name']=$this->input->post('login');
         $this->load->view('templates/header');
         $this->load->view('pages/index');
         $this->load->view('templates/footer');
      }

    }
  }
  /**
   * function de log out
   * 
   */
    public function login_out_admin(){
      //unset user data
      $this->session->unset_userdata('logged_inAdmin');
      $this->session->unset_userdata('numadmin');
      $this->session->unset_userdata('login');

      header('Location: http://www.buyukcem.com/BTS/PPE/PPE1/cvven/');
    }  
    
    /**
     * Page de la liste des Clients
     * @return void
     */
    public function ListeClient(){
      $page='ListeClient';
      $data['results']=$this->Users_model->GetListeClient();
   
      $this->load->view('templates/header');
      $this->load->view('pages/'.$page.$data);
      $this->load->view('templates/footer');
      }
}
