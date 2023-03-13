<?php 
include __DIR__ . "./functions.php";

$lenght = $_GET['lenght'];
$safe_password = create_password($lenght);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generate</title>
</head>
<body>
    
<form method="get">
    <input type="number" name="lenght" id="lenght">
    <button>INVIA</button>
    <?php if(!empty($safe_password)) :?>
      <div>
        <h2>La password generata è: <?=$safe_password?></h2>
      </div>
    <?php endif ?>
</form>

</body>
</html>