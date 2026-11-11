<?php include 'views/layout/header.php'; ?>

<?php foreach ($posts as $post): ?>
    <article>
        <h2><?= htmlspecialchars($post->title) ?></h2>
        <p><?= htmlspecialchars($post->content) ?></p>
        <h6><?= htmlspecialchars($post->createdAt) ?></h6>
    </article>
<?php endforeach; ?>

<?php include 'views/layout/footer.php'; ?>