<?php
class Login extends CI_Model{
	public function loginAdmin($id,$mdp){
		$sql='SELECT * FROM Personne WHERE id=%s AND mdp=%s';
		$sql=sprintf($sql,$this->db->escape($id),$this->db->escape(sha1($mdp)));
		$query=$this->db->query($sql);
		$numRows=$query->num_rows($query);
		return $numRows;
	}

	public function loginUser($mail,$mdp){
		$sql='SELECT * FROM Personne WHERE id=%s AND mdp=%s';
		$sql=sprintf($sql,$this->db->escape($id),$this->db->escape(sha1($mdp)));
		$query=$this->db->query($sql);
		$numRows=$query->num_rows($query);
		return $numRows;
	}
	
}
?>