<h3>Criar Post</h3>
<?= $this->Form->create($post); ?>
    <label>Título</label>
    <?= $this->Form->input('title', array(
        'label' => 'Título do post',
        'class' => 'form-control'
    )); ?>
    <label>Texto</label>
    <?= $this->Form->input('body', array(
        'type' => 'textarea',
        'escape' => false,
        'class' => 'form-control'
    )); ?>
    <label>Categoria</label>
    <?= $this->Form->input('category', array(
        'type' => 'select',
        'class' => 'form-control',
        'empty' => 'Escolha um',
        'options' => ['Opc 1', 'Opc 2', 'Opc 3']
    )); ?>
    <label>Autor</label>
    <?= $this->Form->input('author', array(
        'class' => 'form-control'
    )) ?>
    <hr>
    <?= $this->Form->submit('Salvar', array('class' => 'btn btn-primary')) ?>
<?= $this->Form->end(); ?>