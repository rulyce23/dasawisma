<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Tbl_pertanyaan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Tbl_pertanyaan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'tbl_pertanyaan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'tbl_pertanyaan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'tbl_pertanyaan/index.html';
            $config['first_url'] = base_url() . 'tbl_pertanyaan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Tbl_pertanyaan_model->total_rows($q);
        $tbl_pertanyaan = $this->Tbl_pertanyaan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'tbl_pertanyaan_data' => $tbl_pertanyaan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('tbl_pertanyaan/tbl_pertanyaan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Tbl_pertanyaan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_pertanyaan' => $row->id_pertanyaan,
		'id_form' => $row->id_form,
		'variable' => $row->variable,
		'tipe' => $row->tipe,
	    );
            $this->load->view('tbl_pertanyaan/tbl_pertanyaan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_pertanyaan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('tbl_pertanyaan/create_action'),
	    'id_pertanyaan' => set_value('id_pertanyaan'),
	    'id_form' => set_value('id_form'),
	    'variable' => set_value('variable'),
	    'tipe' => set_value('tipe'),
	);
        $this->load->view('tbl_pertanyaan/tbl_pertanyaan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'id_form' => $this->input->post('id_form',TRUE),
		'variable' => $this->input->post('variable',TRUE),
		'tipe' => $this->input->post('tipe',TRUE),
	    );

            $this->Tbl_pertanyaan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('tbl_pertanyaan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Tbl_pertanyaan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('tbl_pertanyaan/update_action'),
		'id_pertanyaan' => set_value('id_pertanyaan', $row->id_pertanyaan),
		'id_form' => set_value('id_form', $row->id_form),
		'variable' => set_value('variable', $row->variable),
		'tipe' => set_value('tipe', $row->tipe),
	    );
            $this->load->view('tbl_pertanyaan/tbl_pertanyaan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_pertanyaan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_pertanyaan', TRUE));
        } else {
            $data = array(
		'id_form' => $this->input->post('id_form',TRUE),
		'variable' => $this->input->post('variable',TRUE),
		'tipe' => $this->input->post('tipe',TRUE),
	    );

            $this->Tbl_pertanyaan_model->update($this->input->post('id_pertanyaan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('tbl_pertanyaan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Tbl_pertanyaan_model->get_by_id($id);

        if ($row) {
            $this->Tbl_pertanyaan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('tbl_pertanyaan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('tbl_pertanyaan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('id_form', 'id form', 'trim|required');
	$this->form_validation->set_rules('variable', 'variable', 'trim|required');
	$this->form_validation->set_rules('tipe', 'tipe', 'trim|required');

	$this->form_validation->set_rules('id_pertanyaan', 'id_pertanyaan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Tbl_pertanyaan.php */
/* Location: ./application/controllers/Tbl_pertanyaan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-03-26 10:29:52 */
/* http://harviacode.com */