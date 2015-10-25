<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Modelo Avaliaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modeloAvaliacoes index large-9 medium-8 columns content">
    <h3><?= __('Modelo Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('flag_360') ?></th>
                <th><?= $this->Paginator->sort('flag_270') ?></th>
                <th><?= $this->Paginator->sort('flag_180') ?></th>
                <th><?= $this->Paginator->sort('flag_por_comite') ?></th>
                <th><?= $this->Paginator->sort('flag_top_down') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modeloAvaliacoes as $modeloAvaliaco): ?>
            <tr>
                <td><?= $this->Number->format($modeloAvaliaco->id) ?></td>
                <td><?= h($modeloAvaliaco->descricao) ?></td>
                <td><?= h($modeloAvaliaco->flag_360) ?></td>
                <td><?= h($modeloAvaliaco->flag_270) ?></td>
                <td><?= h($modeloAvaliaco->flag_180) ?></td>
                <td><?= h($modeloAvaliaco->flag_por_comite) ?></td>
                <td><?= h($modeloAvaliaco->flag_top_down) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modeloAvaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modeloAvaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modeloAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeloAvaliaco->id)]) ?>
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
