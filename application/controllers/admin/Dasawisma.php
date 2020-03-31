
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dasawisma extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('Dasawisma_model');
    	$this->load->model('RT_model');
    	$this->load->model('Variabel_model');
	   $this->load->model('RW_model');
	   $this->load->model('Kategori_model');
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
            $config['base_url'] = base_url() . 'admin/dasawisma/mdasawisma_list.php?q=';
            $config['first_url'] = base_url() . 'admin/dasawisma/mdasawisma_list.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/dasawisma/mdasawisma_list.php';
            $config['first_url'] = base_url() . 'admin/dasawisma/mdasawisma_list.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Dasawisma_model->total_rows($q);
      //  $config['total_rows'] = $this->RT_model->total_rows($q);
      //  $config['total_rows'] = $this->RW_model->total_rows($q);
        $Variabel = $this->Dasawisma_model->get_limit_data($config['per_page'], $start, $q);
        //$Variabel = $this->RT_model->get_limit_data($config['per_page'], $start, $q);
       // $Variabel= $this->RW_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'variabel_data' => $Variabel,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
		 

		 
        $this->load->view("admin/dasawisma/mdasawisma_list",$data);
	
    }
}