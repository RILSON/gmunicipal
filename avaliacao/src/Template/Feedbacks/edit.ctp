<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $feedback->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Feedbacks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prioridade Acoes'), ['controller' => 'PrioridadeAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prioridade Aco'), ['controller' => 'PrioridadeAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feedbacks form large-9 medium-8 columns content">
    <?= $this->Form->create($feedback) ?>
    <fieldset>
        <legend><?= __('Edit Feedback') ?></legend>
        <?php
            echo $this->Form->input('media_avaliacao_id', ['options' => $mediaAvaliacoes]);
            echo $this->Form->input('descricao');
            echo $this->Form->input('prioridade_acao_id', ['options' => $prioridadeAcoes]);
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
