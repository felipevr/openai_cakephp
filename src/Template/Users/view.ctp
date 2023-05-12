<!-- view.ctp (dentro do diretório 'templates/Users') -->

<h1>User Details</h1>

<table>
    <tr>
        <th>Username</th>
        <td><?= h($user->username) ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th>Created</th>
        <td><?= h($user->created->format('Y-m-d H:i:s')) ?></td>
    </tr>
    <tr>
        <th>Modified</th>
        <td><?= h($user->modified->format('Y-m-d H:i:s')) ?></td>
    </tr>
</table>
