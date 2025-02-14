<?php
require_once __DIR__ . '/../../app/services/UserService.php';
?>

<?php require_once __DIR__ . '/../common/header.php'; ?>

<div class="title-container">
    <h1><?= $translations['register_user']; ?></h1>
</div>
<div class="content">
    <form class="box" id="registerForm" action="actions/register_user.php" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <select name="user_group" class="user_group">
            <option value="5"><?= $translations['group_5']; ?></option>
            <option value="6"><?= $translations['group_6']; ?></option>
            <option value="7"><?= $translations['group_7']; ?></option>
            <option value="teacher"><?= $translations['teacher']; ?></option>
        </select>
        <button type="submit"><?= $translations['register']; ?></button>
    </form>
    <div id="registerMessage"></div>
</div>
<div class="secondaryContainer">
    <span><?= $translations['or']; ?></span>
    <a href="./login.php"><?= $translations['login']; ?></a>
</div>

<?php require_once __DIR__ . '/../common/footer.php'; ?>