
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="index.php"><b>HFP</b>base</a>
  </div>
  <!-- User name -->
  <h2 class="lockscreen-name" style="margin-bottom: 24px; text-align: center;"><?php echo $_SESSION['username'] ?></h2>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
    <!-- lockscreen image -->
    <div class="lockscreen-image">
      <img src="useruploads/profilbilder/<?php echo $_SESSION['img'] ?>" alt="User Image">
    </div>
    <!-- /.lockscreen-image -->

    <!-- lockscreen credentials (contains the form) -->
    <form class="lockscreen-credentials" method="POST" action="dist/php/login.php">
     <input type="hidden"   class="form-control" name="loginname" id="loginname" value="<?php echo $_SESSION['mail'] ?>" placeholder="E-Mail">
      <div class="input-group">
        <input type="password" name="loginpasswort" class="form-control" placeholder="password">

        <div class="input-group-btn">
          <button type="submit" class="btn"><i class="fa fa-arrow-right text-muted"></i></button>
        </div>
      </div>
    </form>
    <!-- /.lockscreen credentials -->

  </div>
  <!-- /.lockscreen-item -->
  <div class="help-block text-center">
    Bitte gib dein Passwort ein! Die Zeit in der du inaktiv war zu lange. 
  </div>
  <div class="text-center">
    <a href="starter_login.php">oder einen anderen User anmelden</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy;  2016 <b><a href="http://humanistischefriedenspartei.de/HFPbase/" class="text-black"><?php echo $_SESSION['maininfo'][0]?></a></b><br>
  </div>
</div>
<!-- /.center -->
