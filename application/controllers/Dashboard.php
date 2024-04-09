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
        $data['title'] = "Dashboard User";
        $this->template->load('template/user/template_user', 'dashboard/user/index', $data);
    }
}