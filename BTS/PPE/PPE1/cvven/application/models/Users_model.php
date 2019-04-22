<?php
class Users_model extends CI_Model {
        public function __construct() {
                    parent::__construct();
                     $this->load->database();

        }
        /**
         * Enregristrement de l'utilisateur
         * @return void
         */
        public function enregistrement(){
            $data = array(
             'nomadh' => $this->input->post('nomadh'),
             'prenomadh' => $this->input->post('prenomadh'),
             'login' => $this->input->post('login'),
             'mdp' => $this->input->post('password'),
             'adresse' => $this->input->post('adresse'),
             'mail' => $this->input->post('mail'),
             'quotientfam' => $this->input->post('quotientFami'),
             'tel' => $this->input->post('tel'),
             );

             $this->db->insert('adherent', $data);
        }

       /**
        * Verification du login 
        * @param $login String 
        * @return boolean
        */
       public function check_username_exists($login){
        $query=$this->db->get_where('adherent', array('login' => $login));

        if (empty($query->row_array())) {
           return true;
        }else {
          return false;
        }
      }
      /**
       * Permet de voir si cette adresse email existe ou pas 
       * @param $mail String Mail de l'user
       */
      public function check_mail_exists($mail){
       $query=$this->db->get_where('adherent', array('mail' => $mail));

       if (empty($query->row_array())) {
          return true;
       }else {
         return false;
       }
     }
      /**
      * Requete qui permet d'identifier l'utilisateur 
      * @param $UserLogin string login de l'user
      * @param $UserPassword Sting mots de passe de l'user
      * @return String
      */
     public function login($UserLogin , $UserPassword){
       $this->db->where('login', $UserLogin);
       $this->db->where('mdp', $UserPassword);
       $result = $this->db->get('adherent');
       if ($result->num_rows()==1) {
           return $result->row(0)->numadh;
       }else {//si il a pas de compte
         return false;
       }
     }
     /**
      * Changement du mots de passe de l'utilisateur 
      * @param $UserLogin String
      * @param $mdporiginal String
      * @param $mdpnew String
      * @return boolean 
      */
     public function changemdp( $UserLogin,$mdporiginal,$mdpnew){
       $this->db->where('login', $UserLogin);
       $this->db->where('mdp', $mdporiginal);

       $result = $this->db->get('adherent');

       if ($result->num_rows()>=1) {
          $datachangeMDP = array('login'=>$UserLogin,
                                  'mdp' => $loginnew);
          $resu=$this->db->update('adherent',$datachangeMDP);
          //test mauvais
          $this->db->where('login', $UserLogin);
          $this->db->where('mdp', $loginnew);
          $resu = $this->db->get('adherent');

          if ($resu->num_rows()>=1) {
              return $result->row(0)->numadh;
          }else{
              return false;
          }
       }else {//si il a pas de compte
         return false;

       }
     }
     /**
      * Recuperation de la liste des clients
      * @return $row Liste des clients
      */
     public function GetListeClient(){
      $query=$this->db->get('adherent'); 
      if($query->num_rows()>0){
        $row=$query->result();
        return $row;
      }
    }
     /**
      * Suppression d'un client
      * @param $idClient Id du lient a supprimer
      * @return Boolean
      */
     public function DeleteClient($idClient){
        $this->db->where('numadh',$idClient);
        $this->db->delete('adherent');
        // test pour voir si bien supprimer
        $this->db->select('*');
        $this->db->from('adherent');
        $this->db->where('numadh', $idClient);
        $query = $this->db->get();
        $result = $query->result();
        if($result){
          return false;
        }else{
          return true;
        }
     }

    /**
     * check if password is correct and hash it
     *
     * @param string $password
     * @return string
     */
    static function check_password(string $password){

      // check upercase
      $uppercase = preg_match('@[A-Z]@', $password);
      // check lowercase
      $lowercase = preg_match('@[a-z]@', $password);
      // check number
      $number    = preg_match('@[0-9]@', $password);

      if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
          return false;
      }else {

          // trim the password
          $password = trim($password);

          return sha1($password);
      }
  }

  /**
   * check if mail is correct
   *
   * @param string $mail
   * @return string
   */
  static function check_mail (string $mail){

      $mail = preg_match('#^[\w.-]+@[\w.-]+\.[a-z]{2,6}$#i', $mail);
      if ($mail){

          return true;
      }else {
          return false;
      }
  }

}
