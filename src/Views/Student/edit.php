<section>
  <h1>Modifier ou supprimer</h1>
  <div class="mx-auto my-8 flex w-2/4 justify-between items-center">
    <h1 class="text-2xl">Eleve n°<?= $data['id_etudiant'] ?></h1>
    <h2 class="text-3xl"><?= $data['prenom'] ?> <?= $data['nom'] ?></h2>
  </div>

  <form action="/students/edit/:id" method="post">
    <fieldset>
      <legend>Changer prenom</legend>
      <input type="text" value="<?= $data['prenom'] ?>">
    </fieldset>
    <fieldset>
      <legend>Changer nom</legend>
      <input type="text" value="<?= $data['nom'] ?>">
    </fieldset>

    <fieldset>
      <button type="submit">Editer</button>
      <a href="/students/delete/<?= $data['id_etudiant'] ?>">Supprimer</a>
    </fieldset>
  </form>
</section>