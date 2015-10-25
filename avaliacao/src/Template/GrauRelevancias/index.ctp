<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grau Relevancia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grauRelevancias index large-9 medium-8 columns content">
    <h3><?= __('Grau Relevancias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('peso') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grauRelevancias as $grauRelevancia): ?>
            <tr>
                <td><?= $this->Number->format($grauRelevancia->id) ?></td>
                <td><?= h($grauRelevancia->descricao) ?></td>
                <td><?= $this->Number->format($grauRelevancia->peso) ?></td>
                <td><?= h($grauRelevancia->created) ?></td>
                <td><?= h($grauRelevancia->modified) ?></td>
                <td><?= h($grauRelevancia->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grauRelevancia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grauRelevancia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grauRelevancia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grauRelevancia->id)]) ?>
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
