<?php require('partials/head.php'); ?>
<?php require('partials/nav.php'); ?>

<h1>My TodoList</h1>

<ul>
    <?php foreach ($tasks as $task) : ?>
        <li>
            <?php if ($task->isComplete()) : ?>
                <strike> <?= $task->description; ?> </strike>
            <?php else : ?>
                <?= $task->description; ?>
            <?php endif; ?>
        </li>
    <?php endforeach; ?>
</ul>

<form action="tasks" method="POST">
    <textarea name="description" id="description" cols="50" rows="3" required></textarea>
    <button type="submit">Submit</button>
</form>

<?php require('partials/footer.php'); ?>