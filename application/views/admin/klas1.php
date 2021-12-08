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

		<div class="container-fluid" style="margin-left: 8.3%;">
			<div class="border-round bg-light col-10" style="height:auto;padding: 4% 6%">
				<h3 style="font-weight: bold;text-align: center;" class="color">
					Proses Klasifikasi Penyakit
				</h3>
				<?php 
				$a=count($id_p);
				foreach ($id_p as $p) {
					$idp[$a]=$p->status;
					$a--;
				}
				
				foreach ($penyakit as $p) {
					if ($p->id == $idp[1]) {
						$nma=$p->nama;
						$ciri=$p->ciri;
						$pen=$p->penanganan;
					}
				}
				$name = $_FILES['berkas']['name'];
				$nama = $_FILES['berkas']['tmp_name'];
				
				$energi0=0;
				$entropi0=0;
				$homo0=0;
				$kontras0=0;
				$energi45=0;
				$entropi45=0;
				$homo45=0;
				$kontras45=0;
				$energi9=0;
				$entropi9=0;
				$homo9=0;
				$kontras9=0;
				$energi135=0;
				$entropi135=0;
				$homo135=0;
				$kontras135=0;
				$im = imagecreatefrompng(base_url('upload/rgb/').$name);
        				?>
				<hr class="bg">
				<div class="row" style="margin-top: 5%;">
					<div class="col-12 row">

						<div class="col-6">
						<h4 class="color" style="font-weight: bold">
							Gambar Sampel Uji:
						</h4>
						<img src="<?php echo base_url('upload/rgb/');echo $name?>" height="150" width="150">
						<h4 class="color" style="font-weight: bold;margin-top: 5%">
							Nama Penyakit:
						</h4>
						<h5>
							<?php echo $nma?>
						</h5>	
						</div>
						<div class="col-6">
						
						
						<h4 class="color" style="font-weight: bold;margin-top: 5%">
							Ciri-Ciri Fisik:
						</h4>
						<h5>
							<?php echo $ciri?>
						</h5>
						<h4 class="color" style="font-weight: bold;margin-top: 5%">
							Penanganan:
						</h4>
						<h5>
							<?php echo $pen?>
						</h5>
						</div>
						
					</div>
					<div class="col-12">
						<hr style="margin-top: 5%">
						<h4 style="font-weight: bold;text-align: center;" class="color">
							Detail Olah Citra: 
						</h4>
						<hr style="margin-bottom: 5%">
					</div>
					<div id="murni"class="col-4">
						<h4 style="font-weight: bold;text-align: center;" class="color">
							Citra Asli 
						</h4>
						<hr>
						<center><img src="<?php echo base_url('upload/rgb/');echo $name?>" height="150" width="150"></center>
					</div>
					<div id="abu" class="col-4">
						<?php 
						
						$w = imagesx($im);
   						$h = imagesy($im);
    					$r = $g = $b = 0;
    					for($y = 0; $y < $h; $y++) {
        				for($x = 0; $x < $w; $x++) {
            			$rgb = imagecolorat($im, $x, $y);
            			$r = ($rgb >> 16) & 0xFF;
						$g = ($rgb >> 8) & 0xFF;
						$b = $rgb & 0xFF;
						$cl=(0.21*$r)+(0.72*$g)+(0.07*$b);
						$abu[$x][$y]=($cl*15)/255;
						imagesetpixel($im, $x, $y, imagecolorallocate($im, $cl, $cl, $cl));}}

							ob_start();
						imagejpeg($im);
						$contents = ob_get_contents();
						ob_end_clean();

						$base64 = "data:image/jpeg;base64," . base64_encode($contents);


						?>
						<h4 style="font-weight: bold;text-align: center;" class="color">
							Citra Abu-Abu 
						</h4>
						<hr>
						<center><img src="<?php echo $base64?>"height="150" width="150"></center>
					</div>
					<div id="nilai"class="col-4">
						<h4 style="font-weight: bold;text-align: center;" class="color">
							Nilai Fitur GLCM
						</h4>
						<hr>
						<?php
$pc=16;//panjang tone citra
	$pa_r=$h;//panjang baris array;
	$pa_c=$w;//panjang kolom array;
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mh[$i][$j]=0;
		for ($m=0; $m <$h ; $m++) { 
			for ($n=0; $n <$w-1 ; $n++) { 
				if ( round($abu[$m][$n]) == $i and round($abu[$m][$n+1]) == $j ) {
					$mh[$i][$j]++;
				}
			}
		}
	
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mt[$j][$i]=$mh[$i][$j];
	}
}

$total=0;
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mf[$i][$j]=$mt[$i][$j]+$mh[$i][$j];
		$total+=$mf[$i][$j];
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$my[$i][$j]=$mf[$i][$j]/$total;
	}
}

