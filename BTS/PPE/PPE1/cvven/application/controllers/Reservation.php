<?php

 class Reservation extends CI_Controller{
   public function __construct(){
                parent::__construct();
                $this->load->library('form_validation');
                $this->load->model('Reservation_model');
                $this->load->helper('url_helper');
        }

     public function reserver($page='reservation'){
         $this->form_validation->set_rules('datearrivee', 'datearrivee','required');
         $this->form_validation->set_rules('datedepart', 'datedepart','required');
         $this->form_validation->set_rules('nbpersonne', 'nbpersonne','required');
         $this->form_validation->set_rules('menage', 'menage','required');
         $this->form_validation->set_rules('restauration', 'restauration','required');
         $this->form_validation->set_rules('activites', 'activites','required');

         if ($this->form_validation->run()==False){
             $this->load->view('templates/header');
             $this->load->view('pages/'.$page);
             $this->load->view('templates/footer');
         }else{
            $this->Reservation_model->set_Reservation();
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            $this->load->view('pages/alertSuccess');
            $this->load->view('templates/footer');
         }
     }
     /*
     * affichage de la liste des reservation (pour l'utilisateur)
     * 
     * 
     */
    public function listereservation_WithID($page='reservationliste'){
        //if ($this->session->userdata('logged_inAdmin')) {
          $data['results']=$this->Reservation_model->chargementListeReservation_with_id();
          $this->load->view('templates/header');
          $this->load->view('pages/'.$page,$data);
          $this->load->view('templates/footer');
        //}else{
          //header('Location: http://localhost/PPE1/index.php/');
        //} 
    }
    
    /**
     * Page de la liste des reservations (Pour Admin)
     * 
     */
    public function ListeReservation($page='LesReservation'){
      //if ($this->session->userdata('logged_inAdmin')) {
        $data['results']=$this->Reservation_model->chargementListeReservation();
        $this->load->view('templates/header');
        $this->load->view('pages/'.$page,$data);
        $this->load->view('templates/footer');
      //}else{
        header('Location: http://www.buyukcem.com/BTS/PPE/PPE1/cvven/');
      //} 
    }
  
}
