<?php
if (isset($_GET['cek'])) {
?><?php
  $cek = $_GET['cek'];
  if ($cek == "dobel") {
  ?>



<div id="not" style="box-shadow:  0px 0px 10px 3px #ffff00;">
  <div style="position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 70px;width:30%" class="col-8 alert alert-danger">
    <div class="row">
      <div>
        <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
      <div style="margin-left: 25%;">! Gagal menambahkan data.</div>
      <div style="margin-left: 35%;">NIK telah terdaftar</div>
    </div>
  </div>
</div><?php
    }
    if ($cek == "berhasil-konf") { ?>



  <div id="not" style="">
    <div style="box-shadow:  0px 0px 10px 3px #b3ffb3;position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-success">
      <div class="row">
        <div>
          <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
        <div style="margin-left: 30%;">Berhasil Mengkonfirmasi Data.</div>
      </div>
    </div>
  </div>
<?php
    } ?>
<?php
  if ($cek == "berhasil-simpan") {


?>
  <div id="not" style="color: black">
    <div style="box-shadow:  0px 2px 5px 1px  rgba(0,0,0,0.3);position: fixed;top:0;margin-top:62px ;margin-left:35%;display: inline-block;height: 55px;width:30%;background-color: #1aff8aff;font-weight: bold;border-radius: 15px" class="col-8 alert ">
      <div class="row">
        
        <div style="margin-left:23%;">Berhasil Menambahkan Data</div><div style="margin-left:15%;">
          <a href="#" class="alert-link" onclick="hilang()" style="color: black;"><i class="fa fa-times"></i></a></div>
      </div>
    </div>
  </div>
<?php
  } ?>

<?php
  if ($cek == "berhasil-ubah") {


?>
   <div id="not" style="color: white">
    <div style="box-shadow:  0px 2px 5px 1px  rgba(0,0,0,0.3);position: fixed;top:0;margin-top:62px ;margin-left:35%;display: inline-block;height: 55px;width:30%;background-color: #ff9b1aff;font-weight: bold;border-radius: 15px" class="col-8 alert ">
      <div class="row">
        
        <div style="margin-left:23%;">Berhasil Mengubah Data</div><div style="margin-left:15%;">
          <a href="#" class="alert-link" onclick="hilang()" style="color: white;"><i class="fa fa-times"></i></a></div>
      </div>
    </div>
  </div>
  <?php
      } ?><?php
          if ($cek == "berhasil-hapus") {


          ?>
  <div id="not" style="color: black">
    <div style="box-shadow:  0px 2px 5px 1px  rgba(0,0,0,0.3);position: fixed;top:0;margin-top:62px ;margin-left:35%;display: inline-block;height: 55px;width:30%;background-color: #ff1a4cff;color:white;font-weight: bold;border-radius: 15px" class="col-8 alert ">
      <div class="row">
        
        <div style="margin-left:23%;">Berhasil Menghapus Data</div><div style="margin-left:15%;">
          <a href="#" class="alert-link" onclick="hilang()" style="color: black;"><i class="fa fa-times text-light"></i></a></div>
      </div>
    </div>
  </div>
  <?php
          } ?><?php
              if ($cek == "hapus-gagal") {


              ?>
  <div id="not">
    <div style="box-shadow:  0px 0px 10px 3px #ff3300;position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger">
      <div class="row">
        <div>
          <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
        <div style="margin-left: 30%;">Gagal Menghapus Data.</div>
      </div>
    </div>
  </div>
<?php
              } ?>
<?php
  if ($cek == "gagal-ubah") {


?>
  <div id="not">
    <div style="box-shadow:  0px 0px 10px 3px #ff3300;position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger">
      <div class="row">
        <div>
          <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
        <div style="margin-left: 30%;">Gagal Mengubah Data.</div>
      </div>
    </div>
  </div>
<?php
  } ?>
<?php
  if ($cek == "gagal-simpan") {


?>
  <div id="not">
    <div style="box-shadow:  0px 0px 10px 3px #ff3300;position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 55px;width:30%" class="col-8 alert alert-danger">
      <div class="row">
        <div>
          <a href="#" class="alert-link" onclick="hilang()"><i class="fa fa-times"></i></a></div>
        <div style="margin-left: 30%;">Gagal Menambahkan Data.</div>
      </div>
    </div>
  </div>
<?php
  }
  if ($cek == "dobel1") {
?>
  <div id="not">
    <div style="box-shadow:  0px 0px 10px 3px #ff3300;position: fixed;top:0;margin-top:90px ;margin-left:350px;display: inline-block;height: 70px;width:40%" class="col-8 alert alert-danger">
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
      if ($cek == "dobel2") {


      ?>
  <div id="not">
    <div style="position: fixed;top:0;margin-top:62px ;margin-left:350px;display: inline-block;height: 75px;width:30%" class="col-8 alert alert-danger">
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
          if ($cek == "dobel3") {


          ?>
  <div id="not">
    <div style="position: fixed;top:0;margin-top:42px ;margin-left:350px;display: inline-block;height:90px;width:32%" class="col-8 alert alert-danger">
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
          }
        } ?>

<script type="text/javascript">
  function hilang() {
    document.getElementById('not').setAttribute('style', 'display:none');
  }
</script>