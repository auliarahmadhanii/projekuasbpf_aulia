<?php
defined('BASEPATH') or exit('No direct script access allowed');
class JenisObat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model("Jenis_model");
    }
    public function index()
    {
        $data['judul'] = "Halaman Jenis Obat";
        $data['JenisObat'] = $this->Jenis_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('jenis/vw_jenis', $data);
        $this->load->view('layout/footer', $data);
    }
    function tambah()
    {
        $data['judul'] = "Halaman Tambah obat";
        $data['jenis'] = $this->Jenis_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->form_validation->set_rules('jenis_obat', 'jenis obat', 'required', [
            'required' => 'jenis obat wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("jenis/vw_tambah_jenis", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'jenis_obat' => $this->input->post('jenis_obat'),
            ];
            $this->Jenis_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Data Jenis Obat Berhasil Ditambah!</div>');
            redirect('JenisObat');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Jenis Obat";
        $data['jenis'] = $this->Jenis_model->getById($id);
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('jenis_obat', 'Jenis Obat', 'required', [
            'required' => 'Jenis Obat Wajib di isi'
        ]);

        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("jenis/vw_ubah_jenis", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'jenis_obat' => $this->input->post('jenis_obat'),
            ];
            
            $id = $this->input->post('id_jenis_obat');
            $this->Jenis_model->update(['id_jenis_obat' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Jenis Obat Berhasil Diubah!</div>');
            redirect('JenisObat');
        }
    }
    public function hapus($id)
    {
        $this->Jenis_model->delete($id);
        $eror = $this->db->error();
        if ($eror['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data jenis obat tidak berhasil di hapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Data jenis obat berhasil di hapus!</div>');
        }
        redirect('JenisObat');
    }
}
