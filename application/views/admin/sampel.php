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
					Data Sampel Penyakit
				</h3>
				<hr style="margin: 5px 0px">
				<center><a href="#" data-toggle="modal" id="tam" class="tmb shadow" style="padding: 10px 50px;background-color: #40485cff;border-radius: 0 0 5px 5px;" onclick="tambah('#tambah','#ubah','#tab')">Tambah Data</a></center>
				<div style="margin-top: 5%" id="tab">
				<table id="dataTable" >
					<thead style="text-align: left;">
					<tr >
						<th rowspan="2" style="width: 10px">No Sampel</th>
						<th rowspan="2" style="width: 150px">Gambar</th>
						<th rowspan="2" style="width: 150px">Nama Penyakit</th>
						<th colspan="4" style="text-align: center;">Ciri Faktor</th>
						<th rowspan="2" style="width: 50px">Aksi</th>
					</tr>
					<tr>
						<th style="width: 10px;font-size: 12px">Energi</th>
						<th style="width: 10px;font-size: 12px">Entropi</th>
						<th style="width: 10px;font-size: 12px">Homogeniti</th>
						<th style="width: 10px;font-size: 12px">Kontras</th>
					</tr>
					
					</thead>
					<tbody style="font-size: 14px;text-align: left;">
						<?php 
						$no=0;
						foreach ($sampel as $q) {
						$no++;
						$ck=0;
						$nm="Penyakit belum di identifikasi!";
						foreach ($penyakit as $p) {
							if ($q->kode ==$p->id) {
								$nm=$p->nama;
								$ck=1;
							}

						}

						?>

						<tr class="ts" style="height: 120px">
							<td  class="ts"><?php echo $q->id?></td>
							<td class="ts"><img src="<?php echo base_url('upload/rgb/'.$q->gambar)?>" height="150" width="150"></td>
							<td class="ts" style="<?php if ($ck==0) {
							echo "color:red;font-weight: bold;";
							}?>"><?php echo $nm?></td>
							<td class="ts"><?php echo $q->energi?></td>
							<td class="ts"><?php echo $q->entropi?></td>
							<td class="ts"><?php echo $q->homogeniti?></td>
							<td class="ts"><?php echo $q->kontras?></td>
							<td class="ts">
								<div class="row" style="margin-left: 5px">
									<a href="#" id="tubah" data-toggle="modal" class=" tmb shadow" style="margin-right: 10px;background-color: #ff6e1aff" onclick="tambah('#ubah','#tambah','#tab','<?php echo $q->id?>','<?php echo $q->gambar?>','<?php echo $nm?>','<?php echo $q->kode?>','<?php echo $q->energi?>','<?php echo $q->entropi?>','<?php echo $q->homogeniti?>','<?php echo $q->kontras?>') "  ><i class="fa fa-edit"></i> Ubah</a>
								<a  href="#hapusModal" data-toggle="modal"  class="tmb shadow" style="background-color: #ff1a56ff" onclick="set_url('hapus_sampel?id=<?php echo $q->id;?>')">
							<i class="fa fa-times" ></i> Hapus</a>
								</div>
								
							</td>
						</tr>
						<?php 
						}
						?>
					</tbody>
				</table>
			</div>
				<div id="tambah"style="display: none; margin-top: 5%;">
					<hr class="bg">
					<h3 class="color" style="font-weight: bold;text-align:center;">Tambah Data Sampel Uji</h3>
					<div class="col-12 color row"  style="border-radius: 10px 10px;padding: 10% 10%">
						<div class="col-12">
							<h4 style="font-weight: bold" >Sampel Uji Ke-<?php echo $no+1 ?></h4>
						<hr class="bg">
						</div>
						
						<div class="col-6">
							<form method="post" action="sampel_proses" enctype="multipart/form-data">
							Pilih Gambar Sampel:<br>
							<input type="file" name="berkas" class="form-control" accept="image/.png" onchange="loadFile(event)" />
							<hr>
							<input type="submit" name="" value="Proses" class="btn btn-success">
							<a href="#" onclick="tambah('#tambah','#ubah','#tab')" class="btn btn-danger">Batal </a>
						</form>
						</div>
						<div class="col-6">
							Preview:<br>
							<img src="" id="output" width="150"  height="150" />
						</div>
						
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
					<div id="ubah" style="display: none;margin-top: 5%; ">
					<hr class="bg">
					<h3 class="color" style="font-weight: bold;text-align:center;">Ubah Data Sampel Uji</h3>
					<div class="col-12 color row"  style="border-radius: 10px 10px;padding: 10% 10%">
						<div class="col-12">
							<h4 style="font-weight: bold" >Sampel Uji Ke-<label id="label"></label></h4>
						<hr class="bg">
						</div>
						
						<div class="col-6">
						
							Gambar Sampel:<br>
							<img src="" height="250" width="250" id="gmbr">
						
							
						
						</div>
						<div class="col-6">
							Ciri Faktor:<br>
							<table style="text-align: left;font-weight: bold" >
							<tr >
								<td>Energi</td>
								<td><p id="energi"></p></td>
							</tr>
							<tr >
								<td>Entropi</td>
								<td><p id="entropi"></p></td>
							</tr>
							<tr >
								<td>Kontras</td>
								<td><p id="kontras"></p></td>
							</tr>
							<tr >
								<td>Homogeniti</td>
								<td><p id="homo"></p></td>
							</tr>
						</table>
							
						</div>
						<div class="col-12">
							<hr>
							<label>Klasifikasi Penyakit</label>
							<form method="get" action="ubah_sampel">
						<select required name="kode" class="form-control col-12" >
  						<option disabled selected>-Pilih jenis Penyakit-</option>
  						<?php 
  						foreach ($penyakit as $q) {
  						?>
  						<option value="<?php echo $q->id?>"><?php echo $q->nama?></option>
  					<?php }?>
  					<input type="hidden" name="id" id="id">
  					<hr>
  					<input type="submit" name="" value="Perbaharui" class="btn btn-warning">
  					<a href="#" onclick="tambah('#ubah','#tambah','#tab')" class="btn btn-danger">Batal </a>
							</form>
						</div>
						
						</div>
					</div>
				</div>
				
			</div>




