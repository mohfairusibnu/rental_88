<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelAdmin extends CI_Model
{

    public function simpanDataAdmin($data = null)
    {
        $this->db->insert('admin', $data);
    }

    public function get_admin()
    {
        return $this->db->get('admin')->result();
    }

    public function update($id, $data)
    {
        $this->db->where('id_admin', $id);
        $this->db->update('admin', $data);
    }


    public function cekData($where = null)
    {
        return $this->db->get_where('admin', $where);
    }


    public function getAdminWhere($where = null)
    {
        return $this->db->get_where('admin', $where);
    }


    public function cekAdminAccess($where = null)
    {
        $this->db->select('*');
        $this->db->from('access_menu');
        $this->db->where($where);
        return $this->db->get();
    }


    public function getAdminLimit()
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->limit(10, 0);
        return $this->db->get();
    }
}
