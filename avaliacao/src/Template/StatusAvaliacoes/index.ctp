<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Status Avaliaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="statusAvaliacoes index large-9 medium-8 columns content">
    <h3><?= __('Status Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($statusAvaliacoes as $statusAvaliaco): ?>
            <tr>
                <td><?= $this->Number->format($statusAvaliaco->id) ?></td>
                <td><?= h($statusAvaliaco->descricao) ?></td>
                <td><?= h($statusAvaliaco->created) ?></td>
                <td><?= h($statusAvaliaco->modified) ?></td>
                <td><?= h($statusAvaliaco->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $statusAvaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statusAvaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statusAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusAvaliaco->id)]) ?>
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
