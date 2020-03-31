
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Keluarga extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Keluarga_model');
		$this->load->model('Rumtinggal_model');
		$this->load->library('javascript');
		$this->load->library('form_validation');
		$this->load->library('email');
		$this->load->library('session');
        // $this->load->library('form_validation');
	}

	public function index()
	{
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/keluarga/keluarga_view.php?q=';
            $config['first_url'] = base_url() . 'admin/keluarga/keluarga_view.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/keluarga/keluarga_view.php';
            $config['first_url'] = base_url() . 'admin/keluarga/keluarga_view.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Rumtinggal_model->total_rows($q);
        $Keluarga = $this->Rumtinggal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keluarga_data' => $Keluarga,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view("admin/keluarga/keluarga_view",$data);
	
    }
	
	
		public function hapus($id) 
    {
        $row = $this->Keluarga_model->get_by_id($id);

        if ($row) {
            $this->Keluarga_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/keluarga'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/keluarga'));
        }
    }
	
	 public function create() 
    {
		 $this->load->model('Keluarga_model');

    	   // $id = $this->session->userdata('id');
  
        $this->load->view('admin/keluarga/keluargadata_form');
    }
	
	
 public function tambahdatakel(){
		$validasi = 0;
		
		$nokk           = $this->input->post('no_KK');
		$namakepkel     = $this->input->post('nama_kepalakeluarga');
	

		$pesan = "";
   
     if ($nokk == '') {
            $pesan = '-No KK Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
        
    if ($namakepkel == '') {
            $pesan = '-Nama Kepala Keluarga Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
	     
		$data_insert = array(   
		                          'no_KK'	=> $nokk,
								  'nama_kepalakeluarga'=> $namakepkel,
								
								 );

			         $insert_lamaran = $this->Keluarga_model->insert($data_insert);
			     		$this->session->set_userdata('form_isi', 1);
    				$this->index();
 
	}

	public function keluargadata()
	{
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/keluarga/keluargadata_view.php?q=';
            $config['first_url'] = base_url() . 'admin/keluarga/keluargadata_view.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/keluarga/keluargadata_view.php';
            $config['first_url'] = base_url() . 'admin/keluarga/keluargadata_view.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Keluarga_model->total_rows($q);
        $Keluarga = $this->Keluarga_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'keluarga_data' => $Keluarga,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view("admin/keluarga/keluargadata_view",$data);
	
    }
}