<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Itens'), ['controller' => 'CriterioItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Iten'), ['controller' => 'CriterioItens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterios form large-9 medium-8 columns content">
    <?= $this->Form->create($criterio) ?>
    <fieldset>
        <legend><?= __('Add Criterio') ?></legend>
        <?php
            echo $this->Form->input('grupo_id', ['options' => $grupos]);
            echo $this->Form->input('nome');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
