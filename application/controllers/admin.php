<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('ht_model');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['totalHt'] = $this->ht_model->jumlahSuratHt();
        $data['totalVicon'] = $this->ht_model->jumlahSuratVicon();
        $data['totalSound'] = $this->ht_model->jumlahSuratSound();
        $data['totalDll'] = $this->ht_model->jumlahSuratDll();
        $this->load->view('admin/index', $data);
    }

    public function table_ht()
    {
        $data['title'] = 'Database Layanan | Table HT';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['ht'] = $this->ht_model->tampil_ht()->result();

        $this->load->view('admin/table_ht', $data);
    }
    public function table_vicon()
    {
        $data['title'] = 'Database Layanan | Table Vicon';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['vicon'] = $this->ht_model->tampil_vicon()->result();
        $this->load->view('admin/table_vicon', $data);
    }
    public function table_sound()
    {
        $data['title'] = 'Database Layanan | Table Sound';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['sound'] = $this->ht_model->tampil_sound()->result();

        $this->load->view('admin/table_sound', $data);
    }
    public function table_dll()
    {
        $data['title'] = 'Database Layanan | Table Dll';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['dll'] = $this->ht_model->tampil_dll()->result();

        $this->load->view('admin/table_dll', $data);
    }

    function edit_kegiatan()
    {
        $data['title'] = 'Database Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('admin/edit_kegiatan', $data);
    }

    function admin_kegiatan()
    {
        $data['title'] = 'Database Kegiatan';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['kegiatan'] = $this->ht_model->tampil_data()->result();
        $this->load->view('admin/admin_kegiatan', $data);
    }

    function edit($id)
    {
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $where = array('id' => $id);
        $data['no'] = $id;
        $data['kegiatan'] = $this->ht_model->edit_data($where, 'kegiatan')->result();
        $this->load->view('admin/edit_kegiatan', $data);
    }

    function update()
    {
        $id = $this->input->post('id');
        $gambar = $this->input->post('gambar');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');

        $data = array(
            'gambar' => $gambar,
            'judul' => $judul,
            'isi' => $isi
        );

        $where = array(
            'id' => $id
        );

        $this->ht_model->update_data($where, $data, 'kegiatan');
        redirect('admin/admin_kegiatan');
    }
}
