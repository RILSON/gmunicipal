<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $tipoCompetencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $tipoCompetencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Tipo Competencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoCompetencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoCompetencia) ?>
    <fieldset>
        <legend><?= __('Edit Tipo Competencia') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('flag_generica');
            echo $this->Form->input('flag_gerencial');
            echo $this->Form->input('flag_especifica');
            echo $this->Form->input('ordenacao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
