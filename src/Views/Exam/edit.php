<section class="p-8">
  <h1 class="title pb-8">Note n°<?= $data['id'] ?></h1>
  <p><?php if (isset($data['error'])) echo $data['error'] ?></p>

  <form action=""></form>

  <form action="/exams/edit/<?= $data['id'] ?>" method="POST" class="w-2/5 h-[50vh] mx-auto bg-white px-8 rounded-lg">
    <h1 class="title py-8">Modifier ou supprimer l'élève</h1>
    <fieldset class="flex my-8 p-4">
      <label class="w-[200px] px-8 block">Changer la matiere</label>
      <select name="matiere" value="<?= $data['matiere'] ?>" class="block">Changer matière
        <option value="Histoire-Geographie" <?php if ($data['matiere'] == 'Histoire-Geographie') echo 'selected' ?>>Histoire-Geographie</option>
        <option value="Mathématiques" <?php if ($data['matiere'] == 'Mathématiques') echo 'selected' ?>>Mathématiques</option>
      </select>
    </fieldset>

    <fieldset class="flex my-8 p-4">
      <label class="block w-[200px] px-8">Mofidier la note</label>
      <input type="number" name="note" step="0.01" value="<?= $data['note'] ?>" class="block">
    </fieldset>

    <fieldset class="w-full flex justify-around">
      <button type="submit" class="button">Modifier</button>
      <a href="/exams/delete/<?= $data['id'] ?>" class="button">Supprimer</a>
    </fieldset>
  </form>
</section>