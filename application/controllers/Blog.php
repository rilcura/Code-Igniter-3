<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function index()
    {
        // load the database library
        $this->load->database();

        // get the data from the table
        $query = $this->db->get('blog_table_name');
        $data['blog_data'] = $query->result();

        // load the view and pass the data to it
        $this->load->view('blog_view', $data);
    }

}