
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Variabel extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Variabel_model');
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
            $config['base_url'] = base_url() . 'admin/variabel/index.html?q=';
            $config['first_url'] = base_url() . 'admin/variabel/index.html?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/variabel/index.html';
            $config['first_url'] = base_url() . 'admin/variabel/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Variabel_model->total_rows($q);
        $Variabel = $this->Variabel_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'variabel_data' => $Variabel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		 
		 $data['query'] = $this->Variabel_model->counter(); 
		 
        $this->load->view("admin/variabel/variabel_list",$data);
	
    }
}