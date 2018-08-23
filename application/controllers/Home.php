<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data = array(
            'nama' => "Hermawan Luthfi Nugroho"
        );

        //CARA KE 2 MENGISI DATA / DEKLARASI VARIABEL
        //$data['nama'] = 'Hermawan Luthfi Nugroho';

        $this->header();
        $this->load->view('index', $data);   
        $this->footer();
    }

    public function controller_profil()
    {
        echo "Halaman profil";
    }

    public function controller_contact()
    {
        echo "Halaman kontak";
    }

    public function nama($value1 = '', $value2 = '')
    {
        echo "<b>Cara akses value = /home/nama/value1/value2 </b>";
        echo "<br><br>";
        echo "Nama saya adalah "."<b>".$value1."</b>"." dan Nama keren saya adalah "."<b>".$value2."</b>";
    }

    //------------------ Views -------------------
    public function header()
    {
        $this->load->view('header');
        
    }

    public function footer()
    {
        $this->load->view('footer');
        
    }
}
