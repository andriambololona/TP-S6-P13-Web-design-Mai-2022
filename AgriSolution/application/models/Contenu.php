<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Contenu extends CI_Model{
	
	public function get_Cause(){
		$query = $this->db->query("SELECT * from cause");
		$contenu = array(); 
		foreach ($query->result_array() as $key) {
			$contenu[] = $key;
		}
		return $contenu;
	}
	public function convertTextApostrophe($text)
	{
		return addslashes($text);
	}
	public function selectContenuCause($id)
	{
		$sql="select * from contenu_cause co join cause c on co.id_cause=c.id where id_cause =%s";
		$sql = sprintf($sql,$this->db->escape($id));
		$query = $this->db->query($sql);
        $contenu = array(); 
		foreach ($query->result_array() as $key) {
			$contenu[] = $key;
		}
		return $contenu;
	}

	
}
?>