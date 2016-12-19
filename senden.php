<?php session_start(); 
    if ($_SESSION["login"] == 0){ 
        header('Location: starter_login.php'); exit;  
        exit; 
        } else { 
     header("Access-Control-Allow-Headers: x-requested-with");
  
   if (isset($_SESSION['name'])) { $NAME = $_SESSION['username']; } else { $NAME = "GAST"; } 
   
}
 ?>
<!DOCTYPE html>

<html>
<head>
<title><?php echo $_SESSION['maininfo'][0]; ?></title>
<?php  include  "tpl/site/head.html"; ?>
<style type="text/css">
	    .user-circle { 
  background-color: aquamarine;
  width: 70px;
  height: 70px;
  padding: 26px 16px;
  font-size: 15px;
  line-height: 1.33;
  border-radius: 35px;
  margin: 5px 79px;
}
	 </style>
<head>
<!-- HTML ./head -->

<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
   
   <!-- Main-Header -->
   <?php
      include "tpl/site/main-header.html";
   ?>   
   <!-- /.main-header -->
    <!-- /Main-Sidebar -->                  
   <?php
      include "tpl/site/main-sidebar.html";
   ?> 
    <!-- /.main-sidebar -->
   
  <!-- Content Wrapper. Contains page content -->
  
     <?php
      include "tpl/site/content-wrapper.html";
   ?>
  
  <!-- /.content-wrapper -->

  <!-- Content Footer.   -->
  
     <?php
      include "tpl/site/footer.html";
   ?>
  
  <!-- /footer -->

  <!-- Control Sidebar rechts -->
      <?php
      include "tpl/site/aside-sidemenu.html";
   ?>

</div>
<!-- ./wrapper -->



 <!-- Content scripte.   -->
  
     <?php
      include "tpl/site/javascript_end.html";
   ?>
  
  <!-- /Content scripte  -->




</body>
</html>
