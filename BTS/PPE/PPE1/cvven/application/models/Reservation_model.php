<?php
class Reservation_model extends CI_Model {
      public function __construct(){
              parent::__construct();
               $this->load->database();

       }
       /**
        * Add reservation
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
          * get list of user reservations
          * @return array $row list of reservation
          */
        public function chargementListeReservation(){
            $query=$this->db->get_where('reservation');//get 
            if($query->num_rows()>0){// test 
              $row=$query->result();
              return $row;
            }// sinon faut retourner un message d'errreur !!!pas sur à 100%
        }
        /**
         *  Get list of user in progress
         *
         * @param int $id
         * @return array
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
         * Validation of reservation
         * @param int $id_Reserv
         * @return void
         */
        public function ValiderReservation($id_Reserv){
        
        }
        /**
         * Refuse of reservation
         * @param int $id_Reserv
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
         *  change format date ex: 30/03/2019  to 2019/03/30
         * @param date $origDate format date
         * @return date
         */
        public function ChangementFormatData($origDate){
          $date = str_replace('/', '-', $origDate );
          $newDate = date("Y-m-d", strtotime($date));
          return $newDate;
        }


}
?>
