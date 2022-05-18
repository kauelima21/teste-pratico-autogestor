<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= assestsPath('assets/css/styles.css')?>">
</head>
<body>
  <nav class="menu">
    <div>
      <a href="https://www.autogestor.net/">
        <img src="<?= assestsPath("assets/img/autogestor.svg"); ?>" alt="AutoGestor">
      </a>
    </div>
    <form action="post">
      <div>
        <img id="search_icon" src="<?= assestsPath("assets/img/search-icon.svg"); ?>" alt="AutoGestor">
        <input type="text" placeholder="Pesquise por nome ou categoria">
      </div>
    </form>
  </nav>
  <script src="<?= assestsPath('assets/js/main.js')?>"></script>
</body>
</html>