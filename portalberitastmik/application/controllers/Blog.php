<?php 
class Blog extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_tulisan');
		$this->load->model('m_album');
		$this->load->model('m_pengunjung');
        // $this->m_pengunjung->count_visitor();
	}
	function index(){
		$x['data']=$this->m_tulisan->get_post_home();
		$x['album']=$this->m_album->get_all_album();
		$this->load->view('v_home',$x);
	}

	function detail(){
		$this->load->view('v_pendaftaran');
	}


}