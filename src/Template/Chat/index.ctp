<!DOCTYPE html>
<html lang="ja">

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>chat</title>
  <?= $this->Html->css('chat') ?>
  <?= $this->Html->css('flashmessage') ?>
  <?= $this->Html->css('paginator') ?>
</head>

<body id="chat">
  <header>
    <h1>Variableavalanchezueha Room</h1>
    <p>logged in: <?= h($authuser['username']) ?></p>
  </header>

  <main class="inner">
  <?php foreach ($chatMessages as $chatMessage) : ?>
    <?php if ($chatMessage->user->id === $authuser['id']) : ?>
      <div class="chatmessage my-message">
    <?php else : ?>
      <div class="chatmessage other-message">
    <?php endif; ?>
        <span class="login-user"><?= h($chatMessage->user->username) ?></span>
        <div class="text"><?= h($chatMessage->message) ?></div>
        <span class="time"><?= h($chatMessage->created->i18nFormat('HH:mm')) ?></span>
      </div>
  <?php endforeach; ?>

    <div class="message-form">
      <?= $this->Form->create('message') ?>
      <?= $this->Form->control('message', [
          'label' => false,
      ]) ?>
      <?= $this->Form->submit('post') ?>
      <?= $this->Form->end() ?>
    </div>

    <div class="paginator">
      <ul class="pagination">
        <?= $this->Paginator->first(' |<<') ?>
        <?= $this->Paginator->prev(' <') ?>
        <?= $this->Paginator->next('> ') ?>
        <?= $this->Paginator->last('>>| ') ?>
      </ul>
    </div>
  </main>
</body>

</html>
