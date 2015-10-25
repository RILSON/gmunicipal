<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Prioridade Aco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="prioridadeAcoes index large-9 medium-8 columns content">
    <h3><?= __('Prioridade Acoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('ordenacao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prioridadeAcoes as $prioridadeAco): ?>
            <tr>
                <td><?= $this->Number->format($prioridadeAco->id) ?></td>
                <td><?= h($prioridadeAco->descricao) ?></td>
                <td><?= $this->Number->format($prioridadeAco->ordenacao) ?></td>
                <td><?= h($prioridadeAco->created) ?></td>
                <td><?= h($prioridadeAco->modified) ?></td>
                <td><?= h($prioridadeAco->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $prioridadeAco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $prioridadeAco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $prioridadeAco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $prioridadeAco->id)]) ?>
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
