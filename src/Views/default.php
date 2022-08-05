<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/src/Public/assets/css/output.css">
  <title>ECF Backend_n°2 Dylan</title>
</head>

<body class="bg-gradient-to-bl from-[#c850c0] to-[#4158d0]">
  <header class="h-[15vh] text-center bg-[#36304a]/70">
    <a href="/students" class="absolute top-10 left-10"><img class="w-[50px] h-[50px]" src="/src/Public/assets/static/home.svg" alt="home"></a>
    <h1 class="py-6 text-4xl text-white">Accueil de gestion des élèves et des notes</h1>
    <form action="/students/search" method="post" class="flex justify-center items-center">
      <input type="text" name="name" class="block rounded-l-lg w-1/5 bg-[#36304a] p-2 pl-4 text-white" placeholder="Chercher un élève">
      <button type="submit" class="w-[40px] h-[40px] block p-2 rounded-r-lg bg-[#36304a]"><img src="/src/Public/assets/static/search.svg" alt="f4"></button>
      </nav>
  </header>

  <main class="min-h-[80vh]">
    <?= $content ?>
  </main>

  <footer class="h-[5vh]">
    <p class="text-center">Dylan CASTOR PROMO-105-ANNECY</p>
  </footer>
</body>

</html>