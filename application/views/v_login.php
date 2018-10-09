<!DOCTYPE html>
<html>
  <head>
    <title>Aplikasi Satu Data</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   <meta name="description" content="Aplikasi Satu Data">
        <meta name="author" content="Muhamad Rifki">

         <!-- favicon -->
        <link rel="shortcut icon" href="<?php echo base_url() ?>assets/css/favicon.png" />
    
        <!-- Bootstrap -->
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="<?php echo base_url().'assets/css/style.css'?>" rel="stylesheet">

  </head>

  <body>
    <div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <?php echo $this->session->flashdata('msg');?>
            <div class="account-wall">
                <img class="profile-img" src="<?php echo base_url() ?>assets/css/favicon.png">

                <form class="form-signin" method="POST" action="<?php echo base_url().'login/auth'?>">
                <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda" autofocus required>
                   
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Masukkan Password Anda" required>
                    
                </div>

                <button class="btn btn-lg btn-primary btn-block" name="btn-login" id="btn-login" type="submit">
                    Masuk</button>

                <label class="checkbox pull-right">
                     <input type="checkbox" value="remember-me"> Remember me
                </label>

                <a href="#" class="pull-right need-help"></a><span class="clearfix"></span>
                </form>


            </div>
            
            <h4 class="text-center new-account">Aplikasi Satu Data - <b>V 1.0</b></h4>
            <a href="#" class="text-center new-account">Copy Right © 2018</a>
            <div id="error" style="margin-top: 10px"></div>

        </div>
    </div>
</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
