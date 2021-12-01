<?php
require_once __DIR__ . "/data/array.php";
require_once __DIR__ . "/components/card.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP-AJAX-DISCHI</title>
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" >
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div class="header-container"></div>
  </header>
  <main>
    <div class="container-main">
      <div class="container">
        <div class="row row-cols-5">
          <?php
          foreach($arrayCard as $user){
            printUserCard($user);
          }
          ?>
        </div>
      </div>
    </div>
  </main>

  
</body>
</html>