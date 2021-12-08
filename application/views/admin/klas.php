<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body id="page-top" style="background-color:#e6e6e6;">

<?php $this->load->view("admin/_partials/navbar.php") ?>

<div id="wrapper">


	<div id="content-wrapper">

		<div class="container-fluid " style="margin-left: 8.3%">

			<div class="border-round bg-light col-10" style="height: auto;padding: 4% 6%"> 
			<h3 style="font-weight: bold;text-align: center;" class="color">
					Klasifikasi Penyakit Sampel Uji
			</h3>
				<hr style="margin: 5px 0px">

			<div style="margin-top: 5%" class="row"> 
				<div class="col-6">
							<form method="post" action="klas1" enctype="multipart/form-data">
							Pilih Gambar Sampel:<br>
							<input type="file" name="berkas" class="form-control" accept="image/png" onchange="loadFile(event)" />
							<hr>
							<input type="submit" name="" value="Proses" class="btn btn-success">
							
						</form>
						</div>
						<div class="col-6">
							Preview:<br>
							<img src="" id="output" height="150" width="150" />
						</div>
						<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
					</script>
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
