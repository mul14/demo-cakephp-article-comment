<?php foreach ($articles as $article): ?>

    <h2><?php echo $this->Html->link($article['Article']['title'], array('action' => 'view', $article['Article']['id'])) ?></h2>
    
    <p><?php echo $article['Article']['content'] ?></p>

    <h3>Comments</h3>
    <?php foreach ($article['Comment'] as $comments): ?>
    
        <p>
            <strong><?php echo $comments['name'] ?>: </strong>
            <?php echo $comments['message'] ?>
        </p>
    
    <?php endforeach; ?>

<?php endforeach; ?>