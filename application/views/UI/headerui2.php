<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">

    <!--Theme CSS-->
    <link rel="stylesheet" type="stylesheet/css" href="<?= base_url().'Assets/UI_assets/css/style.css';?>" >

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url().'Assets/UI_assets/css/bootstrap.min.css';?>" >

    <!--Data Tables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">


    <title>Foodshala booking</title>

<style>
*{
  font-family: sans-serif;
}
    h6{
    color:black!important;
  }
  .carousel-item{
    height: 500px;
  }
  html, body{
      overflow-x:hidden;
  }
  
  section{
  padding-top:40px;
  /*height:600px;*/
  }
  .aboutus{
    width:100%;
  }
  .bg-blue{
    background-color: #89cff0;
  }
  .bg-yellow{
    background-color: #ffffed;
  }
  .br-20{
    border-radius: 20px;
  }
  .bg-navy{
    background-color: #00255f;
    color:white;
  }
  .bg-grey{
    background-color:#eeeeee;
  }
  .bg-cyan{
    background-color: #d2fff3;
  }
  .bg-pink{
    background-color: #fff0f5;
  }
  .about-img{
      height:500px;
  }
  .py-10{
      padding: 6rem 0 6rem 0!important;
  }
  .px-10{
    padding: 0rem 6rem 0rem 6rem!important;
  }
  .menu{
    font-weight: 700;
    font-size: 12px;
  }
  .text-white{
    color:white;
  }
  .size:hover{
    transform:scale(1.1, 1.1);
    transition: 0.2s ease;
    opacity:0.8;
  }
  
  
  @media only screen and (max-width:426px){
    section{
      padding-bottom: 0px!important;
    }
    .carousel-item{
      height:215px;
    }
    .row .rev{
        display:flex;
        flex-direction: row-reverse;
    }

  }
  </style>

    
  </head>
  <body>
  <?php 
  $resturant=$this->session->userdata('resturant');
//   print_r($resturant);
//   exit();
  $rest_id=$resturant['id'];
  ?>
    <header class="bg-light fixed-top" style="opacity:0.7">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light py-0">
        <a class="navbar-brand" href="#">
        <img src="<?= base_url().'Assets/UI_assets/images/logo-no-bg.png';?>" width="60" height="60" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link mx-2 <?=($sts=='home')?'active':'';?>" href="<?= base_url().'resturant/Resturant/home';?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 <?=($sts=='abt')?'active':'';?>" href="#about_resturant">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mx-2 <?=($sts=='add')?'active':'';?>" href="<?= base_url().'resturant/Resturant/create/'.$rest_id?>">Add items</a>
            </li>

            <li class="nav-item">
              <a class="nav-link mx-2 <?=($sts=='order')?'active':'';?>" href="<?= base_url().'resturant/Resturant/vieworder/'.$rest_id?>">View Orders</a>
            </li>

            <li class="nav-item ">
                <a class="nav-link mx-2" href="<?= base_url().'resturant/Resturant/logout';?>">Logout</a>   
            </li>
            

          </ul>
        </div>
      </nav>
    </div>
    </header>