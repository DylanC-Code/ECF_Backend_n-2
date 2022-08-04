<section>
  <div class="mx-auto my-8 flex w-2/4 justify-between items-center">
    <h1 class="text-2xl">Eleve n°<?= $data['id'] ?></h1>
    <h2 class="text-3xl"><?= $data['prenom'] ?> <?= $data['nom'] ?></h2>
    <a href="/students/edit/<?= $data['id'] ?>" class="block bg-purple-400 w-[120px] text-center py-1 rounded-xl font-medium">Edit</a>
  </div>

  <table class="w-2/3 mx-auto">
    <thead class="bg-indigo-700 text-white text-left">
      <tr>
        <th>Matiere</th>
        <th>Note</th>
        <th></th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php foreach ($data['matieres'] as $key => $value) { ?>
        <tr>
          <td class="pl-8 py-1"><?= $value ?></td>
          <td class="pl-8 py-1"><?= $data['notes'][$key] ?></td>
          <td class="pl-8 py-1"><a href="exams/edit/<?= $data['idexams'][$key] ?>" class='block w-2/3 text-center bg-purple-400 rounded-lg'>Edit</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>