<script type="text/javascript">

function read(input){
 if (input.files) {
 	var read= new FileReader();
 	read.onload=function(e){
 		$('#img').attr('src',e.target.result).width(100).height(100);
 	};
read.readAsDataURL(input.files[0]);
 }

}
	function tambah(div,div2,div3,data1,data2,data3,data4,data5,data6,data7,data8){
		$('#gmbr').attr('src','<?php echo base_url('upload/rgb/')?>'+data2);
		document.getElementById('label').innerHTML=data1;
		document.getElementById('id').value=data1;
		document.getElementById('energi').innerHTML=':'+data5;
		document.getElementById('entropi').innerHTML=':'+data6;
		document.getElementById('homo').innerHTML=':'+data7;
		document.getElementById('kontras').innerHTML=':'+data8;
		

    	if($(div).is(':visible'))
      	{
		$(div).animate({ height: 'hide' });
		$(div2).animate({ height: 'hide' });  
		$(div3).animate({ height: 'show' }); 
		
		
      	}
      	else
      	{
        $(div).animate({ height: 'show' });
        $(div3).animate({ height: 'hide' });
        $(div2).animate({ height: 'hide' });
        
     	 }
     	
		}

		
</script>
		</div>
		<!-- /.container-fluid -->

		<!-- Sticky Footer -->
		<?php $this->load->view("admin/_partials/footer.php") ?>

	</div>
	<!-- /.content-wrapper -->

</div>
<!-- /#wrapper -->



<?php $this->load->view("admin/_partials/scrolltop.php") ?>
<?php $this->load->view("admin/_partials/modalhapus.php") ?>
<?php $this->load->view("admin/_partials/modal.php") ?>
<?php $this->load->view("admin/_partials/notif.php") ?>
<?php $this->load->view("admin/_partials/js.php") ?>
    
</body>
</html>
