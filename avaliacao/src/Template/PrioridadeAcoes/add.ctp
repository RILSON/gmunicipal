<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Prioridade Acoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="prioridadeAcoes form large-9 medium-8 columns content">
    <?= $this->Form->create($prioridadeAco) ?>
    <fieldset>
        <legend><?= __('Add Prioridade Aco') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('ordenacao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
