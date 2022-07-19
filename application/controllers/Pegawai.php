<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Pegawai extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //is_logged_in();
        $this->load->model("Pegawai_model");
    }
    public function index()
    {
        $data['judul'] = "Halaman Pegawai";
        $data['pegawai'] = $this->Pegawai_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->load->view('layout/header', $data);
        $this->load->view('pegawai/vw_pegawai', $data);
        $this->load->view('layout/footer', $data);
    }
    function tambah()
    {

        $data['judul'] = "Halaman Tambah pegawai";
        $data[''] = $this->Pegawai_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required', [
            'required' => 'nama_pegawai wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp_pegawai', 'no hp pegawai', 'required', [
            'required' => 'no hp pegawai Wajib di isi'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_tambah_pegawai", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'no_hp_pegawai' => $this->input->post('no_hp_pegawai'),
            ];
            $this->Pegawai_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success"
            role="alert">Data Pegawai Berhasil Ditambah!</div>');
            redirect('Pegawai');
        }
    }
    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Pegawai";
        $data['pegawai'] = $this->Pegawai_model->getById($id);
        // print_r($data['pegawai']); die;
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('nama_pegawai', 'nama pegawai', 'required', [
            'required' => ' Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules('no_hp_pegawai', 'no hp pegawai', 'required', [
            'required' => 'no hp pegawai Wajib di isi'
        ]);
        // print_r($this->form_validation->run()); die;
        if ($this->form_validation->run() == false) 
        {
            $this->load->view("layout/header", $data);
            $this->load->view("pegawai/vw_ubah_pegawai", $data);
            $this->load->view("layout/footer");
        } 
        else 
        {
            $data = [
                'nama_pegawai' => $this->input->post('nama_pegawai'),
                'no_hp_pegawai' => $this->input->post('no_hp_pegawai'),
            ];
            
            $id = $this->input->post('id_pegawai');
            $this->Pegawai_model->update(['id_pegawai' => $id], $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Pegawai Berhasil Diubah!</div>');
            redirect('Pegawai');
        }
    }
    public function hapus($id)
    {
        $this->Pegawai_model->delete($id);
        $eror = $this->db->error();
        if ($eror['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon fas fa-info-circle"></i>Data pegawai tidak berhasil di hapus!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i class="icon fas fa-info-circle"></i>Data pegawai berhasil di hapus!</div>');
        }
        redirect('Pegawai');
    }
}
