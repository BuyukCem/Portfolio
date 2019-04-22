<?php


class Pages extends CI_Controller {
      /**
       * page index 
       */
	public function index($page='index')
	{
	     $this->load->helper('url_helper');

            $data['title']= ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');

       }

       /**
        * Affichage des pages
        */
       public function hebergement(){
         $page='hebergement';     
         $this->load->helper('url_helper');
         $this->load->view('templates/header');
         $this->load->view('pages/'.$page);
         $this->load->view('templates/footer');     
       }

}
