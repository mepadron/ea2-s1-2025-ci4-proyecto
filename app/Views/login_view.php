<form action="/login/loginValid" method="post">
    <?= csrf_field() ?>

    <label for="login">Login</label>
    <input type="input" name="login">
    <br>

    <label for="pass">Clave</label>
    <input type="password" name="clave">

    <br>

    <input type="submit" name="submit" value="Entrar al sistema">
</form>

<?php

if (isset($name)) {
    print_r($name);
}

?>