<?php
require_once_DIR__. "/Models/Movie.php";

$supermario = new Movie('Supermario' , array(new Genre('cartoon')), new Genre('fantasy'), 120, 'tante persone');
var_dump ($supermario);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Movies</title>
</head>
<body>
    <h1>My Movies</h1>
    <h2><?php echo $supermario->get_name(); ?></h2>
    <p>Genre</p>
        <?php echo "Generi: {$supermarion->get_genre_name_as_string()}"; ?>

</body>
</html>