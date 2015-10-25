<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Feedback'), ['action' => 'edit', $feedback->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Feedback'), ['action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Feedbacks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Feedback'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Prioridade Acoes'), ['controller' => 'PrioridadeAcoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Prioridade Aco'), ['controller' => 'PrioridadeAcoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="feedbacks view large-9 medium-8 columns content">
    <h3><?= h($feedback->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Media Avaliaco') ?></th>
            <td><?= $feedback->has('media_avaliaco') ? $this->Html->link($feedback->media_avaliaco->id, ['controller' => 'MediaAvaliacoes', 'action' => 'view', $feedback->media_avaliaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($feedback->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Prioridade Aco') ?></th>
            <td><?= $feedback->has('prioridade_aco') ? $this->Html->link($feedback->prioridade_aco->id, ['controller' => 'PrioridadeAcoes', 'action' => 'view', $feedback->prioridade_aco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($feedback->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($feedback->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($feedback->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $feedback->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
