

<!-- CONTENT -->
<?php

if (isset($name) && isset($age) && isset($avatar)): ?>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Welcome, <?= esc($name) ?>!</h1>
        <p>Age: <?= esc($age) ?></p>
        <img src="<?= esc($avatar) ?>" alt="Avatar of <?= esc($name) ?>" style="border-radius: 50%; width: 200px; height: 200px;">
    </div>
<?php else: ?>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Welcome to CodeIgniter 4!</h1>
        <p>This is the default welcome page.</p>
    </div>
<?php endif; ?>