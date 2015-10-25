<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Status Avaliacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="statusAvaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($statusAvaliaco) ?>
    <fieldset>
        <legend><?= __('Add Status Avaliaco') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
