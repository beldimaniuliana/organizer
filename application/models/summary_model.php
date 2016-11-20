<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Summary_Model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    public function get_summary() {
        $query = $this->db->get('summary');
        return $query->result();
    }
}
