<?php 
$this->load->view('UI/homeheader2');
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
<div id="alert" class="my-3 py-3 text-center alert alert-success" role="alert" style="display:none;">
   <strong>Order placed successfully !!!<strong>
</div>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <?php

//   print_r($result);
//   exit();
  ?>  
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-8 mx-auto py-3">

          <?php
          $success=$this->session->flashdata('success');
          //$fail=$this->session->flashdata('failure');
          if($success!=""){?>
            <div class="alert alert-success alert-dismissible fade show text-center"><?= $success;?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          <?php }?>

            <div class="card">
              <div class="card-body">
              <!--table-->
              <table class="table table-responsive table-striped" id="myTable">

                  <thead>
                    <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Item name</th>
                    <th scope="col">Item Type</th>
                    <th scope="col">Price</th>
                    <th scope="col">Resturant name</th>
                    <th scope="col">Availability</th>
                    <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
              if(!empty($items)){
                $i=1;
                foreach($items as $item){
            ?>
                
                    <tr>
                    <td><?= $i;?></td>
                    <td><?= $item['item_name'];?></td>
                    <td>
                    <?php
                    if($item['status']== 0){
                    ?>
                    <span class="badge badge-success px-2 py-1">Veg</span>
                    <?php
                    }
                    else{
                    ?>
                    <span class="badge badge-danger px-2 py-1 ">Non veg</span>
                    <?php }
                    ?>
                    </td>
                    <td><?= $item['price'];?></td>
                    <td><?= $item['resturant'];?></td>
                    <td>
                    <?php
                    if($item['availability']== 1){
                    ?>
                    <span class="badge badge-success px-2 py-1">Available</span>
                    <?php
                    }
                    else{
                    ?>
                    <span class="badge badge-danger px-2 py-1 ">Unavailable</span>
                    <?php }
                    ?>
                    </td>
                    
                    <?php if($item['availability']==1){?>
                    <td>
                    <a href="javascript::void(0); " onclick="func(<?= $item['id']?>);ordered(<?=$item['ordered'];?>)" class="btn btn-success btn-sm" id="btn">Order</a>
                    </td> <?php } else{ ?>
                    <td>
                    <a href="javascript::void(0);" class="btn btn-success btn-sm disabled" id="btn" >Order</a>
                    </td>
                    <?php } ?>

                    <!-- <td>
                    <a href="<?//= base_url().'index.php/Admin/Jobs/edit/'.$arr['id'];?>" class="btn btn-primary btn-sm"><i class="far fa-edit"></i>Edit</a>
                    <a href="javascript::void(0); " onclick="deletejob(<?//= $arr['id'];?>)" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i>Delete</a>
                    </td> -->
                    </tr>
                
            <?php $i++;
            }
          }
            else{
            ?>
              <tr>
              <td colspan="8" class="alert alert-danger">Items not found</td>
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
<script>

function func(id){
    if(confirm("Are you sure you want to place this order")){
      window.location.href='<?php echo base_url("customer/Customer/create_order/");?>'+id;
    }
}
function ordered(status){
    //document.getElementById('btn').setAttribute('disabled') = 'disabled'; 
    console.log(status);
    status.value=1;
}
</script>

