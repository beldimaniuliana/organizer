<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Organizer extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('summary_model');
    }

    public function index() {
        $this->view("organizer");
    }

    public function view($page = "organizer", $data = "") {
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

    public function create_table() {
        $table_name = $this->input->post('table_name');
        $column = $this->input->post('column');

        $input = array();

        for($i=0; $i<$column; $i++) {
            $input[] = "<input type='text' name=$i id='column_name'.$i placeholder='Enter column name'>";
        }

        $data['table_name'] = $table_name;
        $data['column_input'] = $input;
        $this->view("create_table", $data);
    }

    public function finalize_table_creation() {
        $result = $this->input->post('result[]');
        $table_name = $this->input->post('table_name');

        $column_names = array();
        foreach($result as $value) {
            $column_names[] = $this->input->post($value);
        }

        $this->load->dbforge();

        $fields = array();
        foreach($column_names as $value) {
            if($value == 'id') {
                $fields[$value] = array( 'type' => 'INT', 'constraint' => 5, 'auto_increment' => TRUE);
                $this->dbforge->add_key($value, TRUE);
            }
            else {
                $fields[$value]= array('type' => 'VARCHAR', 'constraint' => '100');
                $this->dbforge->add_key($value);
            }
        }

        $this->dbforge->add_field($fields);

        if ($this->db->table_exists($table_name)) {
            $data['valid_msg'] = "Table already exists";
            $this->view("create_table", $data);
        }
        else {
            $this->dbforge->create_table($table_name);
            $data['error_msg'] = "Table succesful created";
            $this->view("create_table", $data);
        }

        /*
        $this->load->dbforge();

        $fields = array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => TRUE
            ),
            'name' => array(
                'type' => 'VARCHAR',
                'constraint' => '100',
            )
        );
        var_dump($fields);die();
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);// gives PRIMARY KEY (blog_id)
        $this->dbforge->add_key('name');// gives KEY (blog_title)

        //$this->dbforge->create_table('test');

        if ($this->db->table_exists('fe_test')) {
            echo "Table already exists"; }
        else {
            $this->dbforge->create_table('fe_test');
        } */
    }
}
