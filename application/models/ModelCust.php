<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelCust extends CI_Model
{


    public function get_cust()
    {
        return $this->db->get('cust')->result();
    }

    public function tambah_cust($data)
    {
        $this->db->insert('cust', $data);
    }

    public function get_id_cust($id)
    {
        $this->db->where('id_cust', $id);
        return $this->db->get('cust')->row();
    }

    public function update_cust($id, $data)
    {
        $this->db->where('id_cust', $id);
        $this->db->update('cust', $data);
    }

    public function hapus_cust($id)
    {
        $this->db->where('id_cust', $id);
        $this->db->delete('cust');
    }

    public function cekData($where = null)
    {
        return $this->db->get_where('cust', $where);
    }

    public function getCustWhere($where = null)
    {
        return $this->db->get_where('cust', $where);
    }


    public function simpanCust($data = null)
    {
        $this->db->insert('cust', $data);
    }




    public function cekCustAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }

    public function getCustLimit()
    {
        $this->db->select('*');
        $this->db->from('cust');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
