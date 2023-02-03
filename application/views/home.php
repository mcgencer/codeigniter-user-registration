<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CodeIgniter Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="page-header text-center"> Kullanıcı Dashboard</h1>
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <?php
				$user = $this->session->userdata('user');
				extract($user);
			?>

                <h2>Anasayfa </h2> <br>
                <p>Kullanıcı: <?php echo $fname; ?></p>
                <p>Email: <?php echo $email; ?></p>
                <p>Password: <?php echo $password; ?></p> <br>

                <form method="POST" action="<?php echo base_url(); ?>index.php/product_controller/index">

                    <fieldset>
                        <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span>
                            Ürün Ekle</button>
                        <a href="<?php echo base_url(); ?>index.php/Product_data/index"
                            class="btn btn-success ">Ürünleri Listele</a>
                        <a href="<?php echo base_url(); ?>index.php/user/logout" class="btn btn-danger">Çıkış</a>

                    </fieldset>
            </div>


        </div>
    </div>
</body>

</html>