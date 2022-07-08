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

        public function createTreeJabatan(){
         
            $id = explode(',',$this->input->post('parent_id_jabatan'),2);
            // ;
            $id_jabatan =  str_replace("'","",$id[0]);
            $parent_id_jabatan =  str_replace("'","",$id[1]);
            // $get_parent = $this->db->select('parent_id_jabatan')
            // ->from('tree_jabatanx a')
            // ->where('a.id_jabatan',$id_jabatan)
            // ->where('a.parent_id_jabatan', $parent_id_jabatan)
            // ->get()->result_array();
            // dd($parent_id_jabatan);

            // dd($parent_id_jabatan);
           
            $data = array('id_jabatan' => $this->input->post('id_jabatan'), 
            'parent_id_jabatan' => $id_jabatan,
            'parent_parent_id_jabatan' => $parent_id_jabatan
            );
            
            $result = $this->db->insert('tree_jabatan', $data);
        }

        public function getAllJabatan(){
            return $this->db->select('*')
                            ->from('jabatan as a')
                            ->join('m_jenis_jabatan b', 'a.id_jenis_jabatan = b.id')
                            // ->order_by('nm_unitkerja', 'asc')
                            ->get()->result_array();
        }

        public function getParentJabatan(){
            return $this->db->select('a.id_jabatan, a.parent_id_jabatan, c.nama_jabatan as parent,b.nama_jabatan,
            concat(c.nama_jabatan," / ",b.nama_jabatan ) AS Result 
            ')
                            ->from('tree_jabatan as a')
                            ->join('jabatan b', 'a.id_jabatan = b.id_jabatanpeg')
                            ->join('jabatan c', 'a.parent_id_jabatan = c.id_jabatanpeg')
                            ->get()->result_array();
        }

        public function getTreeJabatan(){
            return $this->db->select('a.id_jabatan, b.nama_jabatan,
                               (select nama_jabatan from jabatan where a.parent_id_jabatan = jabatan.id_jabatanpeg limit 1) as  parent_jabatan')
                            ->from('tree_jabatan as a')
                            ->join('jabatan b', 'a.id_jabatan = b.id_jabatanpeg')
                             ->order_by('a.id', 'asc')
                            ->get()->result_array();
        }

        // public function getListRencanaKinerjaTugas(){
        //     return $this->db->select('a.tugas_jabatan')
        //                     ->from('t_rencana_kinerja as a ')
        //                     ->where('a.id_m_user',$this->general_library->getId())
        //                     ->where('a.flag_active', 1)
        //                     ->group_by('a.tugas_jabatan')
        //                     ->get()->result_array();
        // }
    

        public function getItem()
        {
              $data = [];
              $parent_key = '0';
              $no = 0;
              $parent_key2 = '0000005J001';
              $row = $this->db->query('SELECT id_jabatan, (select nama_jabatan from jabatan where tree_jabatan.id_jabatan = jabatan.id_jabatanpeg limit 1) as name from tree_jabatan');
            
              if($row->num_rows() > 0)
              {
                  $data = $this->membersTree($parent_key,$parent_key2,$no);
              }else{
                  $data=["id"=>"0","name"=>"No Members presnt in list","text"=>"No Members is presnt in list","nodes"=>[]];
              }
              return $data;
             
        }



        public function membersTree($parent_key,$parent_key2,$no)
        {
            $row1 = [];
            $row = $this->db->query('SELECT id_jabatan, parent_id_jabatan, (select nama_jabatan from jabatan where tree_jabatan.id_jabatan = jabatan.id_jabatanpeg limit 1) as name   from tree_jabatan WHERE parent_id_jabatan="'.$parent_key.'"')->result_array();
           
            foreach($row as $key => $value)
            {
               $id = $value['id_jabatan'];
               $row1[$key]['id_jabatan'] = $value['id_jabatan'];
               $row1[$key]['name'] = $value['name'];
               $row1[$key]['parent_id_jabatan'] = $value['parent_id_jabatan'];
               if($no == 0){
               
                $row1[$key]['child'] = array_values($this->membersTree($value['id_jabatan'],$value['parent_id_jabatan'],$no));
              } else {
                // dd($row1);
                $row1[$key]['child'] = array_values($this->membersTree2($value['id_jabatan'],$value['parent_id_jabatan'],$no));
              }
              
               $no++;
                // dd($no);
               
            }
           
            return $row1;
        }

        public function membersTree2($id_jabatan,$parent_id_jabatan,$no)
        {
            $row1 = [];
            $row = $this->db->query('SELECT id_jabatan, parent_id_jabatan, (select nama_jabatan from jabatan where tree_jabatan.id_jabatan = jabatan.id_jabatanpeg limit 1) as name   from tree_jabatan WHERE parent_id_jabatan="'.$id_jabatan.'" AND parent_parent_id_jabatan="'.$parent_id_jabatan.'"')->result_array();
           
            foreach($row as $key => $value)
            {
               $id = $value['id_jabatan'];
               $row1[$key]['id_jabatan'] = $value['id_jabatan'];
               $row1[$key]['name'] = $value['name'];
               $row1[$key]['parent_id_jabatan'] = $value['parent_id_jabatan'];
               if($no == 0){
              
                $row1[$key]['child'] = array_values($this->membersTree($value['id_jabatan'],$value['parent_id_jabatan'],$no));
              } else {
                 
                $row1[$key]['child'] = array_values($this->membersTree2($value['id_jabatan'],$value['parent_id_jabatan'],$no));
              }
              
               $no++;
                // dd($no);
               
            }
           
            return $row1;
        }



      
       

       
	}
?>