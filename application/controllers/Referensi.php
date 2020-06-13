<?php
  class Referensi extends CI_Controller {
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_referensi',$curlData,true);

        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
        $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
        $data['body'] = $this->load->view('templates/warper_body',$subData,true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
      }

      function create() {
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;
        $curlData['ruang'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/ruang/read/',$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('post', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION,array('kategori_untuk' => 'referensi'))->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_referensi',$curlData,true);

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
          'http://118.98.222.31/api/cores/referensi/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/'.$id,$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_referensi',$curlData,true);

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
          'http://118.98.222.31/api/cores/referensi/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/referensi/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/referensi/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/referensi/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/referensi/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/referensi/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Referensi'));
      }
  }
?>