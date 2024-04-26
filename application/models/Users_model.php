<?php

class Users_model extends CI_Model {

    private $_table = "users";
	const SESSION_KEY = 'user_id';

	public function login($username, $password)
	{
		$query = $this->db->get_where('users', array('username' => $username));
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah password-nya benar?
		if (($password != $user->password)) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);

		return TRUE;
	}

    public function registerUser($data)
    {
        return $this->db->insert('users', $data);
    }

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}


}

?>