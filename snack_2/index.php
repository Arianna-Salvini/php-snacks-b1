<?php
$name = $_GET["name"];
$email = $_GET["email"];
$age = $_GET["age"];

$messageValidation = '';

if (strlen($name)>3 && strpos($email, '.') !== false && strpos($email, '@') !== false && is_numeric($age))  {
     $messageValidation = 'Acesso riuscito';
} else{
     $messageValidation = 'Acesso negato';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
    <form action="" method="get">
        <input type="text" name="name" id="name" placeholder="Inserisci il nome">
        <input type="email" name="email" id="email" placeholder="Inserisci la tua email">
        <input type="number" name="age" id="age" placeholder="Inserisci la tua età">
        <button type="submit">Invia</button>
    </form> 
    <!-- /form -->

    <h3 class="message_validation">
        <?php echo $messageValidation;  ?>
    </h3>
    <!-- /.message_validation -->

</body>
</html>