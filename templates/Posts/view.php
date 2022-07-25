<h1>Titulo: <?= $post->title ?></h1>
<p> <?= $post->body ?> </p>
<?=  $this->Html->image($post['imagem'], ['alt' => 'teste']); ?>

<?= $this->Form->postLink('Excluir', ['action' => 'delete', $post->id], ['confirm' => 'Deseja realmente excluir o post?', 'class' => 'btn btn-danger pull-right']) ?>

<?= $this->Html->link('Editar post', ['action' => '/edit', $post->id, 'class' => 'btn btn-primary']) ?>
