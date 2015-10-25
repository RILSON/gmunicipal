<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="evidencias index large-9 medium-8 columns content">
    <h3><?= __('Evidencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_desempenho_id') ?></th>
                <th><?= $this->Paginator->sort('competencia_id') ?></th>
                <th><?= $this->Paginator->sort('cargo_id') ?></th>
                <th><?= $this->Paginator->sort('grupo_id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($evidencias as $evidencia): ?>
            <tr>
                <td><?= $this->Number->format($evidencia->id) ?></td>
                <td><?= $evidencia->has('avaliacao_desempenho') ? $this->Html->link($evidencia->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $evidencia->avaliacao_desempenho->id]) : '' ?></td>
                <td><?= $evidencia->has('competencia') ? $this->Html->link($evidencia->competencia->id, ['controller' => 'Competencias', 'action' => 'view', $evidencia->competencia->id]) : '' ?></td>
                <td><?= $evidencia->has('cargo') ? $this->Html->link($evidencia->cargo->id, ['controller' => 'Cargos', 'action' => 'view', $evidencia->cargo->id]) : '' ?></td>
                <td><?= $evidencia->has('grupo') ? $this->Html->link($evidencia->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $evidencia->grupo->id]) : '' ?></td>
                <td><?= h($evidencia->descricao) ?></td>
                <td><?= h($evidencia->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $evidencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $evidencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $evidencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencia->id)]) ?>
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
