<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterioPontuacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($criterioPontuaco) ?>
    <fieldset>
        <legend><?= __('Add Criterio Pontuaco') ?></legend>
        <?php
            echo $this->Form->input('criterio_id', ['options' => $criterios]);
            echo $this->Form->input('descricao');
            echo $this->Form->input('pontuacao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
