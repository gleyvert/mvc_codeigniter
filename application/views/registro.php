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
    <h1>Registro</h1>
    <ul>
        <?php foreach($menu as $item): ?>
            <li><a href="<?= $item['url'] ?>"><?= $item['title'] ?></a></li>
        <?php endforeach?>
    </ul>
        <?php echo validation_errors();?>
    <?php
        echo form_open('registro/create',array('method'=>'POST'));
            echo form_label('Nombre de Usuario:');
            echo form_input('username');
            
            echo "<br>";
            echo form_label('Correo Electronico:');
            echo form_input(array('type' => 'email', 'name' =>'email'));
            
            echo "<br>";
            echo form_label('Contraseña');
            echo form_password('password');

              echo "<br>";
            echo form_label('Confirmacion de Contraseña');
            echo form_password('password_confirm');

            echo "<br>";
            echo form_submit('submit', 'Enviar datos');
        echo form_close();
    
    ?>

    <?= isset($msg) ? $msg : '' ?>
</body>
</html>