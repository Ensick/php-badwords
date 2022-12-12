<?php

$cit = 'Tu sei chi scegli e chi cerchi di essere -Cit Hogart (Il Gigante di ferro)';

$fraseCit = $_GET['frase'];

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

<form action="" method="GET">
    <input type="text" name="frase">
    <button type="submit">Invia</button>
</form>

<p><?php echo str_replace($fraseCit,'***',$cit);?> </p>
    
</body>
</html>

