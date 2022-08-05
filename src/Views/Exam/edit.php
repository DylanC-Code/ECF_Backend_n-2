<h1>Note n°<?= $data['id'] ?></h1>
<p><?php if (isset($data['error'])) echo $data['error'] ?></p>
<form action="/exams/edit/<?= $data['id'] ?>" method="post" class="w-2/4 mx-auto bg-white h-[30vh] px-8 flex justify-between flex-wrap">
  <fieldset class="flex my-8 border-2 border-black w-2/4 h-[12vh] p-4">
    <legend class="w-[200px] px-8">Changer la matiere</legend>
    <select name="matiere" value="<?= $data['matiere'] ?>">Changer matière
      <option value="Histoire-Geographie" <?php if ($data['matiere'] == 'Histoire-Geographie') echo 'selected' ?>>Histoire-Geographie</option>
      <option value="Mathématiques" <?php if ($data['matiere'] == 'Mathématiques') echo 'selected' ?>>Mathématiques</option>
    </select>
  </fieldset>

  <fieldset class="flex my-8 border-2 border-black w-1/4 p-4 h-[12vh]">
    <legend class="block w-[200px] px-8">Mofidier la note</legend>
    <input type="number" name="note" step="0.01" value="<?= $data['note'] ?>">
  </fieldset>

  <fieldset class="w-full flex justify-around">
    <button type="submit" class="">Modifier</button>
    <a href="/exams/delete/<?= $data['id'] ?>">Supprimer</a>
  </fieldset>
</form>