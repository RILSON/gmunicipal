<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Modelo Tipo Avaliaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelo Avaliacoes'), ['controller' => 'ModeloAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo Avaliaco'), ['controller' => 'ModeloAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Avaliacoes'), ['controller' => 'TipoAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Avaliaco'), ['controller' => 'TipoAvaliacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="modeloTipoAvaliacoes index large-9 medium-8 columns content">
    <h3><?= __('Modelo Tipo Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('modelo_avaliacao_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_avaliacao_id') ?></th>
                <th><?= $this->Paginator->sort('peso_sugerido') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($modeloTipoAvaliacoes as $modeloTipoAvaliaco): ?>
            <tr>
                <td><?= $this->Number->format($modeloTipoAvaliaco->id) ?></td>
                <td><?= $modeloTipoAvaliaco->has('modelo_avaliaco') ? $this->Html->link($modeloTipoAvaliaco->modelo_avaliaco->id, ['controller' => 'ModeloAvaliacoes', 'action' => 'view', $modeloTipoAvaliaco->modelo_avaliaco->id]) : '' ?></td>
                <td><?= $modeloTipoAvaliaco->has('tipo_avaliaco') ? $this->Html->link($modeloTipoAvaliaco->tipo_avaliaco->id, ['controller' => 'TipoAvaliacoes', 'action' => 'view', $modeloTipoAvaliaco->tipo_avaliaco->id]) : '' ?></td>
                <td><?= $this->Number->format($modeloTipoAvaliaco->peso_sugerido) ?></td>
                <td><?= h($modeloTipoAvaliaco->created) ?></td>
                <td><?= h($modeloTipoAvaliaco->modified) ?></td>
                <td><?= h($modeloTipoAvaliaco->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $modeloTipoAvaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $modeloTipoAvaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $modeloTipoAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeloTipoAvaliaco->id)]) ?>
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
