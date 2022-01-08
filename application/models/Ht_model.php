<?php

class Ht_model extends CI_Model
{
    function input_data($data, $table)
    {

        $this->db->insert($table, $data);
    }

    function tampil_ht()
    {
        return $this->db->get('ht');
    }
    function tampil_vicon()
    {
        return $this->db->get('vicon');
    }
    function tampil_sound()
    {
        return $this->db->get('sound');
    }
    function tampil_dll()
    {
        return $this->db->get('dll');
    }

    function tampil_data()
    {
        return $this->db->get('kegiatan');
    }

    public function jumlahSuratHt()
    {
        $query = $this->db->get('ht');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahSuratVicon()
    {
        $query = $this->db->get('vicon');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahSuratSound()
    {
        $query = $this->db->get('sound');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    public function jumlahSuratDll()
    {
        $query = $this->db->get('dll');
        if ($query->num_rows() > 0) {
            return $query->num_rows();
        } else {
            return 0;
        }
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // private $_table = "ht";

    // public $id;
    // public $nrp;
    // public $nama;
    // public $satker;
    // public $perihal;

    // public function rules()
    // {
    //     return [
    //         [
    //             'field' => 'nrp',
    //             'label' => 'Nrp',
    //             'rules' => 'required'
    //         ],

    //         [
    //             'field' => 'nama',
    //             'label' => 'Nama',
    //             'rules' => 'required'
    //         ],

    //         [
    //             'field' => 'satker',
    //             'label' => 'Satker',
    //             'rules' => 'required'
    //         ],

    //         [
    //             'field' => 'perihal',
    //             'label' => 'Perihal',
    //             'rules' => 'required'
    //         ]
    //     ];
    // }

    // public function getAll()
    // {
    //     return $this->db->get($this->ht)->result();
    // }

    // public function getById($id)
    // {
    //     return $this->db->get_where($this->ht, ["id" => $id])->row();
    // }

    // public function save()
    // {
    //     $post = $this->input->post();
    //     $this->id = uniqid();
    //     $this->nrp = $post["nrp"];
    //     $this->nama = $post["nama"];
    //     $this->satker = $post["satker"];
    //     $this->perihal = $post["perihal"];
    //     return $this->db->insert($this->ht, $this);
    // }
}
