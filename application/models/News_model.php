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
}