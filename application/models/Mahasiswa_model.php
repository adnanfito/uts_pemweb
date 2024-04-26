<?php

class Mahasiswa_model extends CI_Model {

    public function getAllData(){
        $this->db->select('*');
        $this->db->from('mahasiswa');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataById($nim){
		$query = $this->db->get_where('mahasiswa', array('nim' => $nim));
		return  $query->row_array();  //Return
    }

    public function create($data){
        return $this->db->insert('mahasiswa', $data);
    }

    public function edit($data){
        $update = [
            'nama'=>$data['nama'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'alamat' => $data['alamat'],
        ];
        $this->db->where('nim',$data['nim']);
        $this->db->update('mahasiswa',$update);
    }

    public function delete($nim){
        $this->db->where('nim',$nim);
        $this->db->delete('mahasiswa');
    }
}

?>