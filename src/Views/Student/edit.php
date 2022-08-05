<section class="p-8">
  <div class="mx-auto flex w-2/4 justify-between items-center">
    <h1 class="text-2xl pb-8">Eleve n°<?= $data['id_etudiant'] ?></h1>
    <h2 class="text-3xl pb-8"><?= $data['prenom'] ?> <?= $data['nom'] ?></h2>
  </div>

  <form action=""></form>
  <form action="/students/edit/<?= $data['id_etudiant'] ?>" method="post" class="w-2/5 h-[50vh] mx-auto bg-white px-8 rounded-lg">
    <h1 class="title py-8">Modifier ou supprimer un élève</h1>
    <fieldset class="flex my-8 p-4 items-center">
      <label class="w-[200px] px-8 block">Changer prenom</label>
      <input name="prenom" type="text" value="<?= $data['prenom'] ?>" class="input">
    </fieldset>
    <fieldset class="flex my-8 p-4 items-center">
      <label class="w-[200px] px-8 block">Changer nom</label>
      <input name="nom" type="text" value="<?= $data['nom'] ?>" class="input">
    </fieldset>

    <fieldset class="w-full flex justify-around items-center">
      <button type="submit" class="button">Editer</button>
      <a href="/students/delete/<?= $data['id_etudiant'] ?>" class="button">Supprimer</a>
    </fieldset>
  </form>
</section>