<!doctype html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <title>CodeIgniter Login</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    table {
        border: 3px solid #CF000F;
        width: 500px;
        height: 250px;
        text-align: center;
    }

    table tr {
        border: 5px solid #F29B34;
        text-align: center;
        height: 10px;
    }

    table th {
        border: 5px solid #F29B34;
        text-align: center;
        height: 10px;
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</head>

<body>

    <div class="container">
        <h1 class="page-header text-center">Ürün Listesi</h1>
        <div class="row">
            <div class="col-md-1 col-md-offset-3 ">
                <table border="1" cellpadding="0" cellspacing="0" width: "100%">
                    <thead>

                        <tr>
                            <th>ID</th>
                            <th>Ürün Adı</th>
                            <th>Google Arama</th>
                            <th>Bilgiler</th>
                            <th>Düzenleme</th>

                        </tr>
                    </thead>
                    <?php foreach ($product as $urunler){ ?>
                    <tr>
                        <td> <?php echo $urunler->id ?> </td>
                        <td> <?php echo $urunler->pname ?></td>
                        <td> <a href="https://www.google.com/search?q=<?php echo $urunler->pname ?> " target="_blank"
                                class="glyphicon glyphicon-search"></a> </td>

                        <td>

                            <button type="button" class="btn btn-info btn-lg" data-toggle="modal" "
                                data-target=" #<?php echo $urunler->pname ?>">Bilgi </button>

                            <div id="<?php echo $urunler->pname ?>" class="modal fade" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title"> <?php echo $urunler->pname ?> Bilgiler</h4>
                                        </div>
                                        <div class="modal-body">
                                            <p>


                                            <div class="container-fluid">

                                                <div class="row">

                                                    <div class="col-sm-6" style="background-color:white; ">

                                                        <img src="<?php echo base_url(); ?>images/<?php echo $urunler->pname ?>.png"
                                                            width="140" height="140" />
                                                    </div>
                                                    <div class="col-sm-6"
                                                        style="background-color:#f0f8ff; text-align: left; ">

                                                        <ul>
                                                            <br><br>
                                                            <li>Ürün ID : <?php echo $urunler->id ?> <br></li>
                                                            <li>Ürün Adı : <?php echo $urunler->pname ?> <br></li>
                                                            <li>Ürün Kategori : <?php echo $urunler->padet ?> <br></li>
                                                            <li>Ürün Kategori : <?php echo $urunler->pkategori ?> <br>
                                                            </li>
                                                            <li>Ürün Model Numarası : <?php echo $urunler->modelno ?>
                                                                <br>
                                                            </li>
                                                            <br><br>
                                                        </ul>





                                                    </div>
                                                </div>

                                                </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                        </td>
                        
                    </tr> <?php } ?>

                </table> <br>

                <a href="<?php echo base_url(); ?>index.php/home" class="btn btn-danger">Geri</a>

            </div>

        </div>




</body>

</html>