<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>ADMIN COOTRANSURB</title>
  <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />

  <?= load_styles_ext(); ?>
  <?= $css ?>

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="green" data-background-color="white" data-image="../images/admin_back.jpg">
      <!-- logo -->
      <div class="center-div">
          <a href="#" class="logo divLogo m-0">
              <img src="<?= load_img_url('images/logo.png'); ?>" alt="" style="width: 200px;">
          </a>
      </div>
      <!-- /logo -->
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active">
            <a class="nav-link aRedirectLink" data-url="admin">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link aRedirectLink" data-url="admin/noticias">
              <i class="material-icons">assistant</i>
              <p>Gestor De Noticias</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#"><?= $title ?></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#" id="btnSalirAdmin">
                  <i class="material-icons">exit_to_app</i>
                  <label class="color-black-light font-17 cursor-pointer">Salir</label>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      <!-- CONTENIDO -->
      <?= $content_for_layout ?>


    </div>
  </div>

  
  <?= load_scripts_ext(); ?>
  <?= $js ?>

</body>

</html>