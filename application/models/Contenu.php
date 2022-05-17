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

	public function get_Contenu_cause(){
		$query = $this->db->query("SELECT * from contenu_cause");
		$contenu = array(); 
		foreach ($query->result_array() as $key) {
			$contenu[] = $key;
		}
		return $contenu;
	}

	public function delete_Contenu_cause($id){
		$sql ="delete from contenu_cause where id=%s";
		$sql = sprintf($sql,$this->db->escape($id));
		$this->db->query($sql);	
	}

	public function get_Contenu_solution(){
		$query = $this->db->query("SELECT * from contenu_solution");
		$contenu = array(); 
		foreach ($query->result_array() as $key) {
			$contenu[] = $key;
		}
		return $contenu;
	}

	public function get_Solution(){
		$query = $this->db->query("SELECT * from solution");
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

	public function convertBase64($file)
	{
		$path=$file;
		var_dump($path);
		$type=pathinfo($path,PATHINFO_EXTENSION);
		$data=file_get_contents($path);
		var_dump($data);
		$base64='data:image'.$type.";base64,".base64_encode($data);
		$imagesrc='data:'.mime_content_type($path).'base64,'.base64_encode($data);
		return $imagesrc;
	}

	public function insertContenuCause($titre,$image,$idCause,$description,$date)
	{
		$sql="INSERT INTO contenu_cause(titre,id_cause,description,dates,photos) VALUES(%s,%s,%s,%s,%s)";
					
		$sql = sprintf($sql,$this->db->escape($titre),$this->db->escape($idCause),$this->db->escape($description),$this->db->escape($date),$this->db->escape($image));
		$insert=$this->db->query($sql);
	}

	public function uploadImageCause($titre,$postSubmit,$file1,$file2,$idCause,$description,$date)
	{
		$statut='';
		$targetDir="assets/images/cop/cause/";
		$filename=basename($file1);
		var_dump($file2);
		$targetFilePath=$targetDir.$filename;
		
		$fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
		$ret="";

		if(isset($postSubmit))
		{
			$allowTypes=array('jpg','png','jpeg');
			if(in_array($fileType,$allowTypes)){
				if(move_uploaded_file($file2,$targetFilePath))
				{
					$sql="INSERT INTO contenu_cause(titre,id_cause,description,dates,photos) VALUES(%s,%s,%s,%s,%s)";
					
					$sql = sprintf($sql,$this->db->escape($titre),$this->db->escape($idCause),$this->db->escape($description),$this->db->escape($date),$this->db->escape("cop/cause/".$filename));
					$insert=$this->db->query($sql);
					if($insert)
					{
						$ret='success';
					}
					else{
						$ret='error';
					}
				}
			}
		}
		else{
			$ret='tsy mandalo';
		}
		return $ret;
	}

	public function uploadImageSolution($titre,$postSubmit,$file1,$file2,$idCause,$description,$date)
	{
		$statut='';
		$targetDir="assets/images/cop/cause/";
		$filename=basename($file1);
		var_dump($file2);
		$targetFilePath=$targetDir.$filename;
		
		$fileType=pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
		$ret="";

		if(isset($postSubmit))
		{
			$allowTypes=array('jpg','png','jpeg');
			if(in_array($fileType,$allowTypes)){
				if(move_uploaded_file($file2,$targetFilePath))
				{
					$sql="INSERT INTO contenu_cause(titre,id_cause,description,dates,photos) VALUES(%s,%s,%s,%s,%s)";
					
					$sql = sprintf($sql,$this->db->escape($titre),$this->db->escape($idCause),$this->db->escape($description),$this->db->escape($date),$this->db->escape("cop/cause/".$filename));
					$insert=$this->db->query($sql);
					if($insert)
					{
						$ret='success';
					}
					else{
						$ret='error';
					}
				}
			}
		}
		else{
			$ret='tsy mandalo';
		}
		return $ret;
	}

	
}
?>