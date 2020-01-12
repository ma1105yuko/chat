<!DOCTYPE html>
<html lang="ja">

<head>
  <?= $this->Html->charset() ?>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>signup|chat</title>
  <?= $this->Html->css('chat') ?>
  <?= $this->Html->css('flashmessage') ?>
  <?= $this->Html->css('paginator') ?>
</head>

<body>
  <?php foreach ($chatMessages as $chatMessage) : ?>
    <div style="width: max-content;margin: 4px; background: pink;">
      <p style="display: inline-block; padding: 0 16px;">username: <?= h($chatMessage->user->username) ?></p>
      <p style="display: inline-block; padding: 0 16px;">message: <?= h($chatMessage->message) ?></p>
      <p style="display: inline-block; padding: 0 16px;">created: <?= h($chatMessage->created->i18nFormat('yyyy-MM-dd HH:mm:ss')) ?></p>
    </div>
  <?php endforeach; ?>

  <div class="paginator">
    <ul class="pagination">
      <?= $this->Paginator->first(' |<<') ?>
      <?= $this->Paginator->prev(' <') ?>
      <?= $this->Paginator->next('> ') ?>
      <?= $this->Paginator->last('>>| ') ?>
    </ul>
  </div>
</body>

</html>
