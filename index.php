<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        nombre de usuario <input type="text" name="txtNombre">
        <select name="selIdioma">
            <option value="" selected disabled hidden>Escoge un idioma</option>
            <option value="1">Español</option>
            <option value="2">Ingles</option>
            <option value="3">Portugués</option>
            <option value="4">Italiano</option>
        </select>
        <br>
        <button type="submit" name="saludar">Mostrar saludo</button>
    </form>
    <br>
    <br>
    <div>
        <?php
            if (isset($_POST['saludar'])) {
                $nombre = $_POST['txtNombre'];
                $idioma = $_POST['selIdioma'];

                if ($idioma == '1') {
                    $msg = 'Hola ' . $nombre;
                }
                elseif ($idioma == '2') {
                    $msg = 'Hello ' . $nombre;
                }
                elseif ($idioma == '3') {
                    $msg = 'Olá ' . $nombre;
                }
                elseif ($idioma == '4') {
                    $msg = 'Ciao ' . $nombre;
                }else{
                    $msg = 'Seleccione un idioma';
                }

                ?>
                <div>
                    <?php 
                        /* echo $msg; */
                    ?>
                </div>
                <?php
                }
                ?>
    </div>
</body>

</html>