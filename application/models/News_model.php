<?php

//model tugasnya berinteraksi langsung dengan database

class News_model extends CI_Model {

        public function __construct()
        {
                $this->load->database(); //query builder dari CI (menggantikan SELECT * BLABLABLA)
        }
        
        public function get_news()
        {
            $query = $this->db->get('news'); //get nama table
            return $query->result_array();
        }
}