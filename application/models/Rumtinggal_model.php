<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Rumtinggal_model extends CI_Model
{
    
    public $table = 'tm_rumahtinggal';
    public $id = 'id_rumahtinggal';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
            $this->load->database();

    }

//public function lihat($id)
//{
 // $this->db->select('A.no_survey, A.nama_kepalarumahtangga, A.no_ktp_kepalarumahtangga,A.alamat_rumahtinggal, 
//		D.nama_dasawisma, E.Nama_RT, F.nama_RW, G.title as Kel_Desa, H.title as Kecamatan, I.title as KotaKab, J.title as Provinsi');
//		$this->db->from('tm_rumahtinggal as A');
//		$this->db->join('tm_dasawisma as D','A.id_dasawisma=D.id_dasawisma', 'inner');
//		$this->db->join('tm_rt as E','D.id_RT=E.id_RT', 'inner');
//		$this->db->join('tm_rw as F','E.id_RW=F.id_RW', 'inner');
//		$this->db->join('tm_wilayah as G','F.id_wilayah=G.id_wilayah', 'inner');
//		$this->db->join('tm_wilayah as H','G.parent_id=H.parent_id', 'inner');
//		$this->db->join('tm_wilayah as I','H.parent_id=I.parent_id', 'inner');
//		$this->db->join('tm_wilayah as J','I.parent_id=J.parent_id', 'inner');
//		 $this->db->where('A.no_survey',$id);
//
//     return $this->db->get();
//}

 public function relationrumting(){
	//	$id = $this->session->userdata['id'];
		$this->db->select('A.no_survey, A.nama_kepalarumahtangga, A.no_ktp_kepalarumahtangga,A.alamat_rumahtinggal, 
		D.nama_dasawisma, E.Nama_RT, F.nama_RW, G.title as Kel_Desa, H.title as Kecamatan, I.title as KotaKab, J.title as Provinsi');
		$this->db->from('tm_rumahtinggal as A');
		$this->db->join('tm_dasawisma as D','A.id_dasawisma=D.id_dasawisma', 'inner');
		$this->db->join('tm_rt as E','D.id_RT=E.id_RT', 'inner');
		$this->db->join('tm_rw as F','E.id_RW=F.id_RW', 'inner');
		$this->db->join('tm_wilayah as G','F.id_wilayah=G.id_wilayah', 'inner');
		$this->db->join('tm_wilayah as H','G.parent_id=H.parent_id', 'inner');
		$this->db->join('tm_wilayah as I','H.parent_id=I.parent_id', 'inner');
		$this->db->join('tm_wilayah as J','I.parent_id=J.parent_id', 'inner');
		 $this->db->where('A.no_survey = 1 ');
       $query = $this->db->get(); 
    if($query->num_rows() != 0)
    {
        return $query->result_array();
    }
    else
    {
        return false;
    }
	}
	
	public function relationalready(){
		$this->db->select('variabel,  D.[value]');
		$this->db->from('tm_rumahtinggal as A');
		$this->db->join('tr_rumahtinggal as B','A.id_rumahtinggal=B.id_rumahtinggal', 'inner');
		$this->db->join('tm_variabel as C','B.id_variabel=C.id_variabel', 'inner');
		$this->db->join('tm_jawaban_opsional as D','B.id_opsional=D.id_opsional and C.id_variabel = D.id_variabel', 'inner');		
		 $this->db->where('A.id_rumahtinggal = "1" and c.[group]=""');
     $query = $this->db->get();
        $result = $query->result_array();
        return $result;
	}
		
	
    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_rumahtinggal', $q);
        $this->db->or_like('no_survey', $q);
        $this->db->or_like('no_ktp_kepalarumahtangga', $q);
        $this->db->or_like('nama_kepalarumahtangga', $q);
        $this->db->or_like('alamat_rumahtinggal', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_rumahtinggal', $q);
        $this->db->or_like('no_survey', $q);
        $this->db->or_like('no_ktp_kepalarumahtangga', $q);
        $this->db->or_like('nama_kepalarumahtangga', $q);
        $this->db->or_like('alamat_rumahtinggal', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    function insert2($data)
    {
        $this->db->insert($this->relationrumting, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file Tbl_pertanyaan_model.php */
/* Location: ./application/models/Tbl_pertanyaan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-03-26 10:29:52 */
/* http://harviacode.com */