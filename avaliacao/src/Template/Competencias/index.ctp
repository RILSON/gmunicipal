<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Competencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Competencias'), ['controller' => 'TipoCompetencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Competencia'), ['controller' => 'TipoCompetencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grau Relevancias'), ['controller' => 'GrauRelevancias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grau Relevancia'), ['controller' => 'GrauRelevancias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competencias index large-9 medium-8 columns content">
    <h3><?= __('Competencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_desempenho_id') ?></th>
                <th><?= $this->Paginator->sort('tipo_competencia_id') ?></th>
                <th><?= $this->Paginator->sort('grau_relevancia_id') ?></th>
                <th><?= $this->Paginator->sort('nome') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($competencias as $competencia): ?>
            <tr>
                <td><?= $this->Number->format($competencia->id) ?></td>
                <td><?= $competencia->has('avaliacao_desempenho') ? $this->Html->link($competencia->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $competencia->avaliacao_desempenho->id]) : '' ?></td>
                <td><?= $competencia->has('tipo_competencia') ? $this->Html->link($competencia->tipo_competencia->id, ['controller' => 'TipoCompetencias', 'action' => 'view', $competencia->tipo_competencia->id]) : '' ?></td>
                <td><?= $competencia->has('grau_relevancia') ? $this->Html->link($competencia->grau_relevancia->id, ['controller' => 'GrauRelevancias', 'action' => 'view', $competencia->grau_relevancia->id]) : '' ?></td>
                <td><?= h($competencia->nome) ?></td>
                <td><?= h($competencia->descricao) ?></td>
                <td><?= h($competencia->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $competencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $competencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $competencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]) ?>
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
