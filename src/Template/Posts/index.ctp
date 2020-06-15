<?php foreach ($posts as $post) : ?>
    <div class="well">

        <h4><?= $post['title'] ?></h4>
        <small><strong><?= $post['created']->format(DATE_RFC850); ?></strong></small>
        <br><br>
        <?= $this->Text->truncate($post['body'], 198, ['ellipsis' => '...', 'exact' => false]); ?>
        <br>
        <?= $this->Html->link('Read more','/posts/'.$post['id']) ?>

    </div>
<?php endforeach; ?>