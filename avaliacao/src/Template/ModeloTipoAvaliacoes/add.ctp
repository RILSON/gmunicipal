<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Modelo Tipo Avaliacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Modelo Avaliacoes'), ['controller' => 'ModeloAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo Avaliaco'), ['controller' => 'ModeloAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Avaliacoes'), ['controller' => 'TipoAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Avaliaco'), ['controller' => 'TipoAvaliacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modeloTipoAvaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($modeloTipoAvaliaco) ?>
    <fieldset>
        <legend><?= __('Add Modelo Tipo Avaliaco') ?></legend>
        <?php
            echo $this->Form->input('modelo_avaliacao_id', ['options' => $modeloAvaliacoes]);
            echo $this->Form->input('tipo_avaliacao_id', ['options' => $tipoAvaliacoes]);
            echo $this->Form->input('peso_sugerido');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
