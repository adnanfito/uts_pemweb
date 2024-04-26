<?php

class Jadwal_model extends CI_Model {

    public function getAllData(){
        $this->db->select('*');
        $this->db->from('jadwal');
        $this->db->join('matakuliah', 'jadwal.id_matakuliah = matakuliah.id_matakuliah');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataById($id){
		$query = $this->db->get_where('jadwal', array('id_jadwal' => $id));
		return  $query->row_array();  //Return
    }

    public function create($data){
        return $this->db->insert('jadwal', $data);
    }

    public function edit($data){
        $update = [
            'nim'=>$data['nim'],
            'id_matakuliah'=>$data['id_matakuliah'],
            'nama_ruang' => $data['nama_ruang'],
            'jam_mulai' => $data['jam_mulai'],
            'jam_selesai' => $data['jam_selesai'],
        ];
        $this->db->where('id_jadwal',$data['id_jadwal']);
        $this->db->update('jadwal',$update);
    }

    public function delete($id){
        $this->db->where('id_jadwal',$id);
        $this->db->delete('jadwal');
    }

}

?>