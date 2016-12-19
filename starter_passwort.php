<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Starter</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

 
</head>

<body class="hold-transition login-page" style="background-color:green">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>HFP</b>base</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg"> Passwort vergessen ? </p>
    
     <div>Bitte trage deine E-Mail ein mit der du dich bei uns angemeldet hast. Wir senden dir dein Passwort zu.</div>
     
    <form id="sendpwd_form"  >
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="useremail" id="useremail" value="" placeholder="E-Mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
     <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button id="sendPWD" type="submit" class="btn btn-primary btn-block btn-flat">senden</button>
        </div>
        <!-- /.col -->
      </div>
      
        
         
    </form>

   <h3 id="erg"></h3>

    <a href="starter_login.php">zurück</a><br>


  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="dist/js/app.min.js"></script>
<script src="dist/js/hfp_ajax_html.js"></script>

 
 
 <script type="text/javascript">
 $(document).ready(function () {
       // passwort zusenden
			$("#sendPWD").click(function(e) {  
			 e.preventDefault();
			      var mail = $("#useremail").val();
			      
			       $.ajax({
						url : "dist/php/hfp.php",
						type: "POST",
						data: { typ:"sendPWD",  mail: mail },
						success:function(data){
							console.log(data);
							$("#erg").html(data);
						}
					 });
											 
			
			 });
 
 });
 </script>

</body>
</html>
