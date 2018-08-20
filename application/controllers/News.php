<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
    }

	public function index()
	{
        $data['news'] = $this->news_model->get_news(); // cara pemanggilan = $this->nama_model->nama fungsi yg mau kita pake
        $data['title'] = 'Arsip Berita';
        
        
        $this->load->view('news/index', $data);
    }
    
    public function view($slug = NULL)
	{
        $data['news_item'] = $this->news_model->get_news($slug); // cara pemanggilan = $this->nama_model->nama fungsi yg mau kita pake
        
        $this->load->view('news/view', $data);
	}

    public function create()
    {   
        $this->load->helper('form'); //untuk dapat menggunakan helper form di view/news/create.php 
        $this->load->library('form_validation'); //untuk menggunakan form validation ketika error di view/news/create.php 

        //validasi form
        $this->form_validation->set_rules('title', 'Judul', 'required');
        $this->form_validation->set_rules('text', 'Text', 'required');

        if ($this->form_validation->run() === FALSE) {
            //KETIKA di run hasilnya salah akan tetap di halaman news/create
            $this->load->view('news/create');
        } else{
            //jika berhubungan dengan database, kita akan membutuhkan model
            $this->news_model->set_news();
            redirect('news');
        }

    }
}
