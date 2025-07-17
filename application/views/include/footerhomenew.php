  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>ASRLM <?php echo date('Y'); ?></span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Developed by <a href="https://www.grantthornton.in/"><img src="<?php echo base_url();?>newdesign/images/logo-2.png" alt="Grant Thornton Logo"/></a> for <a href="#"> ASRLM </a>
    </div>
  </footer><!-- End Footer -->
	</section>
   
    <script type="text/javascript" src="<?php echo base_url();?>newdesign/js/popper.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>newdesign/js/bootstrap.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>newdesign/js/custom-file-input.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>newdesign/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>newdesign/js/dataTables.bootstrap4.min.js"></script>
<style>
.btn {  padding: 7px 25px 10px 25px; }
</style>
<script>
$(document).ready(function () {
  $("#taskTable").DataTable(
{"bInfo": false,
"bPaginate": false,
"bSort" : false
} )
});

  /*  "bProcessing": true,
    "sAutoWidth": false,
    "bDestroy":true,
    "sPaginationType": "bootstrap", // full_numbers
    "iDisplayStart ": 10,
    "iDisplayLength": 10,
    "bPaginate": false, //hide pagination
    "bFilter": false, //hide Search bar
    "bInfo": false, // hide showing entries
*/

</script>
</body>
</html>