<h2><?php echo $article['Article']['title'] ?></h2>

<p><?php echo $article['Article']['content'] ?></p>

<h3>Comments</h3>
<?php foreach ($article['Comment'] as $comments): ?>

    <p>
        <strong><?php echo $comments['name'] ?>: </strong>
        <?php echo $comments['message'] ?>
    </p>

<?php endforeach; ?>