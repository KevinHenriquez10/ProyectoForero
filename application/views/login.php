<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LOGIN</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

	<?= load_styles(); ?>

	<link href="css/login.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('../../images/bg.png')">

	    <!--   Big container   -->
	    <div class="container margin-rl-15px">
	        <div class="row">
		        <div class="col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3 padding-20">
		            <!--      Wizard container        -->
		            <div class="wizard-container padding-20">
		                <div class="card wizard-card" data-color="green" id="wizard">
	                    	<div class="wizard-header">
	                        	<h3 class="wizard-title divLogo cursor-pointer"><img src="<?= load_img_url('images/logo.png'); ?>" alt=""></h3>
								<p class="p-subtitle">Plataforma de gestion web.</p>
	                    	</div>
							<div class="container-fluid"> 
								<div class="row">
									<div class="col-sm-10 col-sm-offset-1">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">email</i>
											</span>
											<div class="form-group label-floating">
												<label class="control-label">Correo Electronico</label>
												<input id="inpEmailEntrar" name="inpEmailEntrar" type="email" class="form-control">
											</div>
										</div>

										<div class="input-group">
											<span class="input-group-addon">
												<i class="material-icons">lock_outline</i>
											</span>
											<div class="form-group label-floating">
												<label class="control-label">Contraseña</label>
												<input id="inpPassEntrar" name="inpPassEntrar" type="password" class="form-control">
											</div>
										</div>

										<div class="pull-right">
											<button class="btn btn-warning" id="btnEntrar">Ingresar</button>
										</div>
									</div>
								</div>
							</div>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div> <!-- row -->
		</div> <!--  big container -->

	</div>

</body>

<?= load_scripts(); ?>
<script src="js/jquery.bootstrap.js" type="text/javascript"></script>
<script src="js/views/login.js"></script>

<!--- CDN DEL EMAIL -->
<script src="https://smtpjs.com/v3/smtp.js"></script>


</html>
