<?php

class Matakuliah_model extends CI_Model {

    public function getAllData(){
        $this->db->select('*');
        $this->db->from('matakuliah');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getDataById($id){
		$query = $this->db->get_where('matakuliah', array('id_matakuliah' => $id));
		return  $query->row_array();  //Return
    }

    public function create($data){
        return $this->db->insert('matakuliah', $data);
    }

    public function edit($data){
        $update = [
            'nama_matakuliah'=>$data['nama_matakuliah']
        ];
        $this->db->where('id_matakuliah',$data['id_matakuliah']);
        $this->db->update('matakuliah',$update);
    }

    public function delete($id){
        $this->db->where('id_matakuliah',$id);
        $this->db->delete('matakuliah');
    }
}

?>