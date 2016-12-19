<?php session_start(); ?><!DOCTYPE html>

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

<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><b>HFP</b>base</a>
  </div>
  
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">ANMELDUNG</p>

    <form id="login_form" method="POST"  action="dist/php/login.php">
      <div class="form-group has-feedback">
        <input type="email" class="form-control" name="loginname" id="loginname" value="" placeholder="E-Mail">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="loginpasswort" id="loginpasswort" value="" placeholder="Passwort" >
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Anmelden</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

   

    <a href="starter_passwort.php" >Ich habe mein Passwort vergessen</a><br>
     <div class="col-xs-10">
      zur <strong><a href="http://humanistischefriedenspartei.de">HFP</a></strong>
        </div>

  </div>
  <!-- /.login-box-body -->
  
 
        
        
</div>
<!-- /.login-box -->


<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>

<script src="bootstrap/js/bootstrap.min.js"></script>

<script src="dist/js/app.min.js"></script>

</body>
</html>
