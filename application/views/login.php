<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <?= validation_errors(); ?>
    <?= form_error('email') ?>
    <div class="container">
        <div class="row justify-content-lg-center">
            <div class="col-lg-6">

                <h1 class="text-center">Login</h1>
                <?php //var_dump($menu); 
                ?>
                <ul>
                    <?php foreach ($menu as $item) : ?>
                        <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
                    <?php endforeach ?>
                </ul>
                <form action="<?= base_url('login/validate') ?>" method="POST" id="form_login">
                    <div class="form-group" id="email">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                    <div class="form-group" id="password">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        <div class="invalid-feedback">

                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                    <div class="form-group" id="alert">

                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/auth/login.js') ?>"></script>
</body>

</html>