  <section>
    <table class="w-2/3 mx-auto">
      <thead class="bg-indigo-700 text-white text-left">
        <tr class="">
          <th class="rounded-tl-lg pl-8 py-1">Nom</th>
          <th class="pl-8 py-1">Prenom</th>
          <th class="pl-8 py-1">Moyenne</th>
          <th class="rounded-tr-lg pl-8 py-1" colspan="2"></th>
        </tr>
      </thead>
      <tbody class="bg-white">
        <?php foreach ($data as $student) { ?>
          <tr>
            <td class="pl-8 py-1"><?= $student['nom'] ?></td>
            <td class="pl-8 py-1"><?= $student['prenom'] ?></td>
            <td class="pl-8 py-1"><?= $student['avg'] ?></td>
            <td class="pl-8 py-1"><a href="students/show/<?= $student['id'] ?>" class='block w-2/3 text-center bg-green-200 rounded-lg'>Show</a></td>
            <td class="pl-8 py-1"><a href="students/edit/<?= $student['id'] ?>" class='block w-2/3 text-center bg-purple-400 rounded-lg'>Edit</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </section>