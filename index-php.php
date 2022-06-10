<?php
require __DIR__ . "/database.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AjaxDischi</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>

  <header>
    <div class="header-container">
      <div class="logo-container">
        <img src="img/spotify-logo.png" alt="SpotifyLogo" />
      </div>
    </div>
  </header>

  <main>
    <div class="cards-container">
      <?php foreach($database as $card) { ?>
      <div class="card-container">
        <div class="img-container">
          <img src="<?php echo $card["poster"] ?>" alt="" />
        </div>
        <h2><?php echo $card["title"] ?></h2>
        <h4><?php echo $card["author"] ?></h4>
        <h4><?php echo $card["year"] ?></h4>
      </div>
      <?php } ?>
    </div>
  </main>
</body>
</html>