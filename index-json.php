<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AjaxDischi</title>
  <!-- Style -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
  <!-- Axios -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- VueJs -->
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
</head>
<body>

  <header>
    <div class="header-container">
      <div class="logo-container">
        <img src="img/spotify-logo.png" alt="SpotifyLogo" />
      </div>
    </div>
  </header>

  <main id="app">
    <div class="cards-container">
      <div 
        v-for="card in database" 
        class="card-container"
      >
        <div class="img-container">
          <img :src="card.poster" alt="" />
        </div>
        <h2>{{ card.title }}</h2>
        <h4>{{ card.author }}</h4>
        <h4>{{ card.year }}</h4>
      </div>
    </div>
  </main>

  <script src="./js/script.js"></script>
</body>
</html>