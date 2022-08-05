<section>

  <div class="mx-auto my-8 flex w-2/4 justify-between items-center">
    <h1 class="text-2xl">Eleve n°<?= $data['id_etudiant'] ?></h1>
    <h2 class="text-3xl"><?= $data['prenom'] ?> <?= $data['nom'] ?></h2>
  </div>

  <form action=""></form>
  <form action="/students/edit/<?= $data['id_etudiant'] ?>" method="post" class="bg-white w1/3 mx-auto">
    <h1 class="title">Modifier ou supprimer un élève</h1>
    <fieldset>
      <legend>Changer prenom</legend>
      <input name="prenom" type="text" value="<?= $data['prenom'] ?>">
    </fieldset>
    <fieldset>
      <legend>Changer nom</legend>
      <input name="nom" type="text" value="<?= $data['nom'] ?>">
    </fieldset>

    <fieldset>
      <button type="submit" class="button">Editer</button>
      <a href="/students/delete/<?= $data['id_etudiant'] ?>" class="button">Supprimer</a>
    </fieldset>
  </form>
</section>