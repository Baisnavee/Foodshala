<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Customer sign up</title>

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
<body>
    <div class="container">
    <?php
        $fail=$this->session->flashdata('fail');
        if($fail!=""){
    ?>
    <div class="alert alert-danger text-center"><?php echo $fail;}?></div>
    
    <div class="d-flex row mt-3 justify-content-center">
    
    <div class ="col-11 col-md-6 col-lg-5">
    <div class="card px-5 py-4">

    <h4 class="mb-1 text-center">Register for free</h4>
    <!-- <h7 class="ml-1 mb-3">to continue to Bookanana.com</h7> -->
    <img src="<?= base_url().'assets/UI_assets/images/logo-no-bg.png';?>" class="img-fluid mx-auto" alt="logo" style="max-width:100px;">
    <form action="<?=base_url().'customer/Customer/signup';?>" name="regform" id="regform" method="post">
        <div class="input-group mb-3">
            <input type="text" name="name" placeholder="Name" class="form-control <?=(form_error('name')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('name');?>">
        </div>
        <?=form_error('name');?>

        <div class="input-group mb-3">
            <input type="email" name="email" placeholder="Mail Id" class="form-control <?=(form_error('email')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('email');?>">
        </div>
        <?=form_error('email');?> 

        <div class="input-group mb-3">
            <input type="tel" name="phone" placeholder="Contact No." class="form-control <?=(form_error('phone')!= "" ) ?'is-invalid' :'';?>" pattern="[6-9]{1}[0-9]{9}" value="<?=set_value('phone');?>">
        </div>
        <?=form_error('phone');?> 

        <label class="text-muted">Your Food Preference</label><br/>
        <div class="form-row">
            <div class="form-group mr-3">
                <input type="radio" id="veg" class="ml-2" name="food" value="0" checked="">
                <label for="veg">Veg</label>
            </div>
            <div class="form-group">
                <input type="radio" id="non-veg" name="food" value="1">
                <label for="non-veg">Non-veg</label>
            </div>
        </div>

        <div class="row  mb-3">
            <div class="input-group col-sm-6 mb-3">
                <input type="password" name="password" placeholder="Create Password" class="form-control <?=(form_error('password')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('password');?>">
                <?=form_error('password');?>
            </div>
            <div class="input-group col-sm-6">
                <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control <?=(form_error('cpassword')!= "" ) ?'is-invalid' :'';?>" value="<?=set_value('cpassword');?>">
                <?=form_error('cpassword');?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <a href="<?=base_url().'customer/Customer/index'?>" >Log in instead</a>
            </div>

            <div class="col-md-5 float-right ">
                <button type="submit" class="btn btn-success btn-block mb-2">Register</button>
            </div>
        </div>
    </form>
    </div>
    </div>
    
    </div>
</body>  
</html>
