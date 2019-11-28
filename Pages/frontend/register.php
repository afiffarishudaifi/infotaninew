<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>INFOTANI - REGISTRASI</title>

    <!-- Bootstrap core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./css/register.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <form class="form-signin" action="proses_register.php" method="post">
      
      
        <br> 
        <h2 class="form-signin-heading" align="center" >REGISTRASI</h2>
        
        <br>
        <label for="username" >Username</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="password" >Password</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Kata Sandi" required autofocus>
        <br>
        <label for="passwordConf" >Confirm Password</label>
        <input type="password" id="passwordConf" name="passwordConf" class="form-control" placeholder="Ulangi Kata Sandi" required>
        <br>
        <label for-"fotoUser" > Foto Anda </label>
        <input type="file" name="file" />
        <a href="./login.php" class="btn btn-lg btn-warning">Batal</a>
        <button class="btn btn-lg btn-success " type="submit">Register</button>
      </form>
    </div> <!-- /container -->

     <script>window.jQuery || document.write('<script src="./assets/jquery.min.js"><\/script>')</script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      $(document).ready(function(){
        setTimeout(function(){
          $(".alert").slideUp();
        },3000);
      });
    </script>
  </body>
</html>
