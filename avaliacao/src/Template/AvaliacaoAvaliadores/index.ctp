<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoAvaliadores index large-9 medium-8 columns content">
    <h3><?= __('Avaliacao Avaliadores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_grupo_modelo_id') ?></th>
                <th><?= $this->Paginator->sort('usuario_avaliador_id') ?></th>
                <th><?= $this->Paginator->sort('usuario_avaliado_id') ?></th>
                <th><?= $this->Paginator->sort('valor_avaliacao') ?></th>
                <th><?= $this->Paginator->sort('flag_finalizado') ?></th>
                <th><?= $this->Paginator->sort('flag_superior_imediato') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacaoAvaliadores as $avaliacaoAvaliadore): ?>
            <tr>
                <td><?= $this->Number->format($avaliacaoAvaliadore->id) ?></td>
                <td><?= $avaliacaoAvaliadore->has('avaliacao_grupo_modelo') ? $this->Html->link($avaliacaoAvaliadore->avaliacao_grupo_modelo->id, ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'view', $avaliacaoAvaliadore->avaliacao_grupo_modelo->id]) : '' ?></td>
                <td><?= $this->Number->format($avaliacaoAvaliadore->usuario_avaliador_id) ?></td>
                <td><?= $avaliacaoAvaliadore->has('usuario') ? $this->Html->link($avaliacaoAvaliadore->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $avaliacaoAvaliadore->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($avaliacaoAvaliadore->valor_avaliacao) ?></td>
                <td><?= h($avaliacaoAvaliadore->flag_finalizado) ?></td>
                <td><?= h($avaliacaoAvaliadore->flag_superior_imediato) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacaoAvaliadore->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacaoAvaliadore->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacaoAvaliadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoAvaliadore->id)]) ?>
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
