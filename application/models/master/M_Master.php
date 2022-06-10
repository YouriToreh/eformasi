<?php
	class M_Master extends CI_Model
	{
		public function __construct()
        {
            parent::__construct();
            $this->db = $this->load->database('main', true);
        }

        public function insert($tablename, $data){
            $this->db->insert($tablename, $data);
        }

        public function getAllJabatan(){
            return $this->db->select('*')
                            ->from('jabatan as a')
                            ->join('m_jenis_jabatan b', 'a.id_jenis_jabatan = b.id')
                            // ->order_by('nm_unitkerja', 'asc')
                            ->get()->result_array();
        }

      
       

       
	}
?>