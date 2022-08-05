<section>
  <div class="mx-auto my-10 flex w-2/3 py-4 px-12 justify-between items-center bg-white/50 rounded-lg">
    <h1 class="text-3xl">Eleve n°<?= $data['id_etudiant'] ?></h1>
    <h2 class="text-3xl"><?= $data['prenom'] ?> <?= $data['nom'] ?></h2>
    <a href="/students/edit/<?= $data['id_etudiant'] ?>" class="block bg-[#36304a] w-[120px] text-center py-1 rounded-xl font-medium text-white">Edit</a>
  </div>

  <table class="w-2/3 mx-auto rounded-lg">
    <thead class="text-white text-left h-[60px] text-lg tracking-widest">
      <tr class="bg-[#36304a]">
        <th class="rounded-tl-lg pl-8 py-1">Matiere</th>
        <th class="pl-8 py-1">Note</th>
        <th class="rounded-tr-lg pl-8 py-1 text-center">Action</th>
      </tr>
    </thead>
    <tbody class="bg-white">
      <?php foreach ($data['matieres'] as $key => $value) { ?>
        <tr class="h-[60px] <?= $key % 2 !== 0 ? 'bg-[#808080]/20' : 'bg-[#f5f5f5] hover:bg-[#808080]/20' ?>">
          <td class="pl-8 py-1"><?= $value ?></td>
          <td class="pl-8 py-1"><?= $data['notes'][$key] ?></td>
          <td class="pl-8 py-1"><a href="/exams/edit/<?= $data['ids'][$key] ?>" class='block w-2/3 text-center bg-purple-400 rounded-lg'>Edit</a></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</section>