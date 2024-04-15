<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Mcrud');
       
    }

    public function index()
    {
        $data['title'] = "Login | Desa Lafeu";
        $this->session->unset_userdata('captchaCode');
        $captcha = createCaptcha();
        $this->session->set_userdata('captchaCode', $captcha['word']);
        $data['captcha'] = $captcha['img'];
        $this->load->view('login/index', $data);
    }

    public function auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('captcha', 'captcha', 'required|matches[captcha-text]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        $this->form_validation->set_rules('captcha-text', 'captcha-text', 'required|matches[captcha]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        if ($this->form_validation->run() ==  false) {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_userdata('flash-gagal', form_error('captcha'));
            redirect('Login');
        } else {
            $check_credential = $this->Mcrud->get_items($username, "applicants", "username");

            if ($check_credential && $check_credential['verif_status'] != 0) {
                if (password_verify($password, $check_credential['password'])) {
                    $session_data = [
                        "id" => $check_credential['id'],
                        "username" => $check_credential['username'],
                        "email" => $check_credential['email'],
                        "nama" => $check_credential['applicant_name'],
                        "is_logged" => true
                    ];

                    $this->session->set_userdata($session_data);
                    redirect('Home');
                } else {
                    $this->session->set_flashdata('flash-gagal', 'Password Salah');
                    redirect('Login');
                }
            } else {
                if (!empty($check_credential) && $check_credential['verif_status'] == 0) {
                    $this->session->set_flashdata('flash-gagal', 'Akun Belum Aktif Silahkan cek Email');
                    redirect('Login');
                } else {
                    $this->session->set_flashdata('flash-gagal', 'Akun belum terdaftar');
                    redirect('Login');
                }
            }
        }
    }

    public function admin()
    {
        $data['title'] = "Login Admin";
        $this->session->unset_userdata('captchaCode');
        $captcha = createCaptcha();
        $this->session->set_userdata('captchaCode', $captcha['word']);
        $data['captcha'] = $captcha['img'];
        $this->load->view('dashboard/admin/login', $data);
    }

    public function admin_auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('captcha', 'captcha', 'required|matches[captcha-text]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        $this->form_validation->set_rules('captcha-text', 'captcha-text', 'required|matches[captcha]', [
            'required' => "Captcha Wajib Diisi",
            'matches' => "Captcha Salah"
        ]);

        if ($this->form_validation->run() ==  false) {
            $this->form_validation->set_error_delimiters('', '');
            $this->session->set_flashdata('flash-gagal', form_error('captcha'));
            redirect('login/admin');
        } else {
            $check_credential = $this->Mcrud->get_items($username, "admin_operators", "username");

            if ($check_credential) {
                if (password_verify($password, $check_credential['password'])) {
                    $session_data = [
                        "id" => $check_credential['id'],
                        "username" => $check_credential['username'],
                        "nama" => $check_credential['admin_name'],
                        "is_admin" => true
                    ];

                    $this->session->set_userdata($session_data);
                    redirect('adminpanel');
                } else {
                    $this->session->set_flashdata('flash-gagal', 'Password Salah!');
                    redirect('login/admin');
                }
            } else {
                $this->session->set_flashdata('flash-gagal', 'Akun belum terdaftar!');
                redirect('login/admin');
            }
        }
    }

    public function signout()
    {
        session_destroy();
        redirect(($this->session->userdata('is_admin')) ? 'login/admin' : 'Home');
    }
}
