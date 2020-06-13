<?php
  class Auth extends CI_Controller {
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
      }
  
    function Login() {
        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['body'] = $this->load->view('partials/auth/login','',true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
    }

    function doLogin() {
      $response = $this->functions->httprequest(
        'post',
        'http://118.98.222.31/api/auth/auth/login',
        null,
        $_POST
      );
      $_SESSION['token']='token: ' . $response->message->token;
      redirect(base_url('/Barang'));
    }

    function doLogout() {
      unset($_SESSION['token']);
      redirect(base_url('/Auth/login'));
    }
  }
?>