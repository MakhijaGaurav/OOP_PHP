<!DOCTYPE html>
<html>
	<?php
    ob_start();
    include_once("includes/init.php");
	$page = "student";
	$title ="Study Link | Manage Enquiry";
	include_once("includes/head.php");
    ?>
    <body>

        <!-- Begin page -->
        <div id="wrapper">
			<!--INCLUDING SIDEBAR-->
            <?php include_once("includes/sidebar.php"); ?>
            
            <!--INCLUDING MAIN CONTENTS OF THE PAGE-->
            <?php 
			if(isset($_GET['e'])){
				$e = $_GET['e'];
            }else{
                $e = "default";
            }
				switch ($e)
                {
					case 'add':
						include_once("includes/add-enquiry.php"); 
						break;
					case 'edit':
						include_once("includes/edit-enquiry.php"); 
						break;
                    default:
						include_once("includes/manage-enquiry.php"); 
						break;
				}			
			?>
            
        </div>
        <!-- END wrapper -->
        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <!-- Parsley js USED FOR VALIDATION-->
        <script type="text/javascript" src="plugins/parsleyjs/parsley.min.js"></script>
        
         <!--SweetAlert is used for creating user-friendly modal-->
        <script src="plugins/sweet-alert/sweetalert2.min.js"></script>
        
        <!-- Dashboard Init -->
        <script src="assets/pages/jquery.enquiry.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>