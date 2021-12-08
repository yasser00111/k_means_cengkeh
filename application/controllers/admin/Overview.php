<?php defined('BASEPATH') OR exit('No direct script access allowed');




class Overview extends CI_Controller {
    public function __construct()
    {
    parent::__construct();
    $this->load->model("user_model");
      $this->load->helper(array('form', 'url'));
  $this->load->model('product_model');
  $this->load->helper('url');
    $this->load->helper('download');
        $this->load->library('form_validation');
    require_once APPPATH.'third_party/fpdf/fpdf.php';
        
    $pdf = new FPDF();
    $pdf->AddPage();
    
    $CI =& get_instance();
    $CI->fpdf = $pdf;
     if($this->session->has_userdata('user_logged'))
        {
        
        }
        else{redirect(site_url('login?cek='));}
  }
  public function logout()
    {
        $this->session->sess_destroy();
        redirect(site_url('login'));
    }

  public function index()
  {
    
       $data=$this->user_model->getdb('data_awal')->result();
        $this->load->view("admin/overview");
      
      

       
      
  }
    public function penyakit()
  {
        $data['penyakit']=$this->user_model->getdb('penyakit')->result();
        $data['sampel']=$this->user_model->getdb('data_awal')->result();
        
        $this->load->view("admin/penyakit",$data);
      
  }
    public function sampel()
  {
        $data['penyakit']=$this->user_model->getdb('penyakit')->result();
        $data['sampel']=$this->user_model->getdb('data_awal')->result();
        $this->load->view("admin/sampel",$data);
      
  }
  public function sampel_proses()
  {
       
        $config['upload_path']          = './upload/rgb/';
        $config['allowed_types']        = 'png';
 
    $this->load->library('upload', $config);
 
     $this->upload->do_upload('berkas');
      $data = array('upload_data' => $this->upload->data());
       $data['penyakit']=$this->user_model->getdb('penyakit')->result();
        $data['sampel']=$this->user_model->getdb('data_awal')->result();
      $this->load->view("admin/sampel_proses",$data);

  }
  public function klas()
{

$data['penyakit']=$this->user_model->getdb('penyakit')->result();
$data['sampel']=$this->user_model->getdb('data_awal')->result();    
$this->load->view("admin/klas",$data); 

}  
    public function klas1()
  {  
$config['upload_path']          = './upload/rgb/';
$config['allowed_types']        = 'png';
 
    $this->load->library('upload', $config);
 
     $this->upload->do_upload('berkas');
      $data = array('upload_data' => $this->upload->data());
$this->product_model->hapus_all('klas');
//olah citra
$name = $_FILES['berkas']['name'];
$nama = $_FILES['berkas']['tmp_name'];
        $energi=0;
        $entropi=0;
        $homo=0;
        $kontras=0;
        $im = imagecreatefrompng(base_url('upload/rgb/').$name);
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
    $energi+= ($my[$i][$j])*($my[$i][$j]);
    $kontras+=(($i-$j)*($i-$j))*$my[$i][$j];
    $homo+=$my[$i][$j]/(1+(($i-$j)*($i-$j)));
    $entropi+=$my[$i][$j]*0.301*$my[$i][$j];

  } 
}   



 //klasifikasi       
  $i=1   ;
  $ccc=0;
  $gh=0;
  $penyakit=$this->user_model->getdb('penyakit')->result(); 
  $awal=$this->user_model->getdb('data_awal')->result();
 foreach ($penyakit as $p){
          $cn[$i]=0;
          $ce[$i]=0;
          $ch[$i]=0;
          $ck[$i]=0;
          $pn=0;
           foreach ($awal as $a) {
            if ($p->id == $a->kode) {
              $ip[$i]=$p->id;
              $cn[$i]+=$a->energi;
              $ce[$i]+=$a->entropi;
              $ch[$i]+=$a->homogeniti;
              $ck[$i]+=$a->kontras;
              $gh=1;
              $pn++;
            }

          }
          if ($pn>0) {
          $ccc++;
          $cn[$i]/=$pn;
          $ce[$i]/=$pn;
          $ch[$i]/=$pn;
          $ck[$i]/=$pn;
          $data3["energi"]=$cn[$i];
          $data3["entropi"]=$ce[$i];
          $data3["homogeniti"]=$ch[$i];
          $data3["kontras"]=$ck[$i];
          $data3['id']=$i;
          $st=0;
         $this->product_model->tambah($data3,'klas');
          }
          $i++;
        }  
                 
      $data3["energi"]=$energi;
          $data3["entropi"]=$entropi;
          $data3["homogeniti"]=$homo;
          $data3["kontras"]=$kontras ;
          $data3['id']=$i+1;
         $this->product_model->tambah($data3,'klas');  
 $stat=0;
 while ($stat ==0) {
  
    $awal=$this->user_model->getdb('klas')->result();
        $center=$this->user_model->getdb('center')->result();
        $center_lama=$this->user_model->getdb('center_lama')->result();
        
      
$no=1;
$sd=1;
$ceks[1]="energi";
$ceks[2]="entropi";
$ceks[3]="homogeniti";
$ceks[4]="kontras";
$cl=$ccc;

$x=1;
$tr=1;
$tr1=1;
$stat=0;
if ($center_lama != null) {
 foreach ($center_lama as $ct) {
  for ($i=1; $i <=count($ceks) ; $i++) { 
    $c_lama[$tr][$i]=$ct->{$ceks[$i]};
  }
    $tr++;
}foreach ($center as $ct) {
  for ($i=1; $i <=count($ceks) ; $i++) { 
    $c[$tr1][$i]=$ct->{$ceks[$i]};
  }
    $tr1++;
}

 for ($p=1; $p <=$cl ; $p++) { 
  for ($i=1; $i <=count($ceks) ; $i++) { 
    if ($c_lama[$p][$i] == $c[$p][$i] ) {
    $stat=1;
  }
}
}
}
 $center_lama=$this->user_model->getdb('center_lama')->result();  

foreach ($awal as $s) {
  $id[$x]=$s->id;
  $x++;
}
   if ($center == null) {
    foreach ($awal as $ss) {
      for ($i=1; $i <=count($ceks) ; $i++) { 
       $c[$no][$i]=$ss->{$ceks[$i]};
      }
      $no++;
    }
    }
    else{
    foreach ($center as $cs) {
      for ($i=1; $i <=count($ceks) ; $i++) { 
       $c[$no][$i]=$cs->{$ceks[$i]}; 
      }
      $no++;
    }
    }
    for ($i=1; $i <=$cl ; $i++) { 
    for ($j=1; $j <=count($ceks) ; $j++) { 
      $data2["$ceks[$j]"]=$c[$i][$j];
      $data2['id']=$i;
      $where['id']=$i;
     }
    if ($center_lama == null) {
    $this->product_model->tambah($data2,'center_lama');
    }
    else
    {
      
  $this->product_model->ubah($where,$data2,'center_lama');
    }

}
    $no=1;

    foreach ($awal as $ss) {
        for ($i=1; $i <=count($ceks) ; $i++) { 
        $data[$no][$i]=$ss->{$ceks[$i]};
      }
      $no++;
    }
    for ($i=1; $i <=count($awal) ; $i++) { 
      for ($j=1; $j <=$cl ; $j++) { 
        $dc=0;
        for ($k=1; $k <=count($ceks) ; $k++) { 
         $dc+=(($data[$i][$k]-$c[$j][$k])*($data[$i][$k]-$c[$j][$k]));
        }
        $dc1[$i][$j]=sqrt($dc);
      }
    }



$i=1;
for ($f=1; $f <=count($awal) ; $f++) {
$cek= $dc1[$f][$i];
$cc=1;
$ips[$f]=$ip[1];
for ($o=2; $o <=$cl ; $o++) { 
if ($dc1[$f][$o] < $cek) 
{
$cek=$dc1[$f][$o];
$ips[$f]=$ip[$o];
$cc=$o;
}
}
    $data=array(
      'status'=>$cc
    );
    $where=array(
      'id'=>$id[$f]
    );
    $this->product_model->ubah($where,$data,'klas');
}
$awal1=$this->user_model->getdb('klas')->result();


for ($r=1; $r <=$cl ; $r++) {
for ($i=1; $i <=count($ceks) ; $i++) { 
$aa=0;
$cek=0;
foreach ($awal1 as $as) {
if ($as->status == $r){
$aa+=$as->{$ceks[$i]};
$cek++;
}
}
$aa1[$r][$i]=$aa/$cek;
}
}


for ($u=1; $u <=$cl ; $u++) { 
for ($i=1; $i <=count($ceks) ; $i++) { 
 $data1 ['id']=$u;
 $data1 ["$ceks[$i]"]=$aa1[$u][$i];  
 $where['id']=$u;  
}  
if ($center == null) 
{
  $this->product_model->tambah($data1,'center');
}
    else
{
  $this->product_model->ubah($where,$data1,'center');}
}

}


for ($f=1; $f <=count($awal) ; $f++) {

    $data=array(
      'status'=>$ips[$f]
    );
    $where=array(
      'id'=>$id[$f]
    );
    $this->product_model->ubah($where,$data,'klas');
} 

$this->product_model->hapus_all('center');
$this->product_model->hapus_all('center_lama');
 
        $data['penyakit']=$this->user_model->getdb('penyakit')->result();
        $data['sampel']=$this->user_model->getdb('data_awal')->result();
        $data['id_p']=$this->user_model->getdb('klas')->result();
        
        $this->load->view("admin/klas1",$data);

  }

  public function hapus_penyakit(){
  $id =$this->input->get('id');
  $where =array(
'id'=>$id
  );
  $this->product_model->hapus($where,'penyakit');
redirect(site_url('admin/overview/penyakit?cek=berhasil-hapus'));
}
public function hapus_sampel(){
  $id =$this->input->get('id');
  $where =array(
'id'=>$id
  );
  $this->product_model->hapus($where,'data_awal');
redirect(site_url('admin/overview/sampel?cek=berhasil-hapus'));
}
public function ubah_penyakit(){
  $id =$this->input->get('id');
$nm= $this->input->get('nama');
$l2=$this->input->get('ciri');
$l1= $this->input->get('penanganan');
  $where =array(
'id'=>$id
  );
 $data =array(
'nama'=>$nm,
'ciri'=>$l2,
'penanganan'=>$l1
); 
  $this->product_model->ubah($where,$data,'penyakit');
redirect(site_url('admin/overview/penyakit?cek=berhasil-ubah'));
}

public function tambah_penyakit(){
$nm= $this->input->get('nama');
$l2=$this->input->get('ciri');
$l1= $this->input->get('penanganan');
$data =array(
'nama'=>$nm,
'ciri'=>$l2,
'penanganan'=>$l1
);
$this->product_model->tambah($data,'penyakit');
redirect(site_url('admin/overview/penyakit?cek=berhasil-simpan'));
}

public function tambah_sampel(){
$kode=$this->input->get('kode');
$foto= $this->input->get('foto');
$en= $this->input->get('energi');
$nt= $this->input->get('entropi');
$hm= $this->input->get('homo');
$kn= $this->input->get('kontras');
$data =array(
'kode'=>$kode,
'gambar'=>$foto,
'entropi'=>$nt,
'homogeniti'=>$hm,
'kontras'=>$kn,
'energi'=>$en,

);
$this->product_model->tambah($data,'data_awal');
redirect(site_url('admin/overview/sampel?cek=berhasil-simpan'));
}

public function ubah_sampel(){
  $id =$this->input->get('id');
$l2=$this->input->get('kode');
  $where =array(
'id'=>$id
  );
 $data =array(
'kode'=>$l2,
); 
  $this->product_model->ubah($where,$data,'data_awal');
redirect(site_url('admin/overview/sampel?cek=berhasil-ubah'));
}
}
