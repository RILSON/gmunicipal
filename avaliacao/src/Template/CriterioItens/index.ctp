<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Criterio Iten'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="criterioItens index large-9 medium-8 columns content">
    <h3><?= __('Criterio Itens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('criterio_id') ?></th>
                <th><?= $this->Paginator->sort('criterio_pontuacao_id') ?></th>
                <th><?= $this->Paginator->sort('pontuacao') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_avaliador_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($criterioItens as $criterioIten): ?>
            <tr>
                <td><?= $this->Number->format($criterioIten->id) ?></td>
                <td><?= $criterioIten->has('criterio') ? $this->Html->link($criterioIten->criterio->id, ['controller' => 'Criterios', 'action' => 'view', $criterioIten->criterio->id]) : '' ?></td>
                <td><?= $criterioIten->has('criterio_pontuaco') ? $this->Html->link($criterioIten->criterio_pontuaco->id, ['controller' => 'CriterioPontuacoes', 'action' => 'view', $criterioIten->criterio_pontuaco->id]) : '' ?></td>
                <td><?= $this->Number->format($criterioIten->pontuacao) ?></td>
                <td><?= $criterioIten->has('avaliacao_avaliadore') ? $this->Html->link($criterioIten->avaliacao_avaliadore->id, ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $criterioIten->avaliacao_avaliadore->id]) : '' ?></td>
                <td><?= h($criterioIten->created) ?></td>
                <td><?= h($criterioIten->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $criterioIten->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $criterioIten->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $criterioIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioIten->id)]) ?>
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
