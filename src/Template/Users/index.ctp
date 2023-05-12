<!-- index.ctp (dentro do diretório 'templates/Users') -->

<h1>List of Users</h1>

<table>
    <tr>
        <th>Username</th>
        <th>Email</th>
        <th>Created</th>
        <th>Modified</th>
    </tr>
    <?php foreach ($users as $user): ?>
        <tr>
            <td><?= $user->username ?></td>
            <td><?= $user->email ?></td>
            <td><?= $user->created->format('Y-m-d H:i:s') ?></td>
            <td><?= $user->modified->format('Y-m-d H:i:s') ?></td>
        </tr>
    <?php endforeach; ?>
</table>
