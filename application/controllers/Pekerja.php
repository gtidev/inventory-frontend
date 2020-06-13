<?php
  class Pekerja extends CI_Controller {
    protected $jenis_kelamin = array(
      'laki-laki',
      'perempuan'
    );
      function __construct(){
        parent::__construct();
        $this->load->library('Functions');
        if (!isset($_SESSION['token'])) {
          redirect(base_url('/Auth/login'));
        }
      }
  
      function index() {
        $curlData['pekerja'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/pekerja/read/',$_SESSION)->message;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/dashboard_pekerja',$curlData,true);

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
        $curlData['kategori'] = $this->functions->httprequest('post', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION,array('kategori_untuk' => 'pekerja'))->message;
        $curlData['jenis_kelamin'] = $this->jenis_kelamin;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/create_pekerja',$curlData,true);

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
          'http://118.98.222.31/api/cores/pekerja/create',$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
        // print_r($response);
      }

      function edit() {
        $id = $this->uri->segment(3);
        $curlData['pekerja'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/pekerja/read/'.$id,$_SESSION)->message;
        $curlData['referensi'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/referensi/read/',$_SESSION)->message;
        $curlData['kategori'] = $this->functions->httprequest('get', 'http://118.98.222.31/api/cores/kategori/read/',$_SESSION)->message;
        $curlData['jenis_kelamin'] = $this->jenis_kelamin;

        $subData = array();
        $subData['content'] = $this->load->view('partials/cores/edit_pekerja',$curlData,true);

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
          'http://118.98.222.31/api/cores/pekerja/update/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
        // print_r($response);
      }

      function doDelete() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/pekerja/delete/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
        // print_r($response);
      }

      function doAccept() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/pekerja/accept/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
      }

      function doDecline() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/pekerja/decline/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
      }

      function doActivate() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/pekerja/activate/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
      }

      function doDeactive() {
        $id = $this->uri->segment(3);
        $response = $this->functions->httprequest(
          'get',
          'http://118.98.222.31/api/cores/pekerja/deactive/'.$id,$_SESSION,
          $_POST
        );
        redirect(base_url('/Pekerja'));
      }
  }
?>