<!DOCTYPE html>
<html lang="ja">

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>signup|chat</title>
  <?= $this->Html->css('chat') ?>
</head>

<body id="signup">
  <div class="box inner">
    <h1>Create<br>Variableavalanchezueha account</h1>

    <?= $this->Form->create($user) ?>
    <?php
      echo $this->Form->control('username', [
          'label' => false,
          'placeholder' => 'name',
      ]);
      echo $this->Form->control('password', [
          'label' => false,
          'placeholder' => 'password',
      ]);
    ?>
    <?= $this->Form->submit(__('SIGN UP')) ?>
    <?= $this->Form->end() ?>
  </div>
</body>
