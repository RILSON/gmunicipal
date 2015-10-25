<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelo Tipo Avaliacoes'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo Tipo Avaliaco'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoGrupoModelos index large-9 medium-8 columns content">
    <h3><?= __('Avaliacao Grupo Modelos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_desempenho_id') ?></th>
                <th><?= $this->Paginator->sort('grupo_id') ?></th>
                <th><?= $this->Paginator->sort('modelo_tipo_avaliacao_id') ?></th>
                <th><?= $this->Paginator->sort('peso_real') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacaoGrupoModelos as $avaliacaoGrupoModelo): ?>
            <tr>
                <td><?= $this->Number->format($avaliacaoGrupoModelo->id) ?></td>
                <td><?= $avaliacaoGrupoModelo->has('avaliacao_desempenho') ? $this->Html->link($avaliacaoGrupoModelo->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $avaliacaoGrupoModelo->avaliacao_desempenho->id]) : '' ?></td>
                <td><?= $avaliacaoGrupoModelo->has('grupo') ? $this->Html->link($avaliacaoGrupoModelo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $avaliacaoGrupoModelo->grupo->id]) : '' ?></td>
                <td><?= $avaliacaoGrupoModelo->has('modelo_tipo_avaliaco') ? $this->Html->link($avaliacaoGrupoModelo->modelo_tipo_avaliaco->id, ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'view', $avaliacaoGrupoModelo->modelo_tipo_avaliaco->id]) : '' ?></td>
                <td><?= $this->Number->format($avaliacaoGrupoModelo->peso_real) ?></td>
                <td><?= h($avaliacaoGrupoModelo->created) ?></td>
                <td><?= h($avaliacaoGrupoModelo->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacaoGrupoModelo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacaoGrupoModelo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacaoGrupoModelo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoGrupoModelo->id)]) ?>
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
