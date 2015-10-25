<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterioPontuacoes index large-9 medium-8 columns content">
    <h3><?= __('Criterio Pontuacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('criterio_id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('pontuacao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($criterioPontuacoes as $criterioPontuaco): ?>
            <tr>
                <td><?= $this->Number->format($criterioPontuaco->id) ?></td>
                <td><?= $criterioPontuaco->has('criterio') ? $this->Html->link($criterioPontuaco->criterio->id, ['controller' => 'Criterios', 'action' => 'view', $criterioPontuaco->criterio->id]) : '' ?></td>
                <td><?= h($criterioPontuaco->descricao) ?></td>
                <td><?= $this->Number->format($criterioPontuaco->pontuacao) ?></td>
                <td><?= h($criterioPontuaco->created) ?></td>
                <td><?= h($criterioPontuaco->modified) ?></td>
                <td><?= h($criterioPontuaco->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $criterioPontuaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $criterioPontuaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $criterioPontuaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioPontuaco->id)]) ?>
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
