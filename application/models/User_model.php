<?php

class User_model extends CI_Model
{
    private $_table = "users";

    public $user_id;
    public $full_name;
    public $password;
    public $email;
    public $role;

   
 public function getdb($db)
 {
 return $this->db->get($db);
 }
 public function getdb_status($db)
 {
 return $this->db->query("SELECT *  from pending where status = '$db'");
 }
 public function getdb_pemb($pemb)
 {
 return $this->db->query("SELECT *  from pending where pemb1='$pemb' or pemb2='$pemb'");
 }
 public function getC($where)
 {
 return $this->db->query("SELECT * from alternatif where id = '$where'");
 }
    public function getDusun()
    {
        return $this->db->get('dusun');
    }
       public function getAgama()
    {
        return $this->db->get('lain');
    }
    public function getA()
    {
      return $this->db->query("SELECT * FROM `lain` ORDER BY id desc LIMIT 1");
    }
public function getkk()
    {
        return $this->db->get('kk');
    }
    public function getPend()
    {

       return $this->db->get('penduduk'); 
    }
    public function getMati()
    {

       return $this->db->get('mati'); 

    }
    public function getMatiU()
    {
      
 return $this->db->query("SELECT * FROM `mati` ORDER BY tahun ASC LIMIT 1");

    }
      public function getMatiL()
    {
      
 return $this->db->query("SELECT * FROM `lahir` ORDER BY tahun ASC LIMIT 1");

    }
  public function getLahir()
    {

       return $this->db->get('lahir'); 
    }
     public function getD()
    {
        $this->db->where('id = 1');
       return $this->db->get('desa'); 
    }
public function login(){
$this->load->view('login');

}
public function getNo_kk(){
   return $this->db->query("SELECT * FROM `no_surat` ORDER BY no_kk ASC LIMIT 1");

    
}
public function getNo_ktp(){
   return $this->db->query("SELECT * FROM `no_surat` ORDER BY no_ktp ASC LIMIT 1");

    
}public function getNo_keluar(){
   return $this->db->query("SELECT * FROM `no_surat` ORDER BY no_keluar ASC LIMIT 1");

    
}public function getNo_lahir(){
   return $this->db->query("SELECT * FROM `no_surat` ORDER BY no_lahir ASC LIMIT 1");

    
}
public function getNo_mati(){
   return $this->db->query("SELECT * FROM `no_surat` ORDER BY no_mati ASC LIMIT 1");

    
}
 

}
