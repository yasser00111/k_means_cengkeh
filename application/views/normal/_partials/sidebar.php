<!-- Sidebar -->
<style type="text/css">

li.cd :hover{
transition: background-color 0.5s;    
background-color: #e6e6e6;

}  



</style>
<ul class="sidebar navbar-nav sitcky-top bg-light" style="  position: fixed;
border-right-style: solid;
border-right-width:thin; 
border-right-color: red">
    <li class="nav-item sitcky-top cd ">
        <a class="nav-link" href="#" style="color: black;<?php 
$pg=$this->uri->segment(3); 
if ($pg == '') {
   echo 'background-color:#e6e6e6;
border-bottom-style: solid;
border-bottom-width: thin; 
border-bottom-color: red;
border-top-style: solid;
border-top-width: thin; 
border-top-color: red;
border-right-style: solid;
border-right-width:thin; 
border-right-color: #e6e6e6';
}
?>">
            <i class="fas fa-fw fa fa-desktop"></i>
            <span>Beranda</span>
        </a>
    </li>
   
    
        
    
    

   
</ul>
<ul class="sidebar navbar-nav bg-light" style="border-right-style: solid;
border-right-width:thin; 
border-right-color: red">
    <li class="nav-item sitcky-top <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>" >
        <a class="nav-link" href="#" style="color: black">
         
        </a>
    </li>
   

   
</ul>
