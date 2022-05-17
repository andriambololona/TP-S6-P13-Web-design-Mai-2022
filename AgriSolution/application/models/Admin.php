<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Model
{

    public function insertAdmin($pass, $photo, $biographie, $adresse)
    {
        $sql = "insert into inscription_utilisateur(pass,image,biographie,adresse) values(%s, %s, %s,%s,%s)";
        $sql = sprintf($sql, $this->db->escape(sha1($pass)), $this->db->escape($photo), $this->db->escape($biographie), $this->db->escape($adresse));
        $this->db->query($sql);
    }

    public function verificationLogin($id,$pass)
    {
        $sql="SELECT * FROM admin where id=%s and pass=%s";
        $sql = sprintf($sql,$this->db->escape($id),$this->db->escape(sha1($pass)));
        $query = $this->db->query($sql);
        if(count($query->result_array())==1)
        {
            return true;
        }
        return false;
    }  
}
