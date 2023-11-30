<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'form', 'string'));
        $this->load->model('Auth_model');
        $this->load->model('Admin/Pengguna_model');
        $this->load->library(array('form_validation', 'recaptcha'));
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        $recaptcha = $this->input->post('g-recaptcha-response');
        if (!empty($recaptcha)) {
            $response = $this->recaptcha->verifyResponse($recaptcha);
            if (isset($response['success']) and $response['success'] === true) {
                if ($this->form_validation->run() == false) {
                    $data['title'] = 'LOGIN';
                    $this->load->view('auth/v_login', $data);
                    $this->session->set_flashdata('salah', 'Username Atau Password Salah');
                    redirect('auth');
                } else {
                    $username = $this->input->post('username');
                    $password = $this->input->post('password');
                    $this->role_login->login($username, $password);
                }
            }
        }
        $data['widget'] = $this->recaptcha->getWidget();
        $data['script'] = $this->recaptcha->getScriptTag();
        $this->load->view('auth/v_login', $data);
    }

    function ubah_password()
    {
        $username = $this->input->post('username');
        $id_pegawai = $this->input->post('id_pegawai');
        $password = $this->input->post('password');
        $confirmPassword = $this->input->post('confirmPassword');
        if ($password == '') {
            $this->session->set_flashdata('password_kosong', 'Password Tidak Boleh Kosong');
            redirect('profile');
        } else {
            if ($password == $confirmPassword) {
                $where = [
                    'id_pegawai' => $id_pegawai
                ];
                $data = [
                    'username' =>  $username,
                    'password' => password_hash($password, PASSWORD_DEFAULT),
                ];
                $this->Pengguna_model->update($where, $data);
                $this->session->set_flashdata('berhasil_ubah_password', 'Password Berhasil Di Ubah');
            } else {
                $this->session->set_flashdata('password_kosong', 'Password Tidak Sama');
            }
            redirect('profile');
        }
    }


    public function logout()
    {
        $this->role_login->logout();
    }
}
