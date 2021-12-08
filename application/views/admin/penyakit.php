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

			<div class="border-round bg-light col-10" style="height:auto;padding: 4% 6%"> 
				<h3 style="font-weight: bold;text-align: center;" class="color">
					Data Penyakit
				</h3>
				<hr style="margin: 5px 0px">
				<center><a href="#" data-toggle="modal" id="tam" class="tmb shadow" style="padding: 10px 50px;background-color: #40485cff;border-radius: 0 0 5px 5px;" onclick="tambah('#tambah','#ubah','#tab')" >Tambah Data</a></center>
			<div style="margin-top: 5%" id="tab">
				<table id="dataTable">
					<thead style="text-align: left;">
					<tr >
						<th >No</th>
						<th  style="width: 200px">Nama Penyakit</th>
						<th  style="width: 300px">Dampak Pada daun</th>
						<th  style="width: 300px">Penanganan</th>
						<th  style="width: 180px">Aksi</th>
					</tr></thead>
					<tbody style="font-size: 14px;text-align: left;">
						<?php 
						$no=0;
						foreach ($penyakit as $q) {
						$no++;
						?>
						<tr class="ts" >
							<td class="ts"><?php echo $no?></td>
							<td class="ts"><?php echo $q->nama?></td>
							<td class="ts"><?php echo $q->ciri?></td>
							<td class="ts"><?php echo $q->penanganan?></td>
							<td class="ts">
								<a href="#" id="tubah" data-toggle="modal" class=" tmb shadow" style="margin-right: 10px;background-color: #ff6e1aff" onclick="tambah('#ubah','#tambah','#tab','<?php echo $q->id?>','<?php echo $q->nama?>','<?php echo $q->penanganan?>','<?php echo $q->ciri?>') "  ><i class="fa fa-edit"></i> Ubah</a>
								<a  href="#hapusModal" data-toggle="modal"  class="tmb shadow" style="background-color: #ff1a56ff" onclick="set_url('hapus_penyakit?id=<?php echo $q->id;?>')">
							<i class="fa fa-times" ></i> Hapus</a>
							</td>
						</tr>
						<?php 
						}
						?>
					</tbody>
				</table>
			</div>
			<div id="tambah" class="col-12" style="position: relative;z-index: 10;display:none;margin-top: 5% ">
				<h3 class="color" style="text-align: center;font-weight: bold">Tambah Data Penyakit</h3>
				<div class="bg row" style="height: auto;color: white;border-radius: 5px 5px;padding: 10% 10%">
					<div class="col-8">
					<h4>Penyakit Ke -<?php echo $no+1?></h4>
					<form action="tambah_penyakit" method="get"><hr>
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" required><hr>
					<label>Dampak Pada Daun</label>
					<textarea name="ciri" class="form-control"required ></textarea><hr>
					<label>Penanganan</label>
					<textarea name="penanganan" class="form-control" required=""></textarea>
					<hr class="bg-light">
					
						<input type="submit" name="" value="Simpan" class="btn btn-success">
						<a href="#" data-toggle="modal" onclick="tambah('#tambah','#ubah','#tab')" class="btn btn-danger">Batal</a>
					
					</form>
					</div>
				</div>
			</div>
			<div id="ubah" class="col-12" style="position: relative;z-index: 10;display:none;margin-top: 5% ">
				<h3 class="" style="text-align: center;font-weight: bold;color:#ff6e1aff">Ubah Data Penyakit</h3>
				<div class=" row  shadow" style="height: auto;border-radius: 5px 5px;padding: 10% 10%">
					<div class="col-8">
					<h4 style=" ">Penyakit Ke -<label id="label"></label></h4>
					<form action="ubah_penyakit" method="get"><hr style="background-color:#ff6e1aff ">
					<input type="hidden" name="id" id="id1">	
					<label>Nama</label>
					<input type="text" name="nama" id="nama1" class="form-control" required><hr style="background-color:#ff6e1aff ">
					<label>Dampak Pada Daun</label>
					<textarea name="ciri" id="ciri1" class="form-control"required ></textarea><hr style="background-color:#ff6e1aff ">
					<label>Penanganan</label>
					<textarea name="penanganan" id="pena1" class="form-control" required=""></textarea>
					<hr class="bg-light">
					
						<input type="submit" name="" value="Simpan" class="btn btn-success">
						<a href="#" data-toggle="modal" onclick="tambah('#ubah','#tambah','#tab')" class="btn btn-danger">Batal</a>
					
					</form>
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

<?php $this->load->view("admin/_partials/notif.php") ?>
<!-- /#wrapper -->
<script type="text/javascript">

	function tambah(div,div2,div3,id,nama,pena,ciri){
		document.getElementById('label').innerHTML=id;
		document.getElementById('nama1').value=nama;
    	document.getElementById('pena1').value=pena;
    	document.getElementById('ciri1').value=ciri;
    	document.getElementById('id1').value=id;
    	
    	if($(div).is(':visible'))
      	{
		$(div).animate({ height: 'hide' }); 
		$(div3).animate({ height: 'show' }); 
		$('#t').animate({ height: 'show' }); 
		$('#tu').animate({ height: 'hide' }); 
		
		
      	}
      	else
      	{
        $(div).animate({ height: 'show' });
        $(div2).animate({ height: 'hide' });
        $(div3).animate({ height: 'hide' });
		$('#tu').animate({ height: 'show' }); 
		$('#t').animate({ height: 'hide' }); 
        
     	 }
     	
		}

		
</script>

<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modalhapus.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/notif.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
