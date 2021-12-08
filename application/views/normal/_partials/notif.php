<?php 
if (isset($_GET['cek'])) {
 ?><?php  
$cek=$_GET['cek'];
if ($cek =="dobel") {
?> 



 <div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 70px;width:30%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 25%;">! Gagal menambahkan data.</div>
       <div style="margin-left: 35%;">NIK telah terdaftar</div>
    </div>
    </div>
  </div><?php 
} ?>
<?php 
if ($cek=="berhasil-simpan") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-success" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Berhasil Menambahkan Data.</div>
    </div>
    </div>
  </div>
    <?php 
} ?>

<?php 
if ($cek=="berhasil-ubah") {
 

?>
 <div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-success" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Berhasil Mengubah Data.</div>
    </div>
    </div>

    </div><?php 
} ?><?php 
if ($cek=="hapus-berhasil") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-warning" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Berhasil Mengahapus Data.</div>
    </div>
    </div>
  </div>
    <?php 
}?><?php 
if ($cek=="hapus-gagal") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Gagal Menghapus Data.</div>
    </div>
    </div>
  </div>
    <?php 
}?>
<?php 
if ($cek=="gagal-ubah") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Gagal Mengubah Data.</div>
    </div>
    </div>
  </div>
    <?php 
}?>
<?php 
if ($cek=="gagal-simpan") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">Gagal Menambahkan Data.</div>
    </div>
    </div>
  </div>
    <?php 
} if ($cek =="dobel1") {
?> 
 <div  id="not">
  <div style="position: fixed;top:0;margin-top:90px ;margin-left:350px;display: inline-block;height: 70px;width:40%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 25%;">! Gagal menambahkan data.</div>
       <div style="margin-left: 35%;">Data telah ada</div>
    </div>
    </div>
  </div>
  <?php 
} ?><?php 
if ($cek=="dobel2") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 75px;width:30%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 30%;">! Gagal Menambahkan Data.</div>
      <div style="margin-left: 40%;">No KK telah ada.</div>
    </div>
    </div>
  </div>
    <?php 
} ?><?php 
if ($cek=="dobel3") {
 

?>
<div  id="not">
  <div style="position: absolute;top:0;margin-top:42px ;margin-left:350px;display: inline-block;height:90px;width:32%" class="col-8 alert alert-danger" >
    <div class="row">
      <div>
      <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 25%;font-weight: bold;">! Gagal Menambahkan Data.</div>
      <div style="margin-left: 20%;">NIK telah terdaftar di data penduduk.</div>
      <div style="margin-left: 15%;">Silahkan pilih data dari tabel data penduduk.</div>
    </div>
    </div>
  </div>
    <?php 
}} ?>

    <script type="text/javascript">
      function hilang(){
      document.getElementById('not').setAttribute('style','display:none') ;
    }

    
    </script>