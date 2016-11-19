<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizer extends CI_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
       $this->load_page("organizer/organizer", "Organizer");
    }

    public function load_page($content, $title, $send_data = "", $data_name = "") {
        $data[$data_name] = $send_data;
        $data['title'] = $title;
        $this->load->view('includes/header', $data);
        $this->load->view('includes/menu');
        $this->load->view($content, $data);
        $this->load->view('includes/footer');
    }

    public function load_summary() {
        $this->load_page("menu/summary", "Summary");
    }
}
