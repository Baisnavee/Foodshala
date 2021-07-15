<?php 
$this->load->view('UI/homeheader');
?>

<!-- Content Wrapper. Contains page content -->
<style>
th,td{
  text-align:center;
}
.btn-navy{
  background-color: navy!important;
  color:white;
}
.btn-navy:hover{
  color:#f9f9f3;
}
</style>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
  
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 mx-auto py-3">

          <?php
          $success=$this->session->flashdata('success');
          $fail=$this->session->flashdata('failure');
          if($success!=""){?>
            <div class="alert alert-success alert-dismissible fade show text-center"><?= $success;?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php }else if($fail !=""){ ?>
            <div class="alert alert-danger alert-dismissible fade show text-center"><?= $fail;?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div> <?php } else{} ?>
          
            <div class="card">
              <div class="card-body">
              <!--table-->
              <table class="table table-responsive d-table table-striped" id="myTable">
                
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <!-- <th scope="col">Customer name</th> -->
                    <th scope="col">Item name</th>
                    <!-- <th scope="col">Item Type</th> -->
                    <th scope="col">Item Price</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
              if(!empty($items)){
                foreach($items as $item){
            ?>
                
                    <tr>
                    <td><?= $item['id'];?></td>

                    <td><?= $item['item_name'];?></td>
                    
                    <td><?= $item['price'];?></td>
                    <td>
                    <a href="<?= base_url().'resturant/Resturant/delete/'.$item['id'];?>" class="btn btn-success btn-sm" >Accept</a>
                    <a href="<?= base_url().'resturant/Resturant/delete/'.$item['id'];?>" class="btn btn-danger btn-sm" >Reject</a>
                    </td>
                    </tr>
                
            <?php
            }
          }
            else{
            ?>
              <tr>
              <td colspan="8" class="alert alert-danger">No orders found</td>
              </tr>
            <?php }

            ?>
              </tbody>
              </table>
              <!---table end-->
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <!-- /.control-sidebar -->
<?php
$this->load->view('UI/footerui');
?>


