<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('is_logged')) {
            redirect('Login');
        }
    }

    public function user() {
        $id = $this->session->userdata('id');

        $data['title'] = "Dashboard User";
        $data['letter_filed'] = $this->db->get_where('letter_requests', array("applicant_id" => $id, "request_status" => 1))->num_rows();
        $data['letter_process'] = $this->db->get_where('letter_requests', array("applicant_id" => $id, "request_status" => 2))->num_rows();
        $data['letter_revised'] = $this->db->get_where('letter_requests', array("applicant_id" => $id, "request_status" => 3))->num_rows();
        $data['letter_done'] = $this->db->get_where('letter_requests', array("applicant_id" => $id, "request_status" => 4))->num_rows();
       
        $this->template->load('template/user/template_user', 'dashboard/user/index', $data);
    }
}