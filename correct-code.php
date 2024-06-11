<?php

/*
 * Правильный ответ можно посмотреть ниже.
 */
?>


















<ul>
    <?php foreach ($users as $user) : ?>
        <li style="margin-bottom: 25px; list-style: none">
            <strong>Name:</strong> <?php echo $user['name']; ?><br>
            <strong>Email:</strong> <?php echo $user['email']; ?><br>
            <?php if (array_key_exists('age', $user)) : ?>
                <strong>Age:</strong> <?php echo $user['age']; ?><br>
            <?php else : ?>
                <em>Age not found</em><br>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>