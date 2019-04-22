<?php
class Admin_model extends CI_Model {
        public function __construct() {
                    parent::__construct();
                     $this->load->database();

             }
     /**
      * Requete qui permet d'identifier l'admin
      * @param $UserLogin string login de l'admin
      * @param $UserPassword Sting mots de passe de l'admin
      * @return 
      */
     public function loginadmin($UserLogin , $UserPassword ){
       $this->db->where('loginadmin', $UserLogin);
       $this->db->where('mdp', $UserPassword);
      $result = $this->db->get('administrateur');
       if ($result->num_rows()==1) {
           return $result->row(0)->idadmin;
       }else {//si il a pas de compte
         return false;
       }
     }



}
