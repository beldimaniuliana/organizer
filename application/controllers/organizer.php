<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('summary_model');
    }

    public function index() {
        $this->view("organizer");
    }

    public function view($page = "organizer") {
        if(! file_exists(APPPATH.'views/menu/'.$page.'.php')) {
            show_404();
        }
        if($page == 'summary')
            $data['summary'] = $this->get_summary();

        $data['title'] = ucfirst($page); //Capitalize the first letter

        $this->load->view('includes/header', $data);
        $this->load->view("menu/".$page, $data);
        $this->load->view('includes/footer', $data);
    }

    public function get_summary() {
        $data = $this->summary_model->get_summary();
        return $data;
    }
}
