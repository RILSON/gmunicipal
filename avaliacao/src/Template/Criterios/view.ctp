<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Criterio'), ['action' => 'edit', $criterio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Criterio'), ['action' => 'delete', $criterio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Criterios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterio Itens'), ['controller' => 'CriterioItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio Iten'), ['controller' => 'CriterioItens', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="criterios view large-9 medium-8 columns content">
    <h3><?= h($criterio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Grupo') ?></th>
            <td><?= $criterio->has('grupo') ? $this->Html->link($criterio->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $criterio->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($criterio->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($criterio->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($criterio->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($criterio->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $criterio->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Criterio Itens') ?></h4>
        <?php if (!empty($criterio->criterio_itens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Criterio Id') ?></th>
                <th><?= __('Criterio Pontuacao Id') ?></th>
                <th><?= __('Pontuacao') ?></th>
                <th><?= __('Avaliacao Avaliador Id') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($criterio->criterio_itens as $criterioItens): ?>
            <tr>
                <td><?= h($criterioItens->id) ?></td>
                <td><?= h($criterioItens->criterio_id) ?></td>
                <td><?= h($criterioItens->criterio_pontuacao_id) ?></td>
                <td><?= h($criterioItens->pontuacao) ?></td>
                <td><?= h($criterioItens->avaliacao_avaliador_id) ?></td>
                <td><?= h($criterioItens->created) ?></td>
                <td><?= h($criterioItens->modified) ?></td>
                <td><?= h($criterioItens->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CriterioItens', 'action' => 'view', $criterioItens->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'CriterioItens', 'action' => 'edit', $criterioItens->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CriterioItens', 'action' => 'delete', $criterioItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioItens->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Criterio Pontuacoes') ?></h4>
        <?php if (!empty($criterio->criterio_pontuacoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Criterio Id') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Pontuacao') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($criterio->criterio_pontuacoes as $criterioPontuacoes): ?>
            <tr>
                <td><?= h($criterioPontuacoes->id) ?></td>
                <td><?= h($criterioPontuacoes->criterio_id) ?></td>
                <td><?= h($criterioPontuacoes->descricao) ?></td>
                <td><?= h($criterioPontuacoes->pontuacao) ?></td>
                <td><?= h($criterioPontuacoes->created) ?></td>
                <td><?= h($criterioPontuacoes->modified) ?></td>
                <td><?= h($criterioPontuacoes->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CriterioPontuacoes', 'action' => 'view', $criterioPontuacoes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'CriterioPontuacoes', 'action' => 'edit', $criterioPontuacoes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CriterioPontuacoes', 'action' => 'delete', $criterioPontuacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioPontuacoes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
