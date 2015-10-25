<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Feedback'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Prioridade Acoes'), ['controller' => 'PrioridadeAcoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Prioridade Aco'), ['controller' => 'PrioridadeAcoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="feedbacks index large-9 medium-8 columns content">
    <h3><?= __('Feedbacks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('media_avaliacao_id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('prioridade_acao_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($feedbacks as $feedback): ?>
            <tr>
                <td><?= $this->Number->format($feedback->id) ?></td>
                <td><?= $feedback->has('media_avaliaco') ? $this->Html->link($feedback->media_avaliaco->id, ['controller' => 'MediaAvaliacoes', 'action' => 'view', $feedback->media_avaliaco->id]) : '' ?></td>
                <td><?= h($feedback->descricao) ?></td>
                <td><?= $feedback->has('prioridade_aco') ? $this->Html->link($feedback->prioridade_aco->id, ['controller' => 'PrioridadeAcoes', 'action' => 'view', $feedback->prioridade_aco->id]) : '' ?></td>
                <td><?= h($feedback->created) ?></td>
                <td><?= h($feedback->modified) ?></td>
                <td><?= h($feedback->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $feedback->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $feedback->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $feedback->id], ['confirm' => __('Are you sure you want to delete # {0}?', $feedback->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
