<?php

class Reservation_model extends CI_Model {
      public function __construct(){
              parent::__construct();
               $this->load->database();

       }
       
       /**
        * set_Reservation  insert a reservation in BDD
        *
        * @return void
        */
       public function set_Reservation(){

        $date_arri=$this->ChangementFormatData($this->input->post('datearrivee'));
        $data_dep=$this->ChangementFormatData($this->input->post('datedepart'));
        $numadh=$this->session->userdata('numadh');
        $data = array(
          'date_arrivee' => $date_arri,
          'date_depart' => $data_dep,
          'nbpersonne' => $this->input->post('nbpersonne'),
          'menage' => $this->input->post('menage'),
          'restauration' => $this->input->post('restauration'),
          'numadherent'=>$numadh,
          //'reservation'=>
          'activites' => $this->input->post('activites'),
          
          );
         $this->db->insert('reservation', $data);
  
      }
        
        /**
         * chargementListeReservation 
         *
         * @return array List of reservation
         */
        public function chargementListeReservation(){
            $query=$this->db->get_where('reservation');//get 
            if($query->num_rows()>0){// test 
              $row=$query->result();
              return $row;
            }// sinon faut retourner un message d'errreur !!!pas sur à 100%
        }
       
        /**
         * chargementListeReservation_with_id see the list of reservations for the session
         *
         * @return array List of reservation $this->session->userdata('numadh');
         */
        public function chargementListeReservation_with_id(){
          $id=$this->session->userdata('numadh');
          $query=$this->db->get_where('reservation', array('numadherent' =>$id));
           if($query->num_rows()>0){
             $row=$query->result();
             var_dump($row);
             return $row;
           }
        }
        
        /**
         * ValiderReservation
         *
         * @param  int $id_Reserv 
         *
         * @return void
         */
        public function ValiderReservation($id_Reserv){
        
        }
        
        /**
         * RefuserReservation
         *
         * @param int $id_Reserv
         *
         * @return void
         */
        public function RefuserReservation($id_Reserv){
        
        }
        /**
         * Send confirmation e-mail
         */
        public function envoiemail(){
          
        }
        
        /**
         * ChangementFormatData change format date ex: 30/03/2019  to 2019/03/30
         *
         * @param  string $origDate
         *
         * @return string $newDate
         */
        public function ChangementFormatData($origDate){
          $date = str_replace('/', '-', $origDate );
          $newDate = date("Y-m-d", strtotime($date));
          return $newDate;
        }


}
?>
