<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Status Avaliacoes'), ['controller' => 'StatusAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Status Avaliaco'), ['controller' => 'StatusAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoDesempenhos index large-9 medium-8 columns content">
    <h3><?= __('Avaliacao Desempenhos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('status_avaliacao_id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacaoDesempenhos as $avaliacaoDesempenho): ?>
            <tr>
                <td><?= $this->Number->format($avaliacaoDesempenho->id) ?></td>
                <td><?= $avaliacaoDesempenho->has('status_avaliaco') ? $this->Html->link($avaliacaoDesempenho->status_avaliaco->id, ['controller' => 'StatusAvaliacoes', 'action' => 'view', $avaliacaoDesempenho->status_avaliaco->id]) : '' ?></td>
                <td><?= h($avaliacaoDesempenho->descricao) ?></td>
                <td><?= h($avaliacaoDesempenho->created) ?></td>
                <td><?= h($avaliacaoDesempenho->modified) ?></td>
                <td><?= h($avaliacaoDesempenho->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacaoDesempenho->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacaoDesempenho->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacaoDesempenho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoDesempenho->id)]) ?>
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
