<?php

class JadwalMhs_model extends CI_Model {

    public function getAllData(){
        $this->db->select('*');
        $this->db->from('jadwal_mahasiswa');
        $this->db->join('jadwal', 'jadwal_mahasiswa.id_jadwal = jadwal.id_jadwal');
        $this->db->join('matakuliah', 'matakuliah.id_matakuliah = jadwal.id_matakuliah');
        $this->db->join('mahasiswa', 'mahasiswa.nim = jadwal_mahasiswa.nim');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataById($id){
        $this->db->select('*');
        $this->db->from('jadwal_mahasiswa');
        $this->db->join('jadwal', 'jadwal_mahasiswa.id_jadwal = jadwal.id_jadwal');
		$this->db->where('id_jadwal_mahasiswa',$id);
        $query = $this->db->get();
		return  $query->row_array();  //Return
    }

    public function sumData(){
        $this->db->select('id_jadwal, COUNT(id_jadwal) as jumlah_jadwal');
        $this->db->from('jadwal_mahasiswa');
        $this->db->group_by('id_jadwal');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function create($data){
        return $this->db->insert('jadwal_mahasiswa', $data);
    }

    public function edit($data){
        $update = [
            'nim'=>$data['nim'],
            'id_jadwal'=>$data['id_jadwal'],
        ];
        $this->db->where('id_jadwal_mahasiswa',$data['id_jadwal_mahasiswa']);
        $this->db->update('jadwal_mahasiswa',$update);
    }

    public function delete($id){
        $this->db->where('id_jadwal_mahasiswa',$id);
        $this->db->delete('jadwal_mahasiswa');
    }

}

?>