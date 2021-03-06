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
    <form method="post">
      <div>
        <img id="search_icon" src="<?= assestsPath("assets/img/search-icon.svg"); ?>" alt="AutoGestor">
        <input type="text" name="search" placeholder="Pesquise por nome ou categoria">
      </div>
    </form>
  </nav>
  <section>
    <table>
      <thead>
        <tr>
          <th>Nome</th>
          <th>Sobrenome</th>
          <th>Categoria</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($clients as $client): ?>
          <tr>
            <td><?= $client->first_name ?></td>
            <td><?= $client->last_name ?></td>
            <td><?= $client->name ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </section>
  <script src="<?= assestsPath('assets/js/main.js')?>"></script>
</body>
</html>