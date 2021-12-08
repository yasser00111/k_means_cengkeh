<?php 
if ($this->uri->segment(3) == "") {
?>

<nav class="navbar navbar-expand navbar-dark  text-light" style="height: 170px;background-color:#40485cff;">
<div style="text-align: center;" class="col-12">
    
<h1 style="font-weight: bold">Klasifikasi Penyakit Tanaman Cengkeh</h1>
<h3>Berdasarkan olah citra </h3>
</div>
</nav>
<?php
}

?>

<nav class="navbar navbar-expand navbar-light  sticky-top shadow" style="background-color: #9bffadff;padding: 0 0">
<div class="collapse navbar-collapse" id="navbarNavDropdown" style="margin-left: 20%">
    <ul class="navbar-nav" style="font-size: 18px">
   <li class="nav-item " style="margin-right: 70px;<?php 
if ($this->uri->segment(3) == "") {
echo "border-bottom-style:solid;border-bottom-width: 4px;color:#40485cff;";
}
?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>" >Beranda</a>
      </li>
      <li class="nav-item" style="margin-right: 70px;<?php 
if ($this->uri->segment(3) == "penyakit") {
echo "border-bottom-style:solid;border-bottom-width: 4px;color:#40485cff;";
}
?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview/penyakit') ?>" >Data Penyakit </a>
      </li>
          <li class="nav-item"style="margin-right: 70px;<?php 
if ($this->uri->segment(3) == "sampel") {
echo "border-bottom-style:solid;border-bottom-width: 4px;color:#40485cff;";
}
?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview/sampel') ?>">Data Sampel Penyakit</a>
      </li>
          <li class="nav-item"style="margin-right: 70px;<?php 
if ($this->uri->segment(3) == "klas") {
echo "border-bottom-style:solid;border-bottom-width: 4px;color:#40485cff;";
}
?>">
        <a class="nav-link" href="<?php echo site_url('admin/overview/klas') ?>">Klasifikasi Sampel</a>
      </li>
   </ul>
</div>

    
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
       
    </form>

   
    <ul class="navbar-nav ml-auto ml-md-0">
       

        <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user-circle fa-fw"></i>Admin
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                <p style="text-align:center;"><i class="fa fa-dot-circle fa-fw" style="color: green"></i>Online</p>
                <div class="dropdown-divider"></div>
                <p style="text-align:center;">
                    <i class="fas fa-user-circle fa-fw" style="text-align: center;font-size: 50px;"> </i></br>Admin</p>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal" style="text-align: center;">Logout</a>
            </div>
        </li>
    </ul>

</nav>
<style type="text/css">
  .btn-success{
    background-color: #9bffadff;
    color:#40485cff;
    font-weight: bold;
  }
  .shadow{
    box-shadow: 0 1px 11px 0 rgba(0,0,0,0.18),0 1px 15px 0 rgba(0,0,0,0.15)
  }
  .color{
    color: #40485cff;
  }
  hr{
    background-color: #40485cff
  }
  .bg{background-color: #40485cff}
  table{
      width: 100%;

    }
    td { 
      padding:8px 10px;
      border-bottom: 1px solid white;
    }

    th{
      padding:15px 10px;

    }
    tr.ts:nth-child(2n-7) {background-color: #d3d3d3ff;}
    tr.ts:nth-child(2n-6) {background-color: #ebebebff;}
    tr.ts td.ts:first-child{ border-top-left-radius: 10px;}
    tr.ts td.ts:last-child{ border-top-right-radius: 10px;}
    
    
    
    .tmb{
        border-width:thin;font-size: 14px;
        color: white;
        border-radius: 5px;
        padding: 5px 5px;
        font-weight: bold;margin-bottom: 10px;
        background-color: #1a53ff;
    }
    .tmb:hover{color: white;
        font-style: none;
        text-decoration: none;
        
    }
</style>