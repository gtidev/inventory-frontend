<?php
  class Keuangan extends CI_Controller {
    protected $status_aliran = array(
      'masuk',
      'keluar'
    );

      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['keuangan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/keuangan/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_keuangan',$curlData,true);

        $data = array();
        $data['header'] = $this->load->view('templates/warper_header','',true);
        $data['sidebar'] = $this->load->view('templates/warper_sidebar','',true);
        $data['topbar'] = $this->load->view('templates/warper_topbar','',true);
        $data['body'] = $this->load->view('templates/warper_body',$subData,true);
        $data['footer'] = $this->load->view('templates/warper_footer','',true);
        $this->load->view('templates/warp_all',$data);
      }

      function create() {
        $curlData['keuangan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/keuangan/read/',$_SESSION)->message;
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;
        $curlData['ruang'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/ruang/read/',$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('post', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION,array('kategori_untuk' => 'keuangan'))->message;
        $curlData['status_aliran'] = $this->status_aliran;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_keuangan',$curlData,true);

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
          'http://118.98.222.31/api/cores/keuangan/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['keuangan'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/keuangan/read/'.$id,$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;
        $curlData['ruang'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/ruang/read/',$_SESSION)->message;
        $curlData['status_aliran'] = $this->status_aliran;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_keuangan',$curlData,true);

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
          'http://118.98.222.31/api/cores/keuangan/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/keuangan/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/keuangan/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/keuangan/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/keuangan/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/keuangan/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Keuangan'));
      }
  }
?>