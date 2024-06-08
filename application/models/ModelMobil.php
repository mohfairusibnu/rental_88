<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ModelMobil extends CI_Model
{


    public function get_mobil()
    {
        return $this->db->get('mobil')->result();
    }

    public function tambah_mobil($data)
    {
        $this->db->insert('mobil', $data);
    }

    public function get_id_mobil($id)
    {
        $this->db->where('id_mobil', $id);
        return $this->db->get('mobil')->row();
    }

    public function update($id, $data)
    {
        $this->db->where('id_mobil', $id);
        $this->db->update('mobil', $data);
    }

    public function hapus_mobil($id)
    {
        $this->db->where('id_mobil', $id);
        $this->db->delete('mobil');
    }





    public function get_tipe()
    {
        return $this->db->get('tipe')->result();
    }

    public function tambah_tipe($data)
    {
        $this->db->insert('tipe', $data);
    }

    public function get_id_tipe($id)
    {
        $this->db->where('id_tipe', $id);
        return $this->db->get('tipe')->row();
    }

    public function update_tipe($id, $data)
    {
        $this->db->where('id_tipe', $id);
        $this->db->update('tipe', $data);
    }

    public function hapus_tipe($id)
    {
        $this->db->where('id_tipe', $id);
        $this->db->delete('tipe');
    }





    public function get_merk()
    {
        return $this->db->get('merk')->result();
    }

    public function tambah_merk($data)
    {
        $this->db->insert('merk', $data);
    }

    public function get_id_merk($id)
    {
        $this->db->where('id_merk', $id);
        return $this->db->get('merk')->row();
    }

    public function update_merk($id, $data)
    {
        $this->db->where('id_merk', $id);
        $this->db->update('merk', $data);
    }

    public function hapus_merk($id)
    {
        $this->db->where('id_merk', $id);
        $this->db->delete('merk');
    }





    public function get_transmisi()
    {
        return $this->db->get('transmisi')->result();
    }

    public function tambah_transmisi($data)
    {
        $this->db->insert('transmisi', $data);
    }

    public function get_id_transmisi($id)
    {
        $this->db->where('id_transmisi', $id);
        return $this->db->get('transmisi')->row();
    }

    public function update_transmisi($id, $data)
    {
        $this->db->where('id_transmisi', $id);
        $this->db->update('transmisi', $data);
    }

    public function hapus_transmisi($id)
    {
        $this->db->where('id_transmisi', $id);
        $this->db->delete('transmisi');
    }





    public function get_kapasitas()
    {
        return $this->db->get('kapasitas')->result();
    }

    public function tambah_kapasitas($data)
    {
        $this->db->insert('kapasitas', $data);
    }

    public function get_id_kapasitas($id)
    {
        $this->db->where('id_kapasitas', $id);
        return $this->db->get('kapasitas')->row();
    }

    public function update_kapasitas($id, $data)
    {
        $this->db->where('id_kapasitas', $id);
        $this->db->update('kapasitas', $data);
    }

    public function hapus_kapasitas($id)
    {
        $this->db->where('id_kapasitas', $id);
        $this->db->delete('kapasitas');
    }


    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('mobil');
        return $this->db->get()->row($field);
    }

    public function getLimitMobil()
    {
        $this->db->limit(5);
        return $this->db->get('mobil');
    }
}
