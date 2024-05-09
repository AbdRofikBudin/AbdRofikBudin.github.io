<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
    }

    public function sendMail($email, $username)
    {
        $this->load->library('email');

        $config['protocol'] = 'smtp'; // or 'sendmail' or 'mail'
        $config['smtp_host'] = 'mail.katra.tech'; // your SMTP host
        $config['smtp_port'] = 465; // your SMTP port number
        $config['smtp_user'] = 'info-desa-lafeu@katra.tech'; // your SMTP username
        $config['smtp_pass'] = 'Bismillah00@#'; // your SMTP password
        $config['smtp_crypto'] = 'ssl'; // SSL or TLS
        $config['mailtype'] = 'html'; // text or html
        $config['charset'] = 'utf-8'; // character set
        $config['newline'] = "\r\n"; // character set

        $this->email->initialize($config);

        $this->email->from('info-desa-lafeu@katra.tech', 'Info Desa Lafeu');
        $this->email->to($email);
        // $this->email->cc('another@example.com'); // optional
        // $this->email->bcc('hidden@example.com'); // optional
        $data = [
            "identity" => $username
        ];
        $body = $this->load->view('email/emailVerifikasi', $data, true);


        $this->email->subject('Verifikasi User');
        $this->email->message($body);

        if ($this->email->send()) {
            echo 'Email sent successfully.';
        } else {
            echo $this->email->print_debugger();
        }
    }

    public function index()
    {
        $data['title'] = "Register User";
        $data['error'] = false;
        $this->session->unset_userdata('captchaCode');
        $captcha = createCaptcha();
        $this->session->set_userdata('captchaCode', $captcha['word']);
        $data['captcha'] = $captcha['img'];
        $this->load->view('register/index', $data);
    }

    public function registerUser()
    {
        $nik = $this->input->post('nik', true);
        $nama = $this->input->post('nama', true);
        $gender = $this->input->post('gender', true);
        $email = $this->input->post('email', true);
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);
        $place_birth = $this->input->post('tempat-lahir', true);
        $date_birth = $this->input->post('tanggal-lahir', true);
        $religion = $this->input->post('agama', true);
        $address = $this->input->post('alamat', true);


        $this->form_validation->set_rules('nik', 'nik', 'required|min_length[16]|max_length[16]', [
            'required' => "Field NIK Wajib Diisi",
            'min_length' => "NIK Isi minimal 16 karakter",
            'max_length' => "NIK Isi maximun 16 karakter"
        ]);

        $this->form_validation->set_rules('email', 'email', 'required|valid_email', [
            'required' => "Field Email Wajib Diisi",
            'valid_email' => "Isi dengan email yang valid"
        ]);

        $this->form_validation->set_rules('username', 'username', 'required|is_unique[applicants.username]', [
            'required' => "Field Username Wajib Diisi",
            'is_unique' => "Username telah digunakan"
        ]);

        $this->form_validation->set_rules('nama', 'nama', 'required', [
            'required' => "Field Nama Lengkap Wajib Diisi"
        ]);

        $this->form_validation->set_rules('tempat-lahir', 'tempat-lahir', 'required', [
            'required' => "Tempat Lahir Wajib Diisi"
        ]);

        $this->form_validation->set_rules('tanggal-lahir', 'tanggal-lahir', 'required', [
            'required' => "Tanggal Lahir Wajib Diisi"
        ]);

        $this->form_validation->set_rules('alamat', 'alamat', 'required', [
            'required' => "Alamat Wajib Diisi"
        ]);

        $this->form_validation->set_rules('password', 'password', 'required|matches[confirm-password]', [
            'required' => "Field Password Wajib Diisi",
            'matches' => "Password Tidak Sama"
        ]);

        $this->form_validation->set_rules('confirm-password', 'confirm-password', 'required|matches[password]', [
            'required' => "Field Password Wajib Diisi",
            'matches' => "Password Tidak Sama"
        ]);

        $this->form_validation->set_rules('captcha', 'captcha', 'required|matches[captcha-text]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        $this->form_validation->set_rules('captcha-text', 'captcha-text', 'required|matches[captcha]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        if ($this->form_validation->run() == false) {
            $this->form_validation->set_error_delimiters('', '');
            $data['title'] = "Register User";
            $data['error'] = true;
            $this->session->unset_userdata('captchaCode');
            $captcha = createCaptcha();
            $this->session->set_userdata('captchaCode', $captcha['word']);
            $data['captcha'] = $captcha['img'];
            $this->load->view('register/index', $data);
        } else {

            $data_insert = array(
                "applicant_name" => $nama,
                "nik" => $nik,
                "email" => $email,
                "gender" => $gender,
                "place_of_birth" => $place_birth,
                "date_of_birth" => $date_birth,
                "religion" => $religion,
                "address" => $address,
                "username" => $username,
                "password" => password_hash($password, PASSWORD_DEFAULT),
                "verif_status" => 0
            );

            $this->Mcrud->create_item($data_insert, "applicants");

            if ($this->db->affected_rows()) {
                $this->sendMail($email, $username);
                $this->session->set_flashdata('flash', "Register Berhasil, Silahkan Cek Email untuk Verifikasi Data");
                redirect("Register");
            } else {
                $this->session->set_flashdata('flash-gagal', "Register Gagal");
                redirect("Register");
            }
        }
    }

    public function verifyUser($username)
    {
        $data = $this->Mcrud->get_items($username, "applicants", "username");

        if (!empty($data) && $data['verif_status'] != 1) {
            $data_update = array(
                "verif_status" => 1
            );

            $this->Mcrud->update_item($username, $data_update, "applicants", "username");

            if ($this->db->affected_rows()) {
                $this->session->set_userdata('flash', "Verifikasi User Berhasil");
                redirect("login");
            } else {
                $this->session->set_userdata('flash-gagal', "Verifikasi User Gagal");
                redirect("login");
            }
        } else {
            if ($data['verif_status'] == 1) {
                $this->session->set_userdata('flash-gagal', "User Sudah Diverifikasi");
            } else {
                $this->session->set_userdata('flash-gagal', "Data User Tidak Ditemukan");
            }

            redirect("login");
        }
    }
}
