<footer class="bg-light">
<script src="<?= base_url().'assets/UI_assets/js/jquery-3.3.1.slim.min.js'?>"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url().'assets/UI_assets/js/bootstrap.min.js'?>"></script>
      <div class="container">
        <div class="row">

          <div class="col-3">
          <img src="<?= base_url().'Assets/UI_assets/images/logo-no-bg.png';?>" width="80" height="80" class="d-inline-block align-top" alt="">
          </div>

          <div class="col-3 mt-4">
            <h6>Quick Links</h6>
            <p><a href="<?= base_url().'#about';?>">About Us</a></p>
            <p><a href="">Menu</a></p>
          </div>

          <div class="col-3 mt-4">
            <h6>Our Partners</h6>
            <p>abcdefgh</p><p>xyzabcdef</p><p>pqrstuv</p>
          </div>

          <div class="col-3 mt-4">
            <h6>Connect to us</h6>
            <p>Ph No- 98373022047</p>
            <p>Fax- 12356899 </p>
          </div>

        </div>
      </div>
      <script>
  $(document).ready(function () {
    $('#myTable').DataTable({
      //"order":[[6, "desc"]]
    });
  });
</script>
    </footer>
