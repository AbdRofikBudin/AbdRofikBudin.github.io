<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    private function checkAuth()
    {
        $id = $this->session->userdata('id');
        $checkFiledLetter = $this->db->get_where('letter_requests', array('applicant_id' => $id, 'request_status' => 1))->num_rows();
        $checkProcessingLetter = $this->db->get_where('letter_requests', array('applicant_id' => $id, 'request_status' => 2))->num_rows();

        if (!$this->session->userdata('is_logged')) {
            redirect('Login');
        } else if ($checkFiledLetter > 0 || $checkProcessingLetter > 0) {
            redirect('Home');
        }
    }

    public function index()
    {
        $data['title'] = "Home | Desa Lafeu";
        $this->load->view('home/index', $data);
    }

    public function layanan_surat($letter_type)
    {
        $this->checkAuth();
        $id = $this->session->userdata('id');
        $data['user_identity'] = $this->Mcrud->get_items($id, "applicants", "id");

        switch ($letter_type) {
            case "kelahiran":
                $title = "Home | Surat Keterangan Kelahiran";
                $type = "Surat Keterangan Kelahiran";
                $component_url = 'home/components/surat_form/kelahiran';
                break;
            case "kematian":
                $title = "Home | Surat Keterangan Kematian";
                $type = "Surat Keterangan Kematian";
                $component_url = 'home/components/surat_form/kematian';
                break;
            case "usaha":
                $title = "Home | Surat Keterangan Izin Usaha";
                $type = "Surat Keterangan Izin Usaha";
                $component_url = 'home/components/surat_form/usaha';
                break;
            case "kepindahan":
                $title = "Home | Surat Keterangan Perpindahan";
                $type = "Surat Keterangan Perpindahan";
                $component_url = 'home/components/surat_form/kepindahan';
                break;
            case "kedatangan":
                $title = "Home | Surat Keterangan Kedatangan";
                $type = "Surat Keterangan Kedatangan";
                $component_url = 'home/components/surat_form/kedatangan';
                break;
            case "izin-kegiatan":
                $title = "Home | Surat Keterangan Izin Berkegiatan";
                $type = "Surat Keterangan Izin Berkegiatan";
                $component_url = 'home/components/surat_form/izin_kegiatan';
                break;
            case "pengantar-nikah":
                $title = "Home | Surat Keterangan Pengantar Nikah";
                $type = "Surat Keterangan Pengantar Nikah";
                $component_url = 'home/components/surat_form/pengantar_nikah';
                break;
            case "kurang-mampu":
                $title = "Home | Surat Keterangan Kurang Mampu";
                $type = "Surat Keterangan Kurang Mampu";
                $component_url = 'home/components/surat_form/kurang_mampu';
                break;
            default:
                redirect('Home');
                break;
        }

        $data['title'] = $title;
        $data['service'] = $type;
        $this->template->load('home/letter_services', $component_url, $data);
    }
}
