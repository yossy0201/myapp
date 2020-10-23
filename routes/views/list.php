<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
    <h3>Add Person</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php
        echo $this->Form->input('name');
        echo $this->Form->input('age');
        echo $this->Form->input('mail');
    ?>
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->Form->end() ?>
</body>
</html>