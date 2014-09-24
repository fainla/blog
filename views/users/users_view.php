<h1>User '<?=$user['username'] ?>'</h1>
<table>
    <tr>
        <th>Username</th>
        <td><?= $user['username'] ?></td>
    </tr>
    <tr>
        <th>Password</th>
        <td><?= $user['password'] ?></td>
    </tr>
    <tr>
        <th>Active</th>
        <td><?= $user['active'] ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $user['email'] ?></td>
    </tr>
</table>
<form action="user/edit/<?= $users['user_id']?>">
    <button class="btn btn-info">
        Edit <?=$user ['username'] ?>
    </button>
</form>