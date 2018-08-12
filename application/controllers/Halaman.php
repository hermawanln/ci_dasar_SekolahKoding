<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halaman extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message'); //ngeload view welcome_message
    }
    
    public function view($halaman = 'test'){
        if (!file_exists(APPPATH."views/pages/".$halaman.'.php')) { //APPPATH = url kita
            show_404(); //memanggil halaman error 404
        } else {   
            $data['judul'] = $halaman;

            $this->load->view('templates/header', $data);
            
            $this->load->view('pages/'.$halaman);        
            
            $this->load->view('templates/footer');             
        }
    }
}
