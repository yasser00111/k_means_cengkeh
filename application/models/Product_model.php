<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Product_model extends CI_Model
{
   
public function getUser($user,$pass){
    $passs=md5($pass);
 return $this->db->query("SELECT * FROM `users` where user='$user' and password='$passs'");
}


public function tambah($data,$table)
    {
$this->db->insert($table,$data);
return true;
    }

    public function ubah($where,$data,$table)
    {
       $this->db->where($where);
       if ($this->db->update($table,$data)) {
         return true;
       }
       
      else{
         return false;
      }
    }
public function hapus($where,$table)
{

       $this->db->where($where);
       $this->db->delete($table);
       return true;
}
public function hapus_all($table)
{
   return $this->db->query("DELETE FROM `$table`");
}
}
