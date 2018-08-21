<?php

//model tugasnya berinteraksi langsung dengan database

class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database(); //query builder dari CI (menggantikan SELECT * BLABLABLA)
        }
        
        public function get_news($slug = FALSE) //false krn tidak smua punya slug, contohnya yg di home
        {
                if ($slug == FALSE) {
                        $query = $this->db->get('news'); //get nama table
                        return $query->result_array();
                }
                
                $query = $this->db->get_where('news', array('slug' => $slug));  //paramater 1 adalah nama tabel, ke 2 datanya
                                                                                //get_where relefan dengan SELECT * FROM WHERE ...                
                return $query->row_array();
                
        }

        public function get_news_id($id = FALSE) //false krn tidak smua punya slug, contohnya yg di home
        {
                $query = $this->db->get_where('news', array('id' => $id));  //paramater 1 adalah nama tabel, ke 2 datanya
                                                                                //get_where relefan dengan SELECT * FROM WHERE ...                
                return $query->row_array();
                
        }

        public function set_news() //ga butuh parameter karena ngirimnya lewat post
        {       
                //menggunakan helper url untuk set nama slug di database, judul yang berisi spasi akan menjadi - misal :
                //misalnya titlenya "judul pertama saya" maka otomatis slug akan berisi judul-pertama-saya
                $this->load->helper('url');
                $slug = url_title($this->input->post('title'), 'dash', TRUE); //(dari mana titlenya diambi, tiap ada tanda diubah jadi tanda/garis, boolean TRUE)

                $data = array(
                        // 'nama_tabel' => apa yg kita punya di views/news/create.php atau namenya
                        'title' => $this->input->post('title'),
                        'text' => $this->input->post('text'),
                        'slug' => $slug
                );

                //untuk insert ke db
                return $this->db->insert('news', $data); //nama tabel, datanya


        }

        public function update_news($id)
        {       
                //menggunakan helper url untuk set nama slug di database, judul yang berisi spasi akan menjadi - misal :
                 //misalnya titlenya "judul pertama saya" maka otomatis slug akan berisi judul-pertama-saya
                $this->load->helper('url');
                $slug = url_title($this->input->post('title'), 'dash', TRUE); //(dari mana titlenya diambi, tiap ada tanda diubah jadi tanda/garis, boolean TRUE)

                $data = array(
                        // 'nama_tabel' => apa yg kita punya di views/news/create.php atau namenya
                        'title' => $this->input->post('title'),
                        'text' => $this->input->post('text'),
                        'slug' => $slug
                );

                //kondisi update jika id nya sama dengan parameter $id
                $this->db->where('id', $id);
                //untuk update ke db
                return $this->db->update('news', $data); //nama tabel, datanya

        }

        public function delete_news($id)
        {
                //jika tidak ingin deklarasi kondisi menggunakan $this->db->where('id', $id);
                //bisa menggunakan array dengan cara array('id' => $id)
                return $this->db->delete('news', array('id' => $id));
        }
}