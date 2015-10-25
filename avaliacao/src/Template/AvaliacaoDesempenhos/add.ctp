<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Status Avaliacoes'), ['controller' => 'StatusAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status Avaliaco'), ['controller' => 'StatusAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoDesempenhos form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliacaoDesempenho) ?>
    <fieldset>
        <legend><?= __('Add Avaliacao Desempenho') ?></legend>
        <?php
            echo $this->Form->input('status_avaliacao_id', ['options' => $statusAvaliacoes, 'empty' => true]);
            echo $this->Form->input('descricao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
