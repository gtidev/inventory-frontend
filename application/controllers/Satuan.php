<?php
  class Satuan extends CI_Controller {
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['satuan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/satuan/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_satuan',$curlData,true);

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
        $curlData['kategori'] = $this->functions->httprequest('post', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION,array('kategori_untuk' => 'satuan'))->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_satuan',$curlData,true);

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
          'http://118.98.222.31/api/cores/satuan/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['satuan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/satuan/read/'.$id,$_SESSION)->message;
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_satuan',$curlData,true);

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
          'http://118.98.222.31/api/cores/satuan/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/satuan/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/satuan/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/satuan/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/satuan/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/satuan/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Satuan'));
      }
  }
?>