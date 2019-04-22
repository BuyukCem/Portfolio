<?php
class Reservation_model extends CI_Model {
      public function __construct(){
              parent::__construct();
               $this->load->database();

       }
       /**
        * Ajout d'une reservation
        * @return void
        */
       public function set_Reservation(){
         $data = array(
          'date_arrivee' => $this->input->post('datearrivee'),
          'date_depart' => $this->input->post('datedepart'),
          'nbpersonne' => $this->input->post('nbpersonne'),
          'menage' => $this->input->post('menage'),
           'restauration' => $this->input->post('restauration'),
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
         *  Get list of user en cours
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
         * Validation de reservation
         * @param int $id_Reserv
         * @return void
         */
        public function ValiderReservation($id_Reserv){
        
        }
        /**
         * Refuser de reservation
         * @param int $id_Reserv
         * @return void
         */
        public function RefuserReservation($id_Reserv){
        
        }
        /**
         * Envoie mail de confirmation de la reservation
         */
        public function envoiemail(){
          
        }

}
?>
