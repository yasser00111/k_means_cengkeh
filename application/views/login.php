<!DOCTYPE html>
<html lang="en">
<head>


<?php $this->load->view("head.php") ?>
				<style>
          .backe{
        background: url(<?php echo base_url('upload/latar.png') ?>) ;
        background-position: right bottom ;
        background-repeat: no-repeat;
        background-size: auto 500px;
     

      }
						body {

							

								background-color: white;
								color: black
						}
						h3{
          font-weight: bolder;
										color:black;
						}
						div.col-12{
       box-shadow: 0px 0px 10px 6px rgb(150,150,150)
      }
      input.form-controll{
        background-color: transparent;
        color: white;
       width: 100%;
       line-height:40px;
       border-style: none;
       border-bottom-style: solid;
       border-bottom-width: medium;
       border-bottom-color: #9bffadff;
       border-bottom-right-radius: 0px;
       border-bottom-left-radius: 0px;
      }
      input.form-controll:hover{
       transition: border-bottom-color 0.5s;
       border-bottom-color: white; 
      }
      input.form-controll:focus{
        color:#40485cff ;
       background-color: #9bffadff;
      transition: background-color 0.35s;
      border-radius: 5px;
       border-bottom-color: #9bffadff; 

      }

				</style>
				<script type="text/javascript">
								
function cek1(){
				var cek = document.getElementById('cek');
				var pass = document.getElementById('pass');
	if (cek .checked == true) {
				pass.setAttribute("type", "text"); 
	}

else {pass.setAttribute("type", "password"); }
}
				</script>

</head>
<body style="padding: 5% 10%">
				

<div class="col-12 border-round row backe" style="height: 500px;padding:5% 5%;background-color:#40485cff ">

 <div class="col-5">
   
 <h3 style="margin-bottom:  20%;color: #9bffadff">SILAHKAN MASUK</h3>

 

 <form action="login" action="POST">
 <input  id="user" class="form-controll"type="text" name="username" placeholder="Nama Pengguna" required>
<br><br>  <input  id="pass" class="form-controll" type="password" name="password" placeholder="Kata Sandi" required>
  <br><br><br><br><br>
  <center><input type="checkbox" class="border-round" id="cek" onclick="cek1()"> Lihat password</center>
  <button class="btn  btn-block border-round" type="submit" name="submit" style="border-radius:100px;background-color:#9bffadff">Masuk</button>
  
  <?php 
    if(isset($cek)){
        if($cek == "gagal"){
            echo '<center><p id="text" style="color:red">Username atau Password salah! Silahkan coba lagi</p></center>';
        }else if($cek == "logout"){
            echo '<center><p id="text" style="color:red">Anda telah berhasil Log-out</p></center>';
        }
    }
    if (isset($_GET['cek'])) {
        echo '<center><p id="text" style="color:red">Silahkan Login terlebih dahulu</p></center>';
    }
    ?>

                </form>
 </div>
  <div class="col-4 " style="margin-left:10%;margin-top: 15%">
   <h3 style="color: white;text-align: center;">
     Klasifikasi Penyakit tanaman Cengkeh
   </h3>
 </div>
</div>

				

				

</body>

</html>