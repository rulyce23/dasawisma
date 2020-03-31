
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class RW extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
		
		$this->load->model('RW_model');
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
            $config['base_url'] = base_url() . 'admin/rw/rw_list.php?q=';
            $config['first_url'] = base_url() . 'admin/rw/rw_list.php?q=';
        } else {
            $config['base_url'] = base_url() . 'admin/rw/rw_list.php';
            $config['first_url'] = base_url() . 'admin/rw/rw_list.php';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->RW_model->total_rows($q);
        $rw = $this->RW_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'rw_data' => $rw,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view("admin/rw/rw_list",$data);
	
    }
	
	
	 public function create() 
    {
		 $this->load->model('RW_model');

    	   // $id = $this->session->userdata('id');  
        $this->load->view('admin/rw/rw_form', $data);
    }
    
	public function hapus($id) 
    {
        $row = $this->rt_model->get_by_id($id);

        if ($row) {
            $this->rt_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('admin/rw'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('admin/rw'));
        }
    }
	



 

}