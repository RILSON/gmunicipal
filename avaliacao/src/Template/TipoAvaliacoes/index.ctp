<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Avaliaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoAvaliacoes index large-9 medium-8 columns content">
    <h3><?= __('Tipo Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('flag_superior_imediato') ?></th>
                <th><?= $this->Paginator->sort('flag_auto_avaliacao') ?></th>
                <th><?= $this->Paginator->sort('flag_subordinado') ?></th>
                <th><?= $this->Paginator->sort('flag_cliente_interno') ?></th>
                <th><?= $this->Paginator->sort('flag_fornecedor_interno') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoAvaliacoes as $tipoAvaliaco): ?>
            <tr>
                <td><?= $this->Number->format($tipoAvaliaco->id) ?></td>
                <td><?= h($tipoAvaliaco->descricao) ?></td>
                <td><?= h($tipoAvaliaco->flag_superior_imediato) ?></td>
                <td><?= h($tipoAvaliaco->flag_auto_avaliacao) ?></td>
                <td><?= h($tipoAvaliaco->flag_subordinado) ?></td>
                <td><?= h($tipoAvaliaco->flag_cliente_interno) ?></td>
                <td><?= h($tipoAvaliaco->flag_fornecedor_interno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoAvaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoAvaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAvaliaco->id)]) ?>
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
