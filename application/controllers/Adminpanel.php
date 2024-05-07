<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Adminpanel extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('is_admin')){
            redirect('login/admin');
        }
    
        $this->load->model('Mcrud');
    }

    private function getStaticticDashboard($type) {

        $numberOfLetters = $this->db->get_where('letter_requests', array('request_type' => $type))->num_rows();
        $filed = $this->db->get_where('letter_requests', array('request_type' => $type, 'request_status' => 1))->num_rows();
        $process = $this->db->get_where('letter_requests', array('request_type' => $type, 'request_status' => 2))->num_rows();
        $reject = $this->db->get_where('letter_requests', array('request_type' => $type, 'request_status' => 3))->num_rows();
        $success = $this->db->get_where('letter_requests', array('request_type' => $type, 'request_status' => 4))->num_rows();

        $dataArray = array(
            'total_letters' => $numberOfLetters,
            'filed' => $filed,
            'process' => $process,
            'reject' => $reject,
            'success' => $success
        );

        return $dataArray;
    }

    public function index(){
        $data['title'] = "Admin | Dashboard";
        $data['birth'] = $this->getStaticticDashboard("kelahiran");
        $data['died'] = $this->getStaticticDashboard("kematian");
        $data['business'] = $this->getStaticticDashboard("usaha");
        $data['event'] = $this->getStaticticDashboard("izin-kegiatan");
        $data['coming'] = $this->getStaticticDashboard("kedatangan");
        $data['moving'] = $this->getStaticticDashboard("kepindahan");
        $data['poor'] = $this->getStaticticDashboard("kurang-mampu");
        $data['married'] = $this->getStaticticDashboard("pengantar-nikah");
        $this->template->load('template/admin/template_admin', 'dashboard/admin/index', $data);
    }

    public function application_management(){
        $data['title'] = "Admin | Managemen Pengajuan";
        $sql = "SELECT a.id as id_applicant, lr.id as id_letter, a.*, lr.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id ORDER BY lr.request_date DESC";
        $data['letters'] = $this->db->query($sql)->result();
        $this->template->load('template/admin/template_admin', 'dashboard/admin/applicant_management', $data);
    }

    public function mailing_management() {
        $data['title'] = "Admin | Managemen Pengajuan Surat";
        $sql = "SELECT sl.id as id_submission, a.id as id_applicant, lr.id as id_letter, sl.*, a.*, lr.* FROM submission_letter sl INNER JOIN applicants a ON sl.applicant_id = a.id INNER JOIN letter_requests lr ON sl.letter_id = lr.id ORDER BY sl.submission_date DESC";
        $data['letters'] = $this->db->query($sql)->result();
        $this->template->load('template/admin/template_admin', 'dashboard/admin/mailing_management', $data);
    }

    public function electronic_letter($letter_type, $id){
        $data['title'] = "Electronic Letter";

        switch ($letter_type) {
            case "kelahiran":
                $sql = "SELECT sl.id as submission_id, sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, k.id as id_birth,  sl.*, a.*, lr.*, k.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN birth_baby_identities as k ON lr.birth_baby_id=k.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/kelahiran';
                break;
            case "kematian":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, d.id as id_died, d.nik as died_nik,  a.*, lr.*, d.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN died_person_identities as d ON lr.died_person_id=d.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/kematian';
                break;
            case "usaha":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, u.id as id_business,  a.*, lr.*, u.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN business_identities as u ON lr.business_id=u.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/izin_usaha';
                break;
            case "kepindahan":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, pi.id as id_move,  a.*, lr.*, pi.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as pi ON lr.move_id=pi.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/kedatangan';
                break;
            case "kedatangan":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, da.id as id_come,  a.*, lr.*, da.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as da ON lr.move_id=da.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/kedatangan';
                break;
            case "izin-kegiatan":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, lr.id as id_letter, ik.id as id_kegiatan,  a.*, lr.*, ik.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN event_identities as ik ON lr.event_id=ik.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/kegiatan';
                break;
            case "pengantar-nikah":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, pn.id as id_nikah,  a.*, lr.*, pn.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as pn ON lr.others_id=pn.id WHERE sl.id=$id";
                $url = 'dashboard/admin/letters/component/izin_nikah';
                break;
            case "kurang-mampu":
                $sql = "SELECT sl.id as submission_id, a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, km.id as id_miskin,  a.*, lr.*, km.* FROM submission_letter as sl INNER JOIN letter_requests as lr ON sl.letter_id=lr.id INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as km ON lr.others_id=km.id WHERE sl.id=$id";
                $url = 'dashboard/admin/components/tidak_mampu';
                break;
            default:
                redirect('adminpanel');
                break;
        }

        $data['detail_letter'] = $this->db->query($sql)->row_object();
        $this->template->load('dashboard/admin/letters/main_letter', $url, $data);
    }

    public function detail_application_management($letter_type, $id){
        $data['title'] = "Admin | Detail Managemen Pengajuan";

        switch ($letter_type) {
            case "kelahiran":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, k.id as id_birth,  a.*, lr.*, k.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN birth_baby_identities as k ON lr.birth_baby_id=k.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/birth_detail';
                break;
            case "kematian":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, d.id as id_died, d.nik as died_nik,  a.*, lr.*, d.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN died_person_identities as d ON lr.died_person_id=d.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/died_detail';
                break;
            case "usaha":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, u.id as id_business,  a.*, lr.*, u.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN business_identities as u ON lr.business_id=u.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/business_detail';
                break;
            case "kepindahan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, pi.id as id_move,  a.*, lr.*, pi.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as pi ON lr.move_id=pi.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/move_detail';
                break;
            case "kedatangan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, da.id as id_come,  a.*, lr.*, da.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as da ON lr.move_id=da.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/come_detail';
                break;
            case "izin-kegiatan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, ik.id as id_kegiatan,  a.*, lr.*, ik.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN event_identities as ik ON lr.event_id=ik.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/event_detail';
                break;
            case "pengantar-nikah":
                $sql = "SELECT a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, pn.id as id_nikah,  a.*, lr.*, pn.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as pn ON lr.others_id=pn.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/married_detail';
                break;
            case "kurang-mampu":
                $sql = "SELECT a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, km.id as id_miskin,  a.*, lr.*, km.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as km ON lr.others_id=km.id WHERE lr.id=$id";
                $url = 'dashboard/admin/components/poor_detail';
                break;
            default:
                redirect('adminpanel');
                break;
        }
        

        $data['letter'] = $this->db->query($sql)->row_object();
        $this->template->load('template/admin/template_admin', $url, $data);
    }

    public function change_letter_to_process($id) {
        $dataUpdate = [
            'status' => 2
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "submission_letter", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/mailing_management');
        }else {
            redirect('adminpanel/mailing_management');
        }
    }


    public function change_letter_to_send($id) {
        $dataUpdate = [
            'status' => 3
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "submission_letter", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/mailing_management');
        }else {
            redirect('adminpanel/mailing_management');
        }
    }

    public function change_letter_to_done($id) {
        $dataUpdate = [
            'status' => 4
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "submission_letter", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/mailing_management');
        }else {
            redirect('adminpanel/mailing_management');
        }
    }

    public function change_to_process($id){
        $dataUpdate = [
            'request_status' => 2
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "letter_requests", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/application_management');
        }else {
            redirect('adminpanel/application_management');
        }
    }

    public function change_to_success($id){
        $dataUpdate = [
            'request_status' => 4
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "letter_requests", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/application_management');
        }else {
            redirect('adminpanel/application_management');
        }
    }

    public function change_to_reject($id){
        $noted = $this->input->post('noted',true);

        $dataUpdate = [
            'request_status' => 3,
            'noted' => $noted
        ];

        $this->Mcrud->update_item($id, $dataUpdate, "letter_requests", "id" );

        if($this->db->affected_rows()){
           redirect('adminpanel/application_management');
        }else {
            redirect('adminpanel/application_management');
        }
    }

}