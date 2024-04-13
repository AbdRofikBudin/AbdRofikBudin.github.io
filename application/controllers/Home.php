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
            $this->session->set_flashdata('flash-gagal', "Surat Sedang Diproses");
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

    public function letter_request_action($letter_type)
    {
        $this->checkAuth();
        $id = $this->session->userdata('id');
        $config = array(
            'upload_path' => "./assets/letter_request/img",
            'allowed_types' => "gif|jpg|png|jpeg|pdf",
            'overwrite' => TRUE,
            'max_size' => "2048000", // 2 MB
            'encrypt_name' => TRUE
        );

        $this->load->library('upload', $config);

        switch ($letter_type) {
            case "kelahiran":
                $this->letter_request_birth($id);
                break;
            case "kematian":
                $this->letter_request_died($id);
                break;
            case "usaha":
                $this->letter_request_business($id);
                break;
            case "kepindahan":
                $this->letter_request_move($id, "kepindahan");
                break;
            case "kedatangan":
                $this->letter_request_move($id, "kedatangan");
                break;
            case "izin-kegiatan":
                $this->letter_request_event($id);
                break;
            case "pengantar-nikah":
                $this->letter_request_others($id, "pengantar-nikah");
                break;
            case "kurang-mampu":
                $this->letter_request_others($id, "kurang-mampu");
                break;
            default:
                redirect('Home');
                break;
        }
    }

    private function letter_request_birth($idApplicant)
    {
        $id = $this->Mcrud->generate_id('birth_baby_identities');
        $namaIbu = $this->input->post('nama-ibu', true);
        $nikIbu = $this->input->post('nik-ibu', true);
        $namaAyah = $this->input->post('nama-ayah', true);
        $nikAyah = $this->input->post('nik-ayah', true);
        $namaAnak = $this->input->post('nama-anak', true);
        $tempatLahir = $this->input->post('tempat-kelahiran', true);
        $tanggalLahir = $this->input->post('tanggal-kelahiran', true);
        $agamaAnak = $this->input->post('agama', true);
        $jenisKelamin = $this->input->post('gender', true);
        $anakKe = $this->input->post('anak-ke', true);


        for ($x = 0; $x < 2; $x++) {
            if ($x == 0) {
                if ($this->upload->do_upload('surket-bidan')) {
                    $surketBidan = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/kelahiran');
                }
            } else {
                if ($this->upload->do_upload('kk')) {
                    $kk = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/kelahiran');
                }
            }
        }

        $dataInsert = array(
            "id" => $id,
            "mother_name" => $namaIbu,
            "mother_nik" => $nikIbu,
            "father_name" => $namaAyah,
            "father_nik" => $nikAyah,
            "baby_name" => $namaAnak,
            "birth_place" => $tempatLahir,
            "birth_date" => $tanggalLahir,
            "baby_religion" => $agamaAnak,
            "baby_gender" => $jenisKelamin,
            "child_order" => $anakKe
        );

        $this->Mcrud->create_item($dataInsert, "birth_baby_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => "kelahiran",
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ket_bidan" => $surketBidan,
                "att_kk" => $kk,
                "birth_baby_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data Anak");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data Anak");
            redirect('Home/layanan_surat/kelahiran');
        }
    }

    private function letter_request_died($idApplicant)
    {
        $id = $this->Mcrud->generate_id('died_person_identities');
        $nik = $this->input->post('nik-jenazah', true);
        $nama = $this->input->post('nama-jenazah', true);
        $tempatLahir = $this->input->post('tempat-lahir', true);
        $tanggalLahir = $this->input->post('tanggal-lahir', true);
        $agama = $this->input->post('agama', true);
        $jenisKelamin = $this->input->post('gender', true);
        $lokasi = $this->input->post('lokasi', true);
        $umur = $this->input->post('usia-meninggal', true);
        $tanggalMeninggal = $this->input->post('tanggal-meninggal', true);
        $penyebabMeninggal = $this->input->post('penyebab-meninggal', true);


        for ($x = 0; $x < 2; $x++) {
            if ($x == 0) {
                if ($this->upload->do_upload('ktp')) {
                    $ktp = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/kematian');
                }
            } else {
                if ($this->upload->do_upload('kk')) {
                    $kk = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/kematian');
                }
            }
        }

        $dataInsert = array(
            "id" => $id,
            "nik" => $nik,
            "name" => $nama,
            "birth_place" => $tempatLahir,
            "birth_date" => $tanggalLahir,
            "religion" => $agama,
            "gender" => $jenisKelamin,
            "died_last_loc" => $lokasi,
            "last_age" => $umur,
            "died_date" => $tanggalMeninggal,
            "died_cause" => $penyebabMeninggal
        );

        $this->Mcrud->create_item($dataInsert, "died_person_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => "kematian",
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ktp" => $ktp,
                "att_kk" => $kk,
                "died_person_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data Kematian");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data Kematian");
            redirect('Home/layanan_surat/kematian');
        }
    }

    private function letter_request_move($idApplicant, $type)
    {
        $id = $this->Mcrud->generate_id('move_identities');
        $alamatAsal = $this->input->post('alamat-asal', true);
        $alamatTujuan = $this->input->post('alamat-tujuan', true);
        $alasanPindah = $this->input->post('alasan-pindah', true);

        for ($x = 0; $x < 3; $x++) {
            if ($x == 0) {
                if ($this->upload->do_upload('surat-pindah')) {
                    $suratPindah = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/' . $type);
                }
            } else if ($x == 1) {
                if ($this->upload->do_upload('kk')) {
                    $kk = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/' . $type);
                }
            } else {
                if ($this->upload->do_upload('ktp')) {
                    $ktp = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/' . $type);
                }
            }
        }

        $dataInsert = array(
            "id" => $id,
            "home_address" => $alamatAsal,
            "destination_address" => $alamatTujuan,
            "reason_leave" => $alasanPindah
        );

        $this->Mcrud->create_item($dataInsert, "move_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => $type,
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ktp" => $ktp,
                "att_kk" => $kk,
                "att_ket_pindah" => $suratPindah,
                "move_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data $type");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data $type");
            redirect('Home/layanan_surat/' . $type);
        }
    }

    private function letter_request_business($idApplicant)
    {
        $id = $this->Mcrud->generate_id('business_identities');
        $namaUsaha = $this->input->post('nama-usaha', true);
        $alamatUsaha = $this->input->post('alamat-usaha', true);
        $kategoriUsaha = $this->input->post('kategori-usaha', true);
        $namaPemilikUsaha = $this->input->post('pemilik-usaha', true);

        for ($x = 0; $x < 2; $x++) {
            if ($x == 0) {
                if ($this->upload->do_upload('ktp')) {
                    $ktp = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/usaha');
                }
            } else {
                if ($this->upload->do_upload('dokumen-usaha')) {
                    $dokumenUsaha = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/usaha');
                }
            }
        }

        $dataInsert = array(
            "id" => $id,
            "business_name" => $namaUsaha,
            "business_address" => $alamatUsaha,
            "business_category" => $kategoriUsaha,
            "owner_name" => $namaPemilikUsaha
        );

        $this->Mcrud->create_item($dataInsert, "business_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => "usaha",
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ktp" => $ktp,
                "att_business_doc" => $dokumenUsaha,
                "business_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data Usaha");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data Usaha");
            redirect('Home/layanan_surat/usaha');
        }
    }

    private function letter_request_others($idApplicant, $type)
    {
        $id = $this->Mcrud->generate_id('others_identities');
        $pekerjaan = $this->input->post('pekerjaan', true);
        $letterType = ($type) == "pengantar-nikah" ? 1 : 2;
        $deskripsi = ($type) == "pengantar-nikah" ? $type : $this->input->post('deskripsi', true);

        for ($x = 0; $x < 2; $x++) {
            if ($x == 0) {
                if ($this->upload->do_upload('ktp')) {
                    $ktp = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/' . $type);
                }
            } else {
                if ($this->upload->do_upload('kk')) {
                    $kk = $this->upload->data('file_name');
                } else {
                    $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
                    redirect('Home/layanan_surat/' . $type);
                }
            }
        }

        $dataInsert = array(
            "id" => $id,
            "jobs" => $pekerjaan,
            "type" => $letterType,
            "description" => $deskripsi
        );

        $this->Mcrud->create_item($dataInsert, "others_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => $type,
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ktp" => $ktp,
                "att_kk" => $kk,
                "others_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data $type");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data $type");
            redirect('Home/layanan_surat/' . $type);
        }
    }

    private function letter_request_event($idApplicant)
    {
        $id = $this->Mcrud->generate_id('event_identities');
        $namaKegiatan = $this->input->post('nama-kegiatan', true);
        $tempatKegiatan = $this->input->post('tempat-kegiatan', true);
        $lamaPelaksanaan = $this->input->post('lama-kegiatan', true);
        $tanggalPelaksanaan = $this->input->post('tanggal', true);
        $waktuMulai = $this->input->post('waktu-mulai', true);
        $waktuSelesai = $this->input->post('waktu-selesai', true);

        if ($this->upload->do_upload('ktp')) {
            $ktp = $this->upload->data('file_name');
        } else {
            $this->session->set_flashdata('flash-gagal', $this->upload->display_errors());
            redirect('Home/layanan_surat/izin-kegiatan');
        }

        $dataInsert = array(
            "id" => $id,
            "event_name" => $namaKegiatan,
            "event_location" => $tempatKegiatan,
            "event_duration" => $lamaPelaksanaan,
            "event_date" => $tanggalPelaksanaan,
            "event_start" => $waktuMulai,
            "event_end" => $waktuSelesai
        );

        $this->Mcrud->create_item($dataInsert, "event_identities");

        if ($this->db->affected_rows()) {
            $dataInsertLetter = array(
                "applicant_id" => $idApplicant,
                "request_type" => "izin-kegiatan",
                "request_date" => date('Y-m-d'),
                "request_status" => 1,
                "att_ktp" => $ktp,
                "event_id" => $id
            );
            $this->Mcrud->create_item($dataInsertLetter, "letter_requests");
            $this->session->set_flashdata('flash', "Berhasil Menyimpan Data Kegiatan");
            redirect('Home');
        } else {
            $this->session->set_flashdata('flash-gagal', "Gagal Menyimpan Data Kegiatan");
            redirect('Home/layanan_surat/izin-kegiatan');
        }
    }
}
