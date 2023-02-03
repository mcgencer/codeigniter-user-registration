<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Giriş Sayfası</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<h1 class="page-header text-center">Kullanıcı Giriş Paneli</h1>
	<div class="row">
		<div class="col-sm-4 col-sm-offset-4">
			<div class="login-panel panel panel-primary">
		        <div class="panel-heading">
		            <h3 class="panel-title"><span class="glyphicon glyphicon-lock"></span> Giriş
		            </h3>
		        </div>
		    	<div class="panel-body">
		        	<form method="POST" action="<?php echo base_url(); ?>index.php/user/login">
		            	<fieldset>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Email" type="email" name="email" required>
		                	</div>
		                	<div class="form-group">
		                    	<input class="form-control" placeholder="Şifre" type="password" name="password" required>
		                	</div>
		                	<button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Giriş</button>
		            	</fieldset>
						
		        	</form>
					<br>
					<form method="POST" action="<?php echo base_url(); ?>index.php/register_controller/">
		            	<fieldset>
		                	<button type="submit" class="btn btn-lg btn-primary btn-block"><span class="glyphicon glyphicon-log-in"></span> Kayıt</button>
		            	</fieldset>
						
		        	</form>
		    	</div>
		    </div>
			<?php
				
			?>
		</div>
	</div>
</div>
</body>
</html>