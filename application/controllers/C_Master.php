<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Master extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('master/M_Master', 'master');
  
    }

	
	public function index()
	{
		$data['jabatan'] = $this->master->getAllJabatan();
		// dd($data);
		render('master/V_MasterJabatan','','',$data);
	}

	public function LoadJabatan(){
		$data['jabatan'] = $this->master->getAllJabatan();
		$this->load->view('master/V_MasterJabatanItem', $data);
	}
}