for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$energi0+= ($my[$i][$j])*($my[$i][$j]);
		$kontras0+=(($i-$j)*($i-$j))*$my[$i][$j];
		$homo0+=$my[$i][$j]/(1+(($i-$j)*($i-$j)));
		$entropi0+=$my[$i][$j]*0.301*$my[$i][$j];

	}	
}	
//45
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mh[$i][$j]=0;
		for ($m=0; $m <$h-1 ; $m++) { 
			for ($n=0; $n <$w-1 ; $n++) { 
				if ( round($abu[$m+1][$n]) == $i and round($abu[$m][$n+1]) == $j ) {
					$mh[$i][$j]++;
				}
			}
		}
	
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mt[$j][$i]=$mh[$i][$j];
	}
}

$total=0;
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mf[$i][$j]=$mt[$i][$j]+$mh[$i][$j];
		$total+=$mf[$i][$j];
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$my[$i][$j]=$mf[$i][$j]/$total;
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$energi45+= ($my[$i][$j])*($my[$i][$j]);
		$kontras45+=(($i-$j)*($i-$j))*$my[$i][$j];
		$homo45+=$my[$i][$j]/(1+(($i-$j)*($i-$j)));
		$entropi45+=$my[$i][$j]*0.301*$my[$i][$j];

	}	
}
//90	
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mh[$i][$j]=0;
		for ($m=0; $m <$h-1 ; $m++) { 
			for ($n=0; $n <$w ; $n++) { 
				if ( round($abu[$m+1][$n]) == $i and round($abu[$m][$n]) == $j ) {
					$mh[$i][$j]++;
				}
			}
		}
	
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mt[$j][$i]=$mh[$i][$j];
	}
}

$total=0;
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mf[$i][$j]=$mt[$i][$j]+$mh[$i][$j];
		$total+=$mf[$i][$j];
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$my[$i][$j]=$mf[$i][$j]/$total;
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$energi9+= ($my[$i][$j])*($my[$i][$j]);
		$kontras9+=(($i-$j)*($i-$j))*$my[$i][$j];
		$homo9+=$my[$i][$j]/(1+(($i-$j)*($i-$j)));
		$entropi9+=$my[$i][$j]*0.301*$my[$i][$j];

	}	
}
//135
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mh[$i][$j]=0;
		for ($m=0; $m <$h-1 ; $m++) { 
			for ($n=0; $n <$w-1 ; $n++) { 
				if ( round($abu[$m+1][$n+1]) == $i and round($abu[$m][$n]) == $j ) {
					$mh[$i][$j]++;
				}
			}
		}
	
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mt[$j][$i]=$mh[$i][$j];
	}
}

$total=0;
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$mf[$i][$j]=$mt[$i][$j]+$mh[$i][$j];
		$total+=$mf[$i][$j];
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$my[$i][$j]=$mf[$i][$j]/$total;
	}
}
for ($i=0; $i <$pc ; $i++) { 
	for ($j=0; $j <$pc ; $j++) { 
		$energi135+= ($my[$i][$j])*($my[$i][$j]);
		$kontras135+=(($i-$j)*($i-$j))*$my[$i][$j];
		$homo135+=$my[$i][$j]/(1+(($i-$j)*($i-$j)));
		$entropi135+=$my[$i][$j]*0.301*$my[$i][$j];

	}	
}
$energi=($energi0+$energi45+$energi9+$energi135)/4;
$kontras=($kontras0+$kontras45+$kontras9+$kontras135)/4;
$homo=($homo0+$homo45+$homo9+$homo135)/4;
$entropi=($entropi0+$entropi45+$entropi9+$entropi135)/4;
				?>
						<table style="text-align: left;font-weight: bold">
							<tr>
								<td>Energi</td>
								<td>:<?php echo $energi?></td>
							</tr>
							<tr>
								<td>Entropi</td>
								<td>:<?php echo $entropi?></td>
							</tr>
							<tr>
								<td>Kontras</td>
								<td>:<?php echo $kontras?></td>
							</tr>
							<tr>
								<td>Homogeniti</td>
								<td>:<?php echo $homo?></td>
							</tr>
						</table>
					</div>
				</div>
				<div class="col-12">
				
					
					<form method="get" action="tambah_sampel">
					
  					<input type="hidden" name="kode" value="<?php echo $idp[1]?>">
  					<input type="hidden" name="foto" value="<?php echo $name?>">
  					<input type="hidden" name="energi" value="<?php echo $energi?>">
  					<input type="hidden" name="entropi" value="<?php echo $entropi?>">
  					<input type="hidden" name="homo" value="<?php echo $homo?>">
  					<input type="hidden" name="kontras" value="<?php echo $kontras?>">
  					<hr>
  					<input type="submit" name="" value="Simpan Ke Sampel Latih" class="btn btn-success col-12">
  					<a style="margin-top: 2%" href="#" class="btn btn-danger col-12"onclick="history.back(-1)">Batal</a>
					</form>
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
