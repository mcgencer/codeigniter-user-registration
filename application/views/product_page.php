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
      <label for="text">Ürün:</label>
      <input type="text" class="form-control" name="pname" placeholder="Ürün İsmi">
    </div>
    <div class="form-group">
      <label for="text">Adet:</label>
      <input type="text" class="form-control" name="padet" placeholder="Adet">
    </div>


	<div class="form-group">
      <label for="text">Kategori:</label>
      <input type="text" class="form-control" name="pkategori" placeholder="Kategori">
    </div>

    <div class="form-group">
      <label for="text">Model No:</label>
      <input type="text" class="form-control" name="modelno" placeholder="Model Numarası">
    </div>

    <input type="submit" name="urunekle" class="btn btn-success" value="Ürün Ekle"/>
    <a href="<?php echo base_url(); ?>index.php/home" class="btn btn-danger">Geri</a>
  </form>
  

</div>

</body>
</html>
