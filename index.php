<?php
// sono un commento
# sono un commento


/*
Sono un 
commento
su piu righe
*/

$nome = 'Gaetano';
$cognome = 'Frascolla';
$eta = $_GET['eta'];

var_dump($_GET);

// $prova = ['eta' => 23];


// {
//     eta: 23
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Ciao mi chiamo <?php echo $nome; ?> <?php echo $cognome; ?></h1>
    <p>Si, il cognome è <?php echo $cognome; ?></p>
    <p><?php echo 'Ciao Sono una stringa'; ?></p>
    <p><?php echo 2; ?></p>
    <p>Etè: <?php echo $eta; ?></p>
    <p>Sesso: <?php echo $_GET['sesso']; ?></p>
    <p>Lunghezza Cognome: <?php echo strlen($cognome); ?></p>
    <p>Maiuscolo: <?php echo ucwords('prova minuscolo'); ?>
        <!-- Ciao -->
        <!-- Ciao 2 -->
    <form action="saluta.php" method="POST">
        <input type="text" name="pollo">
        <button>Invia</button>
    </form>
</body>

</html>