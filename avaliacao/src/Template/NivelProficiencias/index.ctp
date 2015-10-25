<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Nivel Proficiencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nivelProficiencias index large-9 medium-8 columns content">
    <h3><?= __('Nivel Proficiencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('descricao') ?></th>
                <th><?= $this->Paginator->sort('sigla') ?></th>
                <th><?= $this->Paginator->sort('divisor') ?></th>
                <th><?= $this->Paginator->sort('inicio_escala') ?></th>
                <th><?= $this->Paginator->sort('fim_escala') ?></th>
                <th><?= $this->Paginator->sort('flag_ab') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($nivelProficiencias as $nivelProficiencia): ?>
            <tr>
                <td><?= $this->Number->format($nivelProficiencia->id) ?></td>
                <td><?= h($nivelProficiencia->descricao) ?></td>
                <td><?= h($nivelProficiencia->sigla) ?></td>
                <td><?= $this->Number->format($nivelProficiencia->divisor) ?></td>
                <td><?= $this->Number->format($nivelProficiencia->inicio_escala) ?></td>
                <td><?= $this->Number->format($nivelProficiencia->fim_escala) ?></td>
                <td><?= h($nivelProficiencia->flag_ab) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $nivelProficiencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $nivelProficiencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $nivelProficiencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nivelProficiencia->id)]) ?>
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
