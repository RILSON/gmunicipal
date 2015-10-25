<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="grupos index large-9 medium-8 columns content">
    <h3><?= __('Grupos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('flag_estrategico') ?></th>
                <th><?= $this->Paginator->sort('flag_tatico') ?></th>
                <th><?= $this->Paginator->sort('flag_operacional') ?></th>
                <th><?= $this->Paginator->sort('peso_generica') ?></th>
                <th><?= $this->Paginator->sort('peso_gerencial') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grupos as $grupo): ?>
            <tr>
                <td><?= $this->Number->format($grupo->id) ?></td>
                <td><?= h($grupo->descricao) ?></td>
                <td><?= h($grupo->flag_estrategico) ?></td>
                <td><?= h($grupo->flag_tatico) ?></td>
                <td><?= h($grupo->flag_operacional) ?></td>
                <td><?= $this->Number->format($grupo->peso_generica) ?></td>
                <td><?= $this->Number->format($grupo->peso_gerencial) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $grupo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $grupo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $grupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]) ?>
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
