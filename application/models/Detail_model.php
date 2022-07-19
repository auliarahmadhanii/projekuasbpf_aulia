<?php
defined('BASEPATH') or exit('No direct script access 
allowed');



class Detail_model extends CI_Model
{
    public $table = 'detail_pemesanan';
    public $id = 'detail_pemesanan.id';
    public function __construct()
    {
        parent::__construct();
    }
    public function get()
    {
        $this->db->select('k.*,s.nama_obat_obat as nama_obat_obat, s.harga_obat as harga_obat');
        $this->db->from('keranjang k');
        $this->db->join('obat s', 'k.id_obat=s.id');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getById($id)
    {
        $this->db->select('d.*,r.nama as nama, s.nama_obat as obat');
        $this->db->from('detail_pemesanan d');
        $this->db->join('user r', 'd.id_user = r.id');
        $this->db->join('obat s', 'd.id_obat = s.id');
        $this->db->where('d.no_pemesanan', $id);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function getByUser($id)
    {
        $idu = $this->session->userdata('id');
        $this->db->select('d.*, s.nama_obat as nama_obat');
        $this->db->from('detail_pemesanan d');
        $this->db->join('obat s', 'd.id_obat = s.id');
        $this->db->where('d.no_pemesanan', $id, 'AND d.id_user=' . $idu);
        $this->db->where('d.id_user=' . $idu);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function insert($data)
    {
        return $this->db->insert_batch($this->table, $data);
    }

    public function update($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
        return $this->db->affected_rows();
    }
    function charts()
    {
        $this->db->select('d.*, s.nama_obat as obat, sum(d.jumlah) as jum');
        $this->db->from('detail_pemesanan d');
        $this->db->join('obat s', 'd.id_obat = s.id');
        $this->db->group_by('d.id_obat');
        $query = $this->db->get();
        return $query->result_array();
    }
}
