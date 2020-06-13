<?php
  class Pengguna extends CI_Controller {
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['pengguna'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/auth/pengguna/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_pengguna',$curlData,true);

        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
        $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
        $data['body'] = $this->load->view('templates/warper_body',$subData,true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
      }

      function create() {
        $curlData['pekerja'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/pekerja/read/',$_SESSION)->message;;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_pengguna',$curlData,true);

        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
        $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
        $data['body'] = $this->load->view('templates/warper_body',$subData,true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
      }

      function doCreate() {
        $response = $this->functions->httprequest(
          'post',
          'http://118.98.222.31/api/auth/pengguna/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['pengguna'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/auth/pengguna/read/'.$id,$_SESSION)->message;
        $curlData['pekerja'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/pekerja/read/',$_SESSION)->message;;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_pengguna',$curlData,true);

        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
        $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
        $data['body'] = $this->load->view('templates/warper_body',$subData,true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
      }

      function doEdit() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'post',
          'http://118.98.222.31/api/auth/pengguna/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/auth/pengguna/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/auth/pengguna/accept/'.$id,$_SESSION,
          $_POST
        );
        // redirect(base_url('/Pengguna'));
        print_r($response);
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/auth/pengguna/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/auth/pengguna/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/auth/pengguna/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pengguna'));
      }
  }
?>