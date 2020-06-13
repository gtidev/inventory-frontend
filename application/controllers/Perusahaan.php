<?php
  class Perusahaan extends CI_Controller {
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['perusahaan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/perusahaan/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_perusahaan',$curlData,true);

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
        $curlData['kategori'] = $this->functions->httprequest('post', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION,array('kategori_untuk' => 'perusahaan'))->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_perusahaan',$curlData,true);

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
          'http://118.98.222.31/api/cores/perusahaan/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['perusahaan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/perusahaan/read/'.$id,$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_perusahaan',$curlData,true);

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
          'http://118.98.222.31/api/cores/perusahaan/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/perusahaan/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/perusahaan/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/perusahaan/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/perusahaan/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/perusahaan/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Perusahaan'));
      }
  }
?>