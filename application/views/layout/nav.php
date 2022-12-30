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
                    <a class="nav-link disabled" href="#"><strong>Rango:</strong><?= $this->session->rango?></a>
                </li>
                <li class="nav-item divider">
                    <a class="nav-link disabled" href="#"><strong>Nombre de usuario: </strong><?php echo $this->session->nombre_usuario?></a>
                </li>
                <li class="nav-item" style="margin-left: 2em;">
                    <a href="<?=base_url('login/logout') ?>" class="btn btn-warning">Salir</a>
                </li>
            </ul>
        </div>
    </nav>