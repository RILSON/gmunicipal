<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $modeloAvaliaco->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $modeloAvaliaco->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Modelo Avaliacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="modeloAvaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($modeloAvaliaco) ?>
    <fieldset>
        <legend><?= __('Edit Modelo Avaliaco') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('flag_360');
            echo $this->Form->input('flag_270');
            echo $this->Form->input('flag_180');
            echo $this->Form->input('flag_por_comite');
            echo $this->Form->input('flag_top_down');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
