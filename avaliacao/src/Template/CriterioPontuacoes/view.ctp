<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Criterio Pontuaco'), ['action' => 'edit', $criterioPontuaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Criterio Pontuaco'), ['action' => 'delete', $criterioPontuaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioPontuaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="criterioPontuacoes view large-9 medium-8 columns content">
    <h3><?= h($criterioPontuaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Criterio') ?></th>
            <td><?= $criterioPontuaco->has('criterio') ? $this->Html->link($criterioPontuaco->criterio->id, ['controller' => 'Criterios', 'action' => 'view', $criterioPontuaco->criterio->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($criterioPontuaco->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($criterioPontuaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($criterioPontuaco->pontuacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($criterioPontuaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($criterioPontuaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $criterioPontuaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
