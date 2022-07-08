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
		$data['parent_jabatan'] = $this->master->getParentJabatan();
		// dd($data);
		render('master/V_MasterJabatan','','',$data);
	}

	public function LoadJabatan(){
		$data['jabatan'] = $this->master->getTreeJabatan();
		// dd($data);
		$this->load->view('master/V_MasterJabatanItem', $data);
	}

	public function createTreeJabatan(){
        $data = $this->input->post();
        $this->master->createTreeJabatan();
    }





	public function getItem()
    {
        $data['jabatan'] = $this->master->getItem();
		$this->load->view('master/V_TreeJabatanItem', $data);
        //  dd($data);
		//   $data = $this->master->getItem();
        //   echo json_encode(array_values($data));
    }
   
   



}
