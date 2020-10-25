<!DOCTYPE html>
<html lang="en">
  <?php include('header.inc.php'); ?>

  <body>
  <h1><?= $message ?></h1>
  <?php foreach ($notes as $note) { ?>
    <p>
      <?= $note->id ?>,
      <?= $note->title ?>
    </p>
  <?php } ?>

  <?php include('footer.inc.php'); ?>

  </body>
</html>