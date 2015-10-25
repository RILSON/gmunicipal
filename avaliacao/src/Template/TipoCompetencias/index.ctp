<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Tipo Competencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoCompetencias index large-9 medium-8 columns content">
    <h3><?= __('Tipo Competencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('flag_generica') ?></th>
                <th><?= $this->Paginator->sort('flag_gerencial') ?></th>
                <th><?= $this->Paginator->sort('flag_especifica') ?></th>
                <th><?= $this->Paginator->sort('ordenacao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tipoCompetencias as $tipoCompetencia): ?>
            <tr>
                <td><?= $this->Number->format($tipoCompetencia->id) ?></td>
                <td><?= h($tipoCompetencia->descricao) ?></td>
                <td><?= h($tipoCompetencia->flag_generica) ?></td>
                <td><?= h($tipoCompetencia->flag_gerencial) ?></td>
                <td><?= h($tipoCompetencia->flag_especifica) ?></td>
                <td><?= $this->Number->format($tipoCompetencia->ordenacao) ?></td>
                <td><?= h($tipoCompetencia->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $tipoCompetencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $tipoCompetencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $tipoCompetencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoCompetencia->id)]) ?>
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
