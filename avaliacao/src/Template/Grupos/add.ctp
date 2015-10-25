<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grupos form large-9 medium-8 columns content">
    <?= $this->Form->create($grupo) ?>
    <fieldset>
        <legend><?= __('Add Grupo') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('flag_estrategico');
            echo $this->Form->input('flag_tatico');
            echo $this->Form->input('flag_operacional');
            echo $this->Form->input('peso_generica');
            echo $this->Form->input('peso_gerencial');
            echo $this->Form->input('peso_especifica');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
