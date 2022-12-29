<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <!-- BARRA DE NAVEGACION -->

    <nav class="navbar navbar-expand-lg navbar-light bg-ligth sticky-top">
        <span class="navbar-text navbar-brand">
            Desarrollo de Sistema hospital
        </span>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link disabled" href="#"><strong>Rango:</strong></a>
                </li>
                <li class="nav-item divider">
                    <a class="nav-link disabled" href="#"><strong>Nombre de usuario: </strong></a>
                </li>
                <li class="nav-item" style="margin-left: 2em;">
                    <a href="<?=base_url('login/logout') ?>" class="btn btn-warning">Salir</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <style>
                .sidebar-sticky{
                    position: -webkit-sticky;
                    position: sticky;
                    top: 78px;
                    height: calc(100vh - 78px);
                    padding-top: .5rem;
                    overflow-x: hidden;
                    overflow-y: auto;
                }
            </style>
            <div class="sidebar-sticky" style="margin-top: 1em;">
                <!-- FLASHDATA-->
                <?php if($dat = $this->session->flashdata('msg')): ?>
                    <div class="alert alert-primary" role="alert">
                        <?=$dat?>
                    </div>
                <?php endif; ?>
                <div class="nav flex-column nav-pills" id="v-pills-tap">
                    <a href="" class="nav-link" data-toggle="pill">Usuarios</a>
                    <a href="" class="nav-link" data-toggle="pill">Alta Medico</a>

                </div>
            </div>
        </nav>

            <main class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                    <h1 class="is-title">Aqui va el contenido</h1>
            </main>
        </div>
    </div>

    <h1>Dashboard</h1>
    <?php if($dat = $this->session->flashdata('msg')):?>
    <p><?=$dat?></p>
    <?php endif; ?>
    <a href="<?= base_url('login/logout')?>">Cerrar session</a>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>