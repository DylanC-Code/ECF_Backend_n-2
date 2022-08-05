<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/src/Public/assets/css/output.css">
  <title>ECF Backend_n°2 Dylan</title>
</head>

<body class="bg-sky-100">
  <header class="h-[10vh]">
    <nav class="flex">
      <h1>Rechercher un eleve par son nom ou son prenom</h1>
      <form action="/students/search" method="post">
        <input type="text" name="name">
        <button type="submit">Chercher</button>
      </form>
    </nav>
  </header>

  <main class="min-h-[80vh] mb-8">
    <?= $content ?>
  </main>

  <footer class="h-[10vh]">
    <p class="text-red-500 text-center">Dylan CASTOR PROMO-105-ANNECY</p>
  </footer>
</body>

</html>