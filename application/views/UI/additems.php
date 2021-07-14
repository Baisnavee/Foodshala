<?php
$this->load->view('UI/homeheader');
?>
<!-- Content Wrapper. Contains page content -->
<div class="container">
    <!-- Content Header (Page header) -->
    <?php
    $success=$this->session->flashdata('success');
    //$fail=$this->session->flashdata('fail');
    if($success!=""){?>
    <div class="alert alert-success text-center mt-5 py-5"><?= $success;?>
    </div>
    <?php }?>
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 mx-auto py-3">
            <div class="card">
              <div class="card-header bg bg-primary">Add new items
              </div>
            <form action="<?= base_url().'resturant/Resturant/create';?>" name="newitem" id="newitem" method="post" enctype="multipart/form-data">
              <div class="card-body">

              <div class="form-group">
              <label for="item-name">Item Name<sup style="color:red">*</sup></label>
              <input type="text" name="item_name" id="item-name" placeholder="Enter the item-name" pattern="[A-Za-z]{1-20}" value="<?= set_value('item_name');?>" class="form-control <?=(form_error('item_name')!= "" ) ?'is-invalid' :'';?>">
              <?= form_error('item_name');?>
              </div>
              

              <div class="form-group">
              <label for="price">Item Price<sup style="color:red">*</sup></label>
              <input type="number" name="price" min="10" id="price" value="<?= set_value('price');?>" placeholder="Enter The price for this menu item" class="form-control <?=(form_error('price')!= "" ) ?'is-invalid' :'';?>">
              <?= form_error('price');?>
              </div>

              <label for="item_type">Item type<sup style="color:red">*</sup></label>
              <div class="form-row">
              <div class="form-group mr-3">
              <input type="radio" id="veg" name="status" value="0" checked="">
              <label for="active">Veg</label>
              </div>
              <div class="form-group">
              <input type="radio" id="nonveg" name="status" value="1">
              <label for="inactive">Non-veg</label>
              </div>
              </div>

              <label for="availability">Availability<sup style="color:red">*</sup></label>
              <div class="form-row">
              <div class="form-group mr-3">
              <input type="radio" id="yes" name="availability" value="1" checked="">
              <label for="active">Available</label>
              </div>
              <div class="form-group">
              <input type="radio" id="no" name="availability" value="0">
              <label for="inactive">Unavailable</label>
              </div>
              </div>

              <div class="form-row">
              <div class="form-group mr-3">
              <button type="submit" class="btn btn-primary py-1 px-3">Add item</a>
              </div>

                <?= validation_errors();?>

              <div class="form-group">
              <a href="<?= base_url().'index.php/resturant/resturant/home';?>" class="btn btn-secondary py-1 px-3">Back</a>
              </div>
              </div>
              <div>
              <p class="text-danger" style="font-size:14px;">All fields marked with <sup><strong>*</strong></sup> are mandatory</p>
              </div>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
$this->load->view('UI/footerui');
?>