<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
    function __construct()
    {
        parent::__construct();
        if(!$this->session->userdata('is_logged')) {
            redirect('Login');
        }
        $this->load->model('Mcrud');
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

    public function letter_history(){
        $id = $this->session->userdata('id');
        $data['title'] = "Dashboard User | Letters History";
        $data['letters'] = $this->Mcrud->get_spesific_items("letter_requests", "applicant_id", $id);
        $this->template->load('template/user/template_user', 'dashboard/user/letter_history', $data);
    }

    public function detail_letter($letter_type, $id) {
        $data['title'] = "Dashboard | Detail Pengajuan";

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
        $this->template->load('template/user/template_user', $url, $data);
    }

    public function letter_document_history(){
        $id = $this->session->userdata('id');
        $data['title'] = "Dashboard User | Letters Document";
        $sql = "SELECT sl.id as id_submission, a.id as id_applicant, lr.id as id_letter, sl.*, a.*, lr.* FROM submission_letter sl INNER JOIN applicants a ON sl.applicant_id = a.id INNER JOIN letter_requests lr ON sl.letter_id = lr.id WHERE sl.applicant_id=$id ORDER BY sl.submission_date DESC";
        $data['letters'] = $this->db->query($sql)->result();
        $this->template->load('template/user/template_user', 'dashboard/user/letter_history_doc', $data);
    }

    public function action_letter_doc() {
        $applicant_id = $this->input->post('applicant_id', true);
        $letter_id = $this->input->post('letter_id', true);
        $wa = $this->input->post('wa', true);
        $alamat = $this->input->post('alamat', true);

        $dataInsert = [
            "applicant_id" => $applicant_id,
            "letter_id" => $letter_id,
            "status" => 1,
            "wa" => $wa,
            "submission_date" => date('Y-m-d'),
            "full_address" => $alamat
        ];

        $this->Mcrud->create_item($dataInsert, "submission_letter");

        if($this->db->affected_rows()){
            $this->session->set_flashdata('flash', 'Berhasil Mengajukan Dokumen Fisik');
            redirect('dashboard/letter_document_history');
        }else{
            $this->session->set_flashdata('flash-gagal', 'Gagal Mengajukan Dokumen Fisik');
            redirect('dashboard/letter_history');
        }
    }
    
    public function electronic_letter($letter_type, $id){
        $data['title'] = "Electronic Letter";

        switch ($letter_type) {
            case "kelahiran":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, k.id as id_birth, a.*, lr.*, k.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN birth_baby_identities as k ON lr.birth_baby_id=k.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/kelahiran';
                break;
            case "kematian":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, d.id as id_died, d.nik as died_nik, d.religion as died_religion, a.*, lr.*, d.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN died_person_identities as d ON lr.died_person_id=d.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/kematian';
                break;
            case "usaha":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, u.id as id_business, a.*, lr.*, u.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN business_identities as u ON lr.business_id=u.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/izin_usaha';
                break;
            case "kepindahan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, pi.id as id_move,  a.*, lr.*, pi.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as pi ON lr.move_id=pi.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/kedatangan';
                break;
            case "kedatangan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, da.id as id_come,  a.*, lr.*, da.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN move_identities as da ON lr.move_id=da.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/kedatangan';
                break;
            case "izin-kegiatan":
                $sql = "SELECT a.id as id_applicant, lr.id as id_letter, ik.id as id_kegiatan,  a.*, lr.*, ik.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN event_identities as ik ON lr.event_id=ik.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/kegiatan';
                break;
            case "pengantar-nikah":
                $sql = "SELECT a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, pn.id as id_nikah,  a.*, lr.*, pn.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as pn ON lr.others_id=pn.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/izin_nikah';
                break;
            case "kurang-mampu":
                $sql = "SELECT a.id as id_applicant, a.nik as nik_applicant, lr.id as id_letter, km.id as id_miskin,  a.*, lr.*, km.* FROM letter_requests as lr INNER JOIN applicants as a ON lr.applicant_id = a.id INNER JOIN others_identities as km ON lr.others_id=km.id WHERE lr.id=$id";
                $url = 'dashboard/admin/letters/component/tidak_mampu';
                break;
            default:
                redirect('adminpanel');
                break;
        }

        $data['detail_letter'] = $this->db->query($sql)->row_object();
        $data['letter_no'] = $this->Mcrud->generate_letter_no("letter_requests");
        $this->template->load('dashboard/admin/letters/main_letter', $url, $data);
    }

    public function edit_profile(){
        $id = $this->session->userdata('id');
        $data['title'] = "edit profile";
        $data['applicant'] = $this->db->get_where('applicants', array('id' => $id))->row_object();
        $this->template->load('template/user/template_user', 'dashboard/user/edit_profile', $data);
    }

    public function edit_profile_action(){
        $id = $this->session->userdata('id');
        $nama = $this->input->post('nama', true);
        $nik = $this->input->post('nik', true);
        $email = $this->input->post('email', true);
        $tempatLahir = $this->input->post('tempat-lahir', true);
        $tanggalLahir = $this->input->post('tanggal-lahir', true);
        $agama = $this->input->post('agama', true);
        $alamat = $this->input->post('alamat', true);
        $pass = $this->input->post('password', true);

        if(empty($pass)) {
            $dataUpdate = [
                "applicant_name" => $nama,
                "nik" => $nik,
                "email" => $email,
                "place_of_birth" => $tempatLahir,
                "date_of_birth" => $tanggalLahir,
                "religion" => $agama,
                "address" => $alamat,
            ];
        }else {
            $dataUpdate = [
                "applicant_name" => $nama,
                "nik" => $nik,
                "email" => $email,
                "place_of_birth" => $tempatLahir,
                "date_of_birth" => $tanggalLahir,
                "religion" => $agama,
                "address" => $alamat,
                "password" => password_hash($pass, PASSWORD_DEFAULT)
            ];
        }

        $this->Mcrud->update_item($id, $dataUpdate, "applicants", "id" );

        if($this->db->affected_rows()){
            $this->session->set_flashdata('flash', 'Data berhasil diupdate');

            if(empty($pass)){
                redirect('dashboard/edit_profile');
            }else {
                session_destroy();
                redirect('login');
            }
        }else {
            $this->session->set_flashdata('flash-gagal', 'Data gagal diupdate');
            redirect('dashboard/edit_profile');
        }
        
    }
}