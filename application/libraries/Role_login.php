<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Role_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('Auth_model');
		$this->ci->load->helper('string');
	}

	public function login($username, $password)
	{
		$cek = $this->ci->Auth_model->login($username);
		if ($cek) {
			if ($cek && password_verify($password, $cek->password)) {
				if ($cek->status == 1) {
					$sekarang = date('Y-m-d H:i');
					$data = [
						'waktu_login' => $sekarang,
						'alamat_ip' => $this->ci->input->ip_address(),
						'id_pegawai' => $cek->id_pegawai
					];
					$this->ci->Auth_model->insert_log($data);
					$username = $cek->username;
					$nip = $cek->nip;
					$email = $cek->email;
					$nama_pegawai = $cek->nama_pegawai;
					$id_pegawai = $cek->id_pegawai;
					$telepon = $cek->telepon;
					$id_pegawai = $cek->id_pegawai;
					$alamat = $cek->alamat;
					$id_area = $cek->id_area;
					$id_sub_area = $cek->id_sub_area;
					$id_departemen = $cek->id_departemen;
					$nama_sub_area = $cek->nama_sub_area;
					$nama_area = $cek->nama_area;
					$nama_departemen = $cek->nama_departemen;
					$this->ci->session->set_userdata('username', $username);
					$this->ci->session->set_userdata('id_pegawai', $id_pegawai);
					$this->ci->session->set_userdata('nip', $nip);
					$this->ci->session->set_userdata('email', $email);
					$this->ci->session->set_userdata('nama_pegawai', $nama_pegawai);
					$this->ci->session->set_userdata('id_pegawai', $id_pegawai);
					$this->ci->session->set_userdata('telepon', $telepon);
					$this->ci->session->set_userdata('alamat', $alamat);
					$this->ci->session->set_userdata('id_area', $id_area);
					$this->ci->session->set_userdata('id_departemen', $id_departemen);
					$this->ci->session->set_userdata('id_sub_area', $id_sub_area);
					$this->ci->session->set_userdata('nama_sub_area', $nama_sub_area);
					$this->ci->session->set_userdata('nama_area', $nama_area);
					$this->ci->session->set_userdata('nama_departemen', $nama_departemen);
					if ($this->ci->session->userdata('id_departemen')) {
						redirect('admin/dashboard');
					} else {
						$this->ci->session->set_userdata('username', $username);
						$this->ci->session->set_userdata('id_pegawai', $id_pegawai);
						$this->ci->session->set_userdata('nip', $nip);
						$this->ci->session->set_userdata('email', $email);
						$this->ci->session->set_userdata('nama_pegawai', $nama_pegawai);
						$this->ci->session->set_userdata('id_pegawai', $id_pegawai);
						$this->ci->session->set_userdata('telepon', $telepon);
						$this->ci->session->set_userdata('alamat', $alamat);
						$this->ci->session->set_userdata('id_area', $id_area);
						$this->ci->session->set_userdata('id_departemen', $id_departemen);
						$this->ci->session->set_userdata('id_sub_area', $id_sub_area);
						$this->ci->session->set_userdata('nama_sub_area', $nama_sub_area);
						$this->ci->session->set_userdata('nama_area', $nama_area);
						$this->ci->session->set_userdata('nama_departemen', $nama_departemen);
						redirect('admin/dashboard');
					}
				} else {
					$this->ci->session->set_flashdata('tidak_aktif', 'Username Tidak Aktif');
					redirect('auth');
				}
			} else {
				$this->ci->session->set_flashdata('salah', 'Username Atau Password Salah');
				redirect('auth');
			}
		} else {
			$this->ci->session->set_flashdata('salah', 'Username Tidak Terdaftar');
			redirect('auth');
		}
	}
	public function cek_login()
	{
		if ($this->ci->session->userdata('username') == "") {
			$this->ci->session->set_flashdata('pesan', 'Anda Belom Login !!!');
			redirect('auth');
		}
	}
	public function logout()
	{
		$this->ci->session->sess_destroy();
		redirect('auth');
	}
}
