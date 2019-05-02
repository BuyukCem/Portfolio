<?php
class Users_model extends CI_Model {
        public function __construct() {
                    parent::__construct();
                     $this->load->database();

        }     
        /**
         * enregistrement Save user
         *
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
        * check_username_exists this methode check if username exists
        *
        * @param  string $login
        *
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
       * check_mail_exists this methode check if email exists
       *
       * @param  string $mail
       *
       * @return void
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
      * login Requete qui permet d'identifier l'utilisateur 
      *
      * @param  string $UserLogin
      * @param  string $UserPassword
      *
      * @return void
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
      * changemdp
      *
      * @param  string $UserLogin
      * @param  string $mdporiginal
      * @param  string $mdpnew
      *
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
      * GetListeClient Recuperation de la liste des clients
      *
      * @return array
      */
     public function GetListeClient(){
      $query=$this->db->get('adherent'); 
      if($query->num_rows()>0){
        $row=$query->result();
        return $row;
      }
    }
     /**
      * DeleteClient
      *
      * @param  mixed $idClient Id du lient a supprimer
      *
      * @return boolean
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
     * check_password check if password is correct and hash it  Pas encore utilisé
     *
     * @param  string $password
     *
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
   * check_mail check if mail is correct pas encore untilisé
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
