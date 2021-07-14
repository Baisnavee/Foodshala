<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Customer login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="<?= base_url().'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback';?>">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?=base_url().'assets/Admin/plugins/fontawesome-free/css/all.min.css';?>">
  <!-- Theme style adminLTE -->
  <link rel="stylesheet" href="<?= base_url().'assets/Admin/dist/css/adminlte.min.css';?>">
  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="<?= base_url().'assets/UI_assets/css/bootstrap.min.css';?>">
  
<style>
    .invalid-feedback{
        display:block;
    }
    body{
        overflow-x:hidden;
        background-image: url("<?=base_url().'assets/UI_assets/images/bg-img.jpg';?>");
        /* background-color: #cccccc; */
    }
</style>

</head>
<body >
    <div class="container">
    <?php
        $fail=$this->session->flashdata('fail');
        if($fail!=""){
    ?>
    <div class="alert alert-danger text-center"><?php echo $fail;}?></div>
    
    <div class="d-flex row mt-3 justify-content-center">
    
    <div class ="col-11 col-md-6 col-lg-5">
    <div class="card p-5">

    <h4 class="mb-1">Login to your account</h4>
    <!-- <h7 class="ml-1 mb-3">to continue to Bookanana.com</h7> -->
    <img src="<?= base_url().'assets/UI_assets/images/logo.jpg';?>" class="img-fluid mx-auto" alt="logo" style="max-width:120px;">
    <form action="<?=base_url().'customer/Customer/authenticate';?>" name="regform" id="regform" method="post">
      <div class="input-group mb-3">
          <input type="text" name="username" placeholder="Email or Phone no" class="form-control <?=(form_error('username')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('username');?>">
      </div>
      <?=form_error('username');?>
      
       <div class="input-group mb-3">
          <input type="password" name="password" placeholder="Password" class="form-control <?=(form_error('password')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('password');?>">
      </div>
      <?=form_error('password');?> 
      
      <div class="row mt-5">
          <div class="col-12 col-md-7 mb-4">
            <a href="<?=base_url().'customer/Customer/signup';?>" >Register if you don't have an account</a>
          </div>

          <div class=" col-12 col-md-5 ">
            <button type="submit" class="btn btn-success btn-block mb-2">Login</button>
          </div>
      </div>
    </form>
    </div>
    </div>
    
    </div>
</body>  
</html>
