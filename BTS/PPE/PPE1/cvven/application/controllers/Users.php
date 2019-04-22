<?php

 class Users extends CI_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('users_model');
    $this->load->helper('url_helper');
    //$this->form_validation->set_message('required', 'Error Message');
}
      /**
       * Enregistrement de l'utilisateur 
       */
     public function enregistrer($page='enregistrer'){
         $this->form_validation->set_rules('nomadh', 'nomadh','required');
         $this->form_validation->set_rules('prenomadh', 'prenomadh','required');
         $this->form_validation->set_rules('login', 'login','required|callback_check_username_exists');
         $this->form_validation->set_rules('mdp', 'Mdp','required');
         $this->form_validation->set_rules('confirmePassWord', 'ConfirmPassWord','required|matches[mdp]');
         $this->form_validation->set_rules('mail', 'mail','required|callback_check_email_exists');
         $this->form_validation->set_rules('adresse', 'adresse','required');
         $this->form_validation->set_rules('quotientfam', 'quotientfam','required');
         $this->form_validation->set_rules('tel', 'tel','required');
         if ($this->form_validation->run()==False){
             $this->load->view('templates/header');
             $this->load->view('pages/'.$page);
             $this->load->view('templates/footer');
         }else{
          /* $enc_password= md5($this->input->post('mdp'));*/
            $this->users_model->enregistrement();
          // Set Message
          $this->session->set_flashdata('user_registred','Votre demande a été validée et enregistrer');
          redirect('Users');
         }
     }
      //verification if login exists
     function check_username_exists($login){
        $this->form_validation->set_message('check_username_exists', ' <div class="container"><div class="alert alert-danger" role="alert">
                                                                          Login deja utilise
                                                                          </div></div> ');
        if($this->users_model->check_username_exists($login)){
          return true;
        }else {
          return false;
        }
     }
      /**
       * savoir si email exists deja
       * @param $mail String 
       */
     function check_email_exists($mail){
        $this->form_validation->set_message('check_email_exists',' <div class="container"><div class="alert alert-danger" role="alert">
                                                                          mail deja utilise
                                                                          </div></div> ');
        if($this->users_model->check_mail_exists($mail)){
          return true;
        }else {
          return false;
        }
     }
     /**
      *  connection de l'user
      */
     public function loginuser(){
         $page='login';
         $this->form_validation->set_rules('login', 'login','required');
         $this->form_validation->set_rules('password', 'password','required');

         if ($this->form_validation->run()==False){

           $this->load->view('templates/header');
           $this->load->view('pages/'.$page);
           $this->load->view('templates/footer');

         }else{
           //faire get de userlogin
           $UserLogin=$this->input->post('login');
           $UserPassword=$this->input->post('password');

           $numadh=$this->users_model->login($UserLogin ,$UserPassword);

          // if($this->session->userdata('logged_inAdmin')){
            //  $this->session->unset_userdata('logged_inAdmin');
            //  $this->session->unset_userdata('numadmin');
             // $this->session->unset_userdata('login');
            //}
            if($numadh) {
              $userdata = array('numadh' => $numadh,
                                'login' => $UserLogin,
                                'logged_in'=>true
                                  );
              $this->session->set_userdata($userdata);

              //$data['name']=$this->input->post('login');
              $this->load->view('templates/header'/*$data*/);
              $this->load->view('pages/index');
              $this->load->view('templates/footer');
           }else {
             //faire avec base_url
             //redirect('index.php/users/loginuser');
             header('Location: http://www.buyukcem.com/BTS/PPE/PPE1/cvven/');
           }
     }
   }
     /**
      * logout user
      */
     public function logout(){
       //unset user data
       $this->session->unset_userdata('logged_in');
       $this->session->unset_userdata('numadh');
       $this->session->unset_userdata('login');

       header('Location: http://www.buyukcem.com/BTS/PPE/PPE1/cvven/');
     }

     /**
      * Page des parametre de l'utilisateur
      */
     public function parametre(){
       $this->load->view('templates/header');
       $this->load->view('pages/parametreuser');
       $this->load->view('templates/footer');
     }
      /**
      * Function qui vas permettre de changer le mdp de l'utilisateur
      */
      public function changemdp(){
        $this->form_validation->set_rules('mdporiginal', 'mdporiginal','required');
        $this->form_validation->set_rules('mdpnew', 'mdpnew','required');
        $this->form_validation->set_rules('mdpneworiginal', 'mdpneworiginal','required|matches[mdpnew]');

        if ($this->form_validation->run()==False){
          $this->load->view('templates/header');
          $this->load->view('pages/changementmdp');
          $this->load->view('templates/footer');
        }else{
          //faire get de userlogin
          $UserLogin=$this->session->userdata('login');
          $mdporiginal=$this->input->post('mdporiginal');
          $mdpnew=$this->input->post('mdpnew');

          $changement=$this->users_model->changemdp( $UserLogin,$mdporiginal ,$mdpnew);

          if ($changement) {
              echo "bravo";
          }else {
            echo "error";
            echo "Nouveau mdp.$mdpnew";
            echo "old mdp.$mdporiginal";
            echo "login.$UserLogin";
          }
        }
      }
   
    
}
