<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top" style="background-color:#e6e6e6;">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">

	<?php $this->load->view("admin/_partials/sidebar.php") ?>

	<div id="content-wrapper">

		<div class="container-fluid " style="margin-left: 8.3%">

			<div class="border-round bg-light col-10" style="padding: 7% 7%">
				<div class="row">
					<div class="col-12 row">
					<div class="col-12">
						<h3 style="font-weight: bold;" class="color">
					Klasifikasi Penyakit
					</h3>
					<hr style="margin: 5px 0px">
					</div>
					
					<div class="col-2" >
					<img class="shadow" src="<?php echo base_url('upload/grey/heal.png')?>" width="150" height="150" style="border-radius: 100px 100px">	
					</div>
					<div class="col-6"style="margin-left: 20px">
					<p>
					Para Petani dan Pengurus tanaman cengkeh, anda dapat mendeteksi jenis penyakit apa yang terjadi dengan tanaman cengkeh anda hanya dengan menggunakan gambar/foto dari daun dengan dampak penyakit yang telah terdaftar pada sistem ini
					</p>
					<a href="admin/overview/klas" class="tmb" style="background-color:#40485cff;padding: 5px 10px">Coba <i class="fa fa-arrow-right"></i></a>	
					</div>
					</div>
					<div class="col-12 row" style="margin-top: 7%;text-align: right;">
					<div class="col-12">
						<h3 style="font-weight: bold;" class="color">
					Daftar Penyakit
					</h3>
					<hr style="margin: 5px 0px">
					</div>
					<div class="col-6" style="margin-left: 32%">
					<p>
					Dengan jumlah penyakit pada tanaman cengkeh yang ada terdapat beberapa penyakit dengan dampak atau ciri kerusakan yang terjadi terhadap daun tanamanya. 
					</p>
					<a href="admin/overview/penyakit" class="tmb" style="background-color:#40485cff;padding: 5px 10px">Lihat Daftar Pennyakit <i class="fa fa-arrow-right"></i></a>	
					</div>
					<div class="col-2">
					<img class="shadow" src="<?php echo base_url('upload/grey/daun.png')?>" width="150" height="150" style="border-radius: 100px 100px">	
					</div>
					</div>
					<div class="col-12 row"style="margin-top: 7%;">
					<div class="col-12">
						<h3 style="font-weight: bold;" class="color">
					Syarat & Ketentuan
					</h3>
					<hr style="margin: 5px 0px">
					</div>
					
					<div class="col-2" >
					<img class="shadow" src="<?php echo base_url('upload/grey/syarat.png')?>" width="150" height="150" style="border-radius: 100px 100px">	
					</div>
					<div class="col-6" style="margin-left: 20px">
					<p>
					ada beberapa syarat dan ketentuan yang harus di penuhi untuk mendapatkan hasil klasifikasi penyakit yang maksimal. dan bagaimana cara penggunaan sistem ini.
					</p>
					<a href="admin/overview/ab" class="tmb" style="background-color:#40485cff;padding: 5px 10px">Lihat Syarat&Ketentuan <i class="fa fa-arrow-right"></i></a>	
					</div>
					</div>
				</div>
					
				 </div>
			

		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->


<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
