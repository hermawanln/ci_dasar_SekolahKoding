<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //Load Dependencies

    }

    // List all your items
    public function index()
    {
        $data['content'] = $this->db->get('identitas');
        
        $this->load->view('crud/index', $data);
        
    }

    // Add a new item
    public function add()
    {
        $this->load->view('crud/add');
        
    }

    public function action_add()
    {
        $data = array(
            'nama' => $this->input->post('nama'),
            'status' => $this->input->post('status'), 
            'jurusan' => $this->input->post('jurusan'),
        );

        $this->db->insert('identitas', $data);

        redirect('crud','refresh');
        
        

    }

    //Update one item
    public function update( $id = NULL )
    {

    }

    //Delete one item
    public function delete( $id = NULL )
    {
        $this->db->where('id', $id);
        $this->db->delete('identitas');
        
        redirect('crud','refresh');
        
    }
}

/* End of file Crud.php */

