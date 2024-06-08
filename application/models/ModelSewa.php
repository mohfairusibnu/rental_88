<?php if (!defined('BASEPATH')) exit('No Direct Script Access Allowed');

class ModelSewa extends CI_Model
{

    public function get_sewa()
    {
        return $this->db->get('sewa')->result();
    }

    public function get_kode_sewa($kode)
    {
        $this->db->where('kode_sewa', $kode);
        return $this->db->get('sewa')->row();
    }

    public function update($kode, $data)
    {
        $this->db->where('kode_sewa', $kode);
        $this->db->update('sewa', $data);
    }



    public function simpanSewa($data)
    {
        $this->db->insert('sewa', $data);
    }






    public function get_daftar_sewa()
    {
        return $this->db->get('daftar_sewa')->result();
    }

    public function get_kode_daftar_sewa($kode)
    {
        $this->db->where('kode_sewa', $kode);
        return $this->db->get('daftar_sewa')->row();
    }

    public function simpan_detail_sewa($data)
    {
        $this->db->insert('detail_sewa', $data);
    }


    public function deleteData($table, $where)
    {
        $this->db->delete($table, $where);
    }


    public function tambah_sewa($data)
    {
        $this->db->insert('daftar_sewa', $data);
    }








    public function get_met_pembayaran()
    {
        return $this->db->get('met_pembayaran')->result();
    }

    public function tambah_met_pembayaran($data)
    {
        $this->db->insert('met_pembayaran', $data);
    }

    public function get_id_met_pembayaran($id)
    {
        $this->db->where('id_mp', $id);
        return $this->db->get('met_pembayaran')->row();
    }

    public function update_met_pembayaran($id, $data)
    {
        $this->db->where('id_mp', $id);
        $this->db->update('met_pembayaran', $data);
    }

    public function hapus_met_pembayaran($id)
    {
        $this->db->where('id_mp', $id);
        $this->db->delete('met_pembayaran');
    }


    public function kodeOtomatis($tabel, $key)
    {
        $this->db->select('right(' . $key . ',3) as kode', false);
        $this->db->order_by($key, 'desc');
        $this->db->limit(1);
        $query = $this->db->get($tabel);
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 3, "0", STR_PAD_LEFT);
        $kodejadi = date('dmY') . $kodemax;
        return $kodejadi;
    }

    public function getSewaWhere($where = null)
    {
        return $this->db->get_where('sewa', $where);
    }



    public function joinData()
    {
        $this->db->select('*');
        $this->db->from('sewa');
        $this->db->join('detail_sewa', 'detail_sewa.kode_sewa=sewa.kode_sewa', 'Right');

        return $this->db->get()->result_array();
    }


    public function getLimitSewa()
    {
        $this->db->limit(5);
        return $this->db->get('sewa');
    }
}
