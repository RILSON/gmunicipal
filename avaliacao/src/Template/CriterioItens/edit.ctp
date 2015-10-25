<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $criterioIten->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $criterioIten->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Criterio Itens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterioItens form large-9 medium-8 columns content">
    <?= $this->Form->create($criterioIten) ?>
    <fieldset>
        <legend><?= __('Edit Criterio Iten') ?></legend>
        <?php
            echo $this->Form->input('criterio_id', ['options' => $criterios]);
            echo $this->Form->input('criterio_pontuacao_id', ['options' => $criterioPontuacoes, 'empty' => true]);
            echo $this->Form->input('pontuacao');
            echo $this->Form->input('avaliacao_avaliador_id', ['options' => $avaliacaoAvaliadores]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
