<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('auth');
        }
        $this->load->model("ht_model");
        $this->load->library("form_validation");
    }

    public function index()
    {
        $data['title'] = 'Beranda | TIK Polda Sumsel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('user/index', $data);
    }

    public function profil()
    {

        $data['title'] = 'Profil | TIK Polda Sumsel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/profil', $data);
        $this->load->view('templates/user_footer', $data);
    }

    public function ht()
    {

        $this->form_validation->set_rules('nrp', 'Nrp', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('satker', 'Satker', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Layanan | TIK Polda Sumsel';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('user/ht', $data);
        } else {
            $this->tambah_ht();
        }
    }

    public function tambah_ht()
    {
        $nrp = $this->input->post('nrp');
        $nama = $this->input->post('nama');
        $satker = $this->input->post('satker');
        $perihal = $this->input->post('perihal');
        $waktu = $this->input->post('waktu');

        $data = array(
            'nrp' => $nrp,
            'nama' => $nama,
            'satker' => $satker,
            'perihal' => $perihal,
            'waktu' => $waktu
        );
        $this->ht_model->input_data($data, 'ht');
        $this->session->set_flashdata(
            'message2',
            '<div class="alert alert-success" role="alert">Pengaduan berhasil dikirim!</div>'
        );
        redirect('user/ht');
    }

    public function vicon()
    {
        $this->form_validation->set_rules('nrp', 'Nrp', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('satker', 'Satker', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Layanan | TIK Polda Sumsel';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

            $this->load->view('user/vicon', $data);
        } else {
            $this->tambah_vicon();
        }
    }

    public function tambah_vicon()
    {
        $nrp = $this->input->post('nrp');
        $nama = $this->input->post('nama');
        $satker = $this->input->post('satker');
        $perihal = $this->input->post('perihal');
        $waktu = $this->input->post('waktu');


        $data = array(
            'nrp' => $nrp,
            'nama' => $nama,
            'satker' => $satker,
            'perihal' => $perihal,
            'waktu' => $waktu
        );
        $this->ht_model->input_data($data, 'vicon');
        $this->session->set_flashdata(
            'message2',
            '<div class="alert alert-success" role="alert">Pengaduan berhasil dikirim!</div>'
        );
        redirect('user/vicon');
    }


    public function sound()
    {
        $this->form_validation->set_rules('nrp', 'Nrp', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('satker', 'Satker', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Layanan | TIK Polda Sumsel';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('user/sound', $data);
        } else {
            $this->tambah_sound();
        }
    }

    public function tambah_sound()
    {
        $nrp = $this->input->post('nrp');
        $nama = $this->input->post('nama');
        $satker = $this->input->post('satker');
        $perihal = $this->input->post('perihal');
        $waktu = $this->input->post('waktu');


        $data = array(
            'nrp' => $nrp,
            'nama' => $nama,
            'satker' => $satker,
            'perihal' => $perihal,
            'waktu' => $waktu
        );
        $this->ht_model->input_data($data, 'sound');
        $this->session->set_flashdata(
            'message2',
            '<div class="alert alert-success" role="alert">Pengaduan berhasil dikirim!</div>'
        );
        redirect('user/sound');
    }

    public function dll()
    {
        $this->form_validation->set_rules('nrp', 'Nrp', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('satker', 'Satker', 'required');
        $this->form_validation->set_rules('perihal', 'Perihal', 'required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Layanan | TIK Polda Sumsel';
            $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('user/dll', $data);
        } else {
            $this->tambah_dll();
        }
    }

    public function tambah_dll()
    {
        $nrp = $this->input->post('nrp');
        $nama = $this->input->post('nama');
        $satker = $this->input->post('satker');
        $perihal = $this->input->post('perihal');
        $waktu = $this->input->post('waktu');


        $data = array(
            'nrp' => $nrp,
            'nama' => $nama,
            'satker' => $satker,
            'perihal' => $perihal,
            'waktu' => $waktu
        );
        $this->ht_model->input_data($data, 'dll');
        $this->session->set_flashdata(
            'message2',
            '<div class="alert alert-success" role="alert">Pengaduan berhasil dikirim!</div>'
        );
        redirect('user/dll');
    }
    public function kegiatan()
    {

        $data['title'] = 'Kegiatan | TIK Polda Sumsel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ht_model->tampil_data()->result();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/kegiatan', $data);
        $this->load->view('templates/user_footer', $data);
    }

    public function kontakus()
    {

        $data['title'] = 'Kontak | TIK Polda Sumsel';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/user_header', $data);
        $this->load->view('user/kontakus', $data);
        $this->load->view('templates/user_footer', $data);
    }
}
