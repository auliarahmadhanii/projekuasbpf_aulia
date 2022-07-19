<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Obat extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Obat_model');
        $this->load->model('Jenis_model');
        $this->load->model('User_model');
        $this->load->model('Pegawai_model');
    }

    public function index()
    {
        $data['judul'] = "Halaman Obat";
        $data['obat'] = $this->Obat_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata['email']])->row_array();
        $this->load->view("layout/header",$data);
        $this->load->view("obat/vw_obat", $data);
        $this->load->view("layout/footer");
    }
    public function tambah()
    {
        $data['judul'] = "Halaman Tambah Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->get();
        $data['JenisObat'] = $this->Jenis_model->get();
        $data['pegawai'] = $this->Pegawai_model->get();
        // $this->form_validation->set_rules('gambar', 'Gambar Obat', 'required', [
        //     'required' => 'Gambar Wajib di isi'
        // ]);
        $this->form_validation->set_rules('id_pegawai', 'Pegawai', 'required', [
            'required' => 'Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required', [
            'required' => 'Kode Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required', [
            'required' => 'Nama obat Wajib di isi'
            
        ]);
        $this->form_validation->set_rules('id_jenis_obat', 'Jenis Obat', 'required', [
            'required' => 'Jenis Wajib di isi'
            
        ]);
        $this->form_validation->set_rules('tgl_kadaluarsa', 'Tgl Kadaluarsa', 'required', [
            'required' => 'Tgl Wajib di isi','integer' => 'Tgl harus Angka'
        ]);
        $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required', [
            'required' => 'Kegunaan Wajib di isi'
        ]);
        $this->form_validation->set_rules('efek_samping', 'Efek Samping', 'required', [
            'required' => 'Efek samping Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok_obat', 'Stok', 'required|integer', [
            'required' => 'Stok Berdiri Wajib di isi', 'integer' => 'Stok harus Angka'
        ]);
        $this->form_validation->set_rules('harga_obat', 'Harga', 'required|integer', [
            'required' => 'Harga Berdiri Wajib di isi', 'integer' => 'Harga harus Angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("obat/vw_tambah_obat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'id_pegawai' => $this->input->post('id_pegawai'),
                'kode_obat' => $this->input->post('kode_obat'),
                'nama_obat' => $this->input->post('nama_obat'),
                'id_jenis_obat' => $this->input->post('id_jenis_obat'),
                'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
                'kegunaan' => $this->input->post('kegunaan'),
                'efek_samping' => $this->input->post('efek_samping'),
                'stok_obat' => $this->input->post('stok_obat'),
                'harga_obat' => $this->input->post('harga_obat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/obat/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $this->Obat_model->insert($data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data 
            Obat Berhasil Ditambah!</div>');
            redirect('Obat');
        }
    }
    public function detail($id)
    {
        $data['judul'] = "Halaman Detail Obat";
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['obat'] = $this->Obat_model->getById($id);

        $this->load->view("layout/header", $data);
        $this->load->view("obat/vw_detail_obat", $data);
        $this->load->view("layout/footer", $data);
    }
    public function hapus($id)
    {
        $this->Obat_model->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><i class="icon 
        fas fa-info-circle"></i>Data Obat tidak dapat dihapus (sudah berelasi)!</div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><i 
        class="icon fas fa-check-circle"></i>Data Obat Berhasil Dihapus!</div>');
        }
        redirect('Obat');
    }

    public function edit($id)
    {
        $data['judul'] = "Halaman Edit Obat";
        $data['obat'] = $this->Obat_model->getById($id);
        $data['JenisObat'] = $this->Jenis_model->get();
        $data['pegawai'] = $this->Pegawai_model->get();
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->form_validation->set_rules('id_pegawai', 'Pegawai', 'required', [
            'required' => 'Pegawai Wajib di isi'
        ]);
        $this->form_validation->set_rules('kode_obat', 'Kode Obat', 'required', [
            'required' => 'Kode Obat Wajib di isi'
        ]);
        $this->form_validation->set_rules('nama_obat', 'Nama Obat', 'required', [
            'required' => 'Nama obat Wajib di isi'
            
        ]);
        $this->form_validation->set_rules('id_jenis_obat', 'Jenis Obat', 'required', [
            'required' => 'Jenis Wajib di isi'
            
        ]);
        $this->form_validation->set_rules('tgl_kadaluarsa', 'Tgl Kadaluarsa', 'required', [
            'required' => 'Tgl Wajib di isi','integer' => 'Tgl harus Angka'
        ]);
        $this->form_validation->set_rules('kegunaan', 'Kegunaan', 'required', [
            'required' => 'Kegunaan Wajib di isi'
        ]);
        $this->form_validation->set_rules('efek_samping', 'Efek Samping', 'required', [
            'required' => 'Efek samping Wajib di isi'
        ]);
        $this->form_validation->set_rules('stok_obat', 'Stok', 'required|integer', [
            'required' => 'Stok Berdiri Wajib di isi', 'integer' => 'Stok harus Angka'
        ]);
        $this->form_validation->set_rules('harga_obat', 'Harga', 'required|integer', [
            'required' => 'Harga Berdiri Wajib di isi', 'integer' => 'Harga harus Angka'
        ]);
        if ($this->form_validation->run() == false) {
            $this->load->view("layout/header", $data);
            $this->load->view("obat/vw_ubah_obat", $data);
            $this->load->view("layout/footer");
        } else {
            $data = [
                'kode_obat' => $this->input->post('kode_obat'),
                'id_pegawai' => $this->input->post('id_pegawai'),
                'nama_obat' => $this->input->post('nama_obat'),
                'id_jenis_obat' => $this->input->post('id_jenis_obat'),
                'tgl_kadaluarsa' => $this->input->post('tgl_kadaluarsa'),
                'kegunaan' => $this->input->post('kegunaan'),
                'efek_samping' => $this->input->post('efek_samping'),
                'stok_obat' => $this->input->post('stok_obat'),
                'harga_obat' => $this->input->post('harga_obat'),
            ];
            $upload_image = $_FILES['gambar']['name'];
            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '2048';
                $config['upload_path'] = './assets/img/obat/';
                $this->load->library('upload', $config);
                if ($this->upload->do_upload('gambar')) {
                    $old_image = $data['obat']['gambar'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/img/obat/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('gambar', $new_image);
                } else {
                    echo $this->upload->display_errors();
                }
            }
            $id = $this->input->post('id');
            $this->Obat_model->update(['id' => $id], $data, $upload_image);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Obat Berhasil 
            Diubah!</div>');
            redirect('Obat');
        }
    }
}