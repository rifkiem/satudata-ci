<?php
class Login_model extends CI_Model{
	//cek nip dan password admin
	function auth_admin($username,$password){
		$query=$this->db->query("SELECT * FROM admin WHERE nik='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password pengguna
	function auth_pengguna($username,$password){
		$query=$this->db->query("SELECT * FROM pengguna WHERE nik='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
