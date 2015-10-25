<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Itens'), ['controller' => 'CriterioItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Iten'), ['controller' => 'CriterioItens', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterios index large-9 medium-8 columns content">
    <h3><?= __('Criterios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('grupo_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($criterios as $criterio): ?>
            <tr>
                <td><?= $this->Number->format($criterio->id) ?></td>
                <td><?= $criterio->has('grupo') ? $this->Html->link($criterio->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $criterio->grupo->id]) : '' ?></td>
                <td><?= h($criterio->nome) ?></td>
                <td><?= h($criterio->created) ?></td>
                <td><?= h($criterio->modified) ?></td>
                <td><?= h($criterio->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $criterio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $criterio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $criterio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterio->id)]) ?>
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
