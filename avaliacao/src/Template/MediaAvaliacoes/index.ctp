<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mediaAvaliacoes index large-9 medium-8 columns content">
    <h3><?= __('Media Avaliacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_desempenho_id') ?></th>
                <th><?= $this->Paginator->sort('usuario_id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_avaliador_id') ?></th>
                <th><?= $this->Paginator->sort('nota_auto_avaliacao') ?></th>
                <th><?= $this->Paginator->sort('peso_auto_avaliacao') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_avaliador_superior_1_id') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mediaAvaliacoes as $mediaAvaliaco): ?>
            <tr>
                <td><?= $this->Number->format($mediaAvaliaco->id) ?></td>
                <td><?= $mediaAvaliaco->has('avaliacao_desempenho') ? $this->Html->link($mediaAvaliaco->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $mediaAvaliaco->avaliacao_desempenho->id]) : '' ?></td>
                <td><?= $mediaAvaliaco->has('usuario') ? $this->Html->link($mediaAvaliaco->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $mediaAvaliaco->usuario->id]) : '' ?></td>
                <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_id) ?></td>
                <td><?= $this->Number->format($mediaAvaliaco->nota_auto_avaliacao) ?></td>
                <td><?= $this->Number->format($mediaAvaliaco->peso_auto_avaliacao) ?></td>
                <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_superior_1_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mediaAvaliaco->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mediaAvaliaco->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mediaAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediaAvaliaco->id)]) ?>
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
