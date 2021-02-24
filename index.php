<?php
$nome = 'Papaya';
$testo = 'Beh Shinji, io non posso fare altro che starmene qui ad annaffiare. Però quanto a te,
quanto quel che non puoi fare per tu per te qualcosa da poter fare potrebbe esserci.
Ma non ti costringerà nessuno; pensa da te stesso,
decidi da te stesso che cosa tu stesso debba fare, beh che tu non abbia rammarichi';
$lunghezza = strlen($testo);
$badword = $_GET['parola'];
$testoVariato = str_replace('te', 'TE', $testo);
$testoCensurato =str_replace($badword, '***', $testo);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>

  <h1>Ciao mi chiamo <?php echo $nome ?> e ho scelto questo paragrafo:</h1>
  <p><?php echo $testo ?></p>
  <h4>Il testo originale è lungo <?php echo $lunghezza ?> caratteri</h4>

  <h2>Testo variato</h2>
  <p><?php echo $testoVariato ?></p>
  
  <h2>Testo censurato</h2>
  <p><?php echo $testoCensurato ?></p>



</body>
</html>
