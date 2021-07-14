<?php
$this->load->view('UI/headerui3');
?>
<style>
  .br-20{
    border-radius: 20px;
  }
  .bg-navy{
    background-color: #00255f;
    color:white;
  }
</style>
<body class="">
<div class="container">
  <div id="slider">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?= base_url('Assets/UI_assets/images/cover1.jpg');?>" class="d-block w-100 h-100 img-fluid" alt="...">
        </div>
        <!-- <div class="carousel-item">
          <img src="<?//= base_url('Assets/UI_assets/images/cover2.jpg');?>" class="d-block w-100 h-100 img-fluid" alt="...">
        </div>
        <div class="carousel-item">
          <img src="<?//= base_url('Assets/UI_assets/images/cover3.jpg');?>" class="d-block w-100 h-100 img-fluid" alt="...">
        </div> -->
      </div>
    </div>
  </div>
</div>
<script language="JavaScript" type="text/javascript">
      $(document).ready(function(){
        $('.carousel').carousel({
          interval: 2000
        })
      });    
</script> 
</body>