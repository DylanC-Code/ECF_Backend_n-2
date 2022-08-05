  <section class="py-8">
    <table class="w-2/3 mx-auto rounded-lg">
      <thead class="text-white text-left h-[60px] text-lg tracking-widest">
        <tr class="bg-[#36304a]">
          <th class="rounded-tl-lg pl-8 py-1">Nom</th>
          <th class="pl-8 py-1">Prenom</th>
          <th class="pl-8 py-1">Moyenne</th>
          <th class="rounded-tr-lg pl-8 py-1 text-center" colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php foreach ($data['result'] as $key => $student) {
          if ($student) { ?>
            <tr class="h-[60px] <?= $key % 2 !== 0 ? 'bg-[#808080]/20' : 'bg-[#f5f5f5] hover:bg-[#808080]/20' ?>">
              <td class="pl-8 py-1"><?= $student['nom'] ?></td>
              <td class="pl-8 py-1"><?= $student['prenom'] ?></td>
              <td class="pl-14 py-1"><?= $student['avg'] ?></td>
              <td class="pl-8 py-1"><a href="/students/show/<?= $student['id'] ?>" class='block w-2/3 text-center bg-green-200 rounded-lg'>Show</a></td>
              <td class="pl-8 py-1"><a href="/students/edit/<?= $student['id'] ?>" class='block w-2/3 text-center bg-purple-400 rounded-lg'>Edit</a></td>
            </tr>
        <?php }
        } ?>
      </tbody>
    </table>

    <div class="flex justify-between w-2/3 mx-auto my-8">
      <?php if ($data['page']['l']) : ?>
        <a href="<?= $_SERVER['REDIRECT_URL'] ?>?page=<?= $page['index'] - 1 ?>" class="border-[1px] border-[#36304a] rounded-lg bg-[#36304a] w-[50px] h-[50px] flex justify-center items-center"><img class="w-[30px] h-[30px] rotate-180" src="/src/Public/assets/static/arrow.svg" alt="arrow for next page"></a>
      <?php endif;
      if ($data['page']['r']) : ?>
        <a href="<?= $_SERVER['REDIRECT_URL'] ?>?page=<?= $page['index'] + 1 ?>" class="ml-auto border-[1px] border-[#36304a] rounded-lg bg-[#36304a] w-[50px] h-[50px] flex justify-center items-center"><img class="w-[30px] h-[30px]" src="/src/Public/assets/static/arrow.svg" alt="arrow for previous page"></a>
      <?php endif ?>
    </div>
  </section>