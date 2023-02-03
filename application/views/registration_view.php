<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Kayıt Formu</h2>
  <?php echo @$message; ?>
  <form method="post" enctype="multipart/formdata">
    <div class="form-group">
      <label for="email">İsim:</label>
      <input type="text" class="form-control" name="fname" placeholder="İsim">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" name="email" placeholder="Email">
    </div>


	<div class="form-group">
      <label for="passsword">Şifre:</label>
      <input type="text" class="form-control" name="password" placeholder="Şifre">
    </div>

    <input type="submit" name="register" class="btn btn-success" value="Kayıt Ol"/>
    <a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger">Çıkış</a>
  </form>
  

</div>

</body>
</html>
