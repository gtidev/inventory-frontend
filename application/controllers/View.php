<?php
  class View extends CI_Controller {
    function __construct(){
      parent::__construct();
      if (!isset($_SESSION['token'])) {
        redirect(base_url('/Auth/login'));
      }
    }
  
    function index() {
      $data = array();
      $data['header'] = $this->load->view('templates/warper_header','',true);
      $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
      $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
      $data['body'] = $this->load->view('templates/warper_body','',true);
      $data['footer'] = $this->load->view('templates/warper_footer','',true);
      $this->load->view('templates/warp_all',$data);
    }


  }
?>