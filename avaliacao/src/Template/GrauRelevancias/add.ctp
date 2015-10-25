<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Grau Relevancias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grauRelevancias form large-9 medium-8 columns content">
    <?= $this->Form->create($grauRelevancia) ?>
    <fieldset>
        <legend><?= __('Add Grau Relevancia') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('peso');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
