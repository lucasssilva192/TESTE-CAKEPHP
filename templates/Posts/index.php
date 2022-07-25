<?php foreach ($posts as $post) { ?>
    <div class="well">
        <h3> <?= $post->title ?> </h3>
        <p> <?= $post->body ?> </p>
        <?= $this->Html->link('Ler mais...', '/posts/' . $post->id) ?>
    </div>
<?php } ?>