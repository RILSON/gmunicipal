<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nivel Proficiencias'), ['controller' => 'NivelProficiencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nivel Proficiencia'), ['controller' => 'NivelProficiencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoDesempenhoItens index large-9 medium-8 columns content">
    <h3><?= __('Avaliacao Desempenho Itens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('avaliacao_avaliador_id') ?></th>
                <th><?= $this->Paginator->sort('evidencia_id') ?></th>
                <th><?= $this->Paginator->sort('nivel_proficiencia_id') ?></th>
                <th><?= $this->Paginator->sort('observacao') ?></th>
                <th><?= $this->Paginator->sort('peso_competencia_cargo') ?></th>
                <th><?= $this->Paginator->sort('somatorio_relevancia_competencia') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($avaliacaoDesempenhoItens as $avaliacaoDesempenhoIten): ?>
            <tr>
                <td><?= $this->Number->format($avaliacaoDesempenhoIten->id) ?></td>
                <td><?= $avaliacaoDesempenhoIten->has('avaliacao_avaliadore') ? $this->Html->link($avaliacaoDesempenhoIten->avaliacao_avaliadore->id, ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $avaliacaoDesempenhoIten->avaliacao_avaliadore->id]) : '' ?></td>
                <td><?= $avaliacaoDesempenhoIten->has('evidencia') ? $this->Html->link($avaliacaoDesempenhoIten->evidencia->id, ['controller' => 'Evidencias', 'action' => 'view', $avaliacaoDesempenhoIten->evidencia->id]) : '' ?></td>
                <td><?= $avaliacaoDesempenhoIten->has('nivel_proficiencia') ? $this->Html->link($avaliacaoDesempenhoIten->nivel_proficiencia->id, ['controller' => 'NivelProficiencias', 'action' => 'view', $avaliacaoDesempenhoIten->nivel_proficiencia->id]) : '' ?></td>
                <td><?= h($avaliacaoDesempenhoIten->observacao) ?></td>
                <td><?= $this->Number->format($avaliacaoDesempenhoIten->peso_competencia_cargo) ?></td>
                <td><?= $this->Number->format($avaliacaoDesempenhoIten->somatorio_relevancia_competencia) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $avaliacaoDesempenhoIten->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $avaliacaoDesempenhoIten->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $avaliacaoDesempenhoIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoDesempenhoIten->id)]) ?>
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
