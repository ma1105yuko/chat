<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login|chat</title>
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <?= $this->Html->css('chat') ?>
    <?= $this->Html->css('flashmessage') ?>
</head>
<body id="login">
<?= $this->Flash->render() ?>
    <div class="box inner">
        <h1>Welcome<br>Variableavalanchezueha</h1>
        <!-- <form>
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="submit" value="LOG IN"/>
        </form> -->
        <?= $this->Form->create() ?>
        <?= $this->Form->control('username', ['label' => '', 'placeholder' => 'name']) ?>
        <?= $this->Form->control('password', ['label' => '', 'placeholder' => 'password']) ?>
        <?= $this->Form->submit('LOG IN') ?>
        <?= $this->Form->end() ?>

        <div class="signup">
          <?= $this->Html->link(__('Create Variableavalanchezueha account→'), [
            'controller' => 'Users',
            'action' => 'add'
          ])
          ?>
        </div>
    </div><!--box fin-->
</body>
</html>
