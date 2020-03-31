
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rumtinggal extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
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
            $config['base_url'] = base_url() . 'admin/rumtinggal/rumtinggal_list.php?q=';
            $config['first_url'] = base_url() . 'admin/rumtinggal/rumtinggal_list.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/rumtinggal/rumtinggal_list.php';
            $config['first_url'] = base_url() . 'admin/rumtinggal/rumtinggal_list.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Rumtinggal_model->total_rows($q);
        $Rumtinggal = $this->Rumtinggal_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'rumtinggal_data' => $Rumtinggal,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view("admin/rumtinggal/rumtinggal_list",$data);
	
    }
	
	
	 public function create() 
    {
		 $this->load->model('Rumtinggal_model');

    	   // $id = $this->session->userdata('id');

           $data['myorders'] = $this->Rumtinggal_model->Relationrumting();
  
        $this->load->view('admin/rumtinggal/rumtinggal_form', $data);
    }
    
	public function hapus($id) 
    {
        $row = $this->Rumtinggal_model->get_by_id($id);

        if ($row) {
            $this->Rumtinggal_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/rumtinggal'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/rumtinggal'));
        }
    }
	
  	 public function industri() 
    {
		 $this->load->model('Rumtinggal_model');

    	   // $id = $this->session->userdata('id');

           $data['myorders'] = $this->Rumtinggal_model->Relationrumting();
  
        $this->load->view('admin/rumtinggal/rumtinggal_industri', $data);
    }
	
	 public function ptp() 
    {
		 $this->load->model('Rumtinggal_model');

    	   // $id = $this->session->userdata('id');

           $data['myorders'] = $this->Rumtinggal_model->Relationrumting();
  
        $this->load->view('admin/rumtinggal/rumtinggal_ptp', $data);
    }
	
	 public function up2k() 
    {
		 $this->load->model('Rumtinggal_model');

    	   // $id = $this->session->userdata('id');

           $data['myorders'] = $this->Rumtinggal_model->Relationrumting();
  
        $this->load->view('admin/rumtinggal/rumtinggal_up2k', $data);
    }
    


 public function tambahdatarumting(){
		$validasi = 0;
		
		$nama_dasawisma     = $this->input->post('D.nama_dasawisma');
		$nosurvey     = $this->input->post('no_survey');
		$namakeprumta  = $this->input->post('nama_kepalarumahtangga');
		$noktp = $this->input->post('no_ktp_kepalarumahtangga');
		$alamatrumting = $this->input->post('alamat_rumahtinggal');
		$namart     = $this->input->post('E.Nama_RT');
		$namarw     = $this->input->post('F.Nama_RW');

		$pesan = "";
   
     if ($nosurvey == '') {
            $pesan = '-No Survey Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
        
    if ($namakeprumta == '') {
            $pesan = '-Nama Kepala Rumah Tangga Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
	
        if ($noktp == '') {
            $pesan = '-No KTP Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
		
		
        if ($alamatrumting == '') {
            $pesan = '-Alamat Rumah Tinggal Tidak Boleh Kosong\\n';
            $validasi = 1;
        }
        
        
		$data_insert = array(   
		                          'no_survey'	=> $nosurvey,
								  'nama_kepalarumahtangga'=> $namakeprumta,
								  'no_ktp_kepalarumahtangga' => $noktp,
								  'alamat_rumahtinggal' => $alamatrumting,
								  'D.nama_dasawisma'=>$nama_dasawisma,
								  'E.Nama_RT'=>$namart,
								  'F.Nama_RW'=>$namarw,
								  
								 );

			         $insert_lamaran = $this->Rumtinggal_model->insert2($data_insert);
			     		$this->session->set_userdata('form_isi', 1);
    				$this->index();
 
	}

}