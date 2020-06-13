<?php
  class Kategori extends CI_Controller {
      protected $kategori_untuk = array(
        'referensi',
        'barang',
        'satuan',
        'perusahaan',
        'keuangan',
        'ruang',
        'pekerja'
      );

      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_kategori',$curlData,true);

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
        $curlData['kategori_untuk'] = $this->kategori_untuk;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;
        // $curlData['kategori_parent'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori_parent/read/',$_SESSION)->message;
        $curlData['ruang'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/ruang/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_kategori',$curlData,true);

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
          'http://118.98.222.31/api/cores/kategori/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/'.$id,$_SESSION)->message;
        $curlData['kategori_parent'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori_parent/read/',$_SESSION)->message;
        $curlData['kategori_untuk'] = $this->kategori_untuk;
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;
        $curlData['ruang'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/ruang/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_kategori',$curlData,true);

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
          'http://118.98.222.31/api/cores/kategori/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/kategori/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/kategori/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
        // print_r($response);
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/kategori/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/kategori/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/kategori/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Kategori'));
      }
  }
?>