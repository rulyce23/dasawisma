
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Warga extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Warga_model');
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
            $config['base_url'] = base_url() . 'admin/warga/warga_list.php?q=';
            $config['first_url'] = base_url() . 'admin/warga/warga_list.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/warga/warga_list.php';
            $config['first_url'] = base_url() . 'admin/warga/warga_list.php';
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
        $this->load->view("admin/warga/warga_list",$data);
	
    }
	
	public function wargadata()
	{
		$q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'admin/warga/wargadata_view.php?q=';
            $config['first_url'] = base_url() . 'admin/warga/wargadata_view.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/warga/wargadata_view.php';
            $config['first_url'] = base_url() . 'admin/warga/wargadata_view.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Warga_model->total_rows($q);
        $Warga = $this->Warga_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'warga_data' => $Warga,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view("admin/warga/wargadata_view",$data);
	
    }
}