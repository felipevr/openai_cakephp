<!-- add.ctp (dentro do diretório 'templates/Users') -->

<h1>Add User</h1>

<?= $this->Form->create($user) ?>
<?= $this->Form->control('username') ?>
<?= $this->Form->control('email') ?>
<?= $this->Form->control('password') ?>
<?= $this->Form->button('Submit') ?>
<?= $this->Form->end() ?>
