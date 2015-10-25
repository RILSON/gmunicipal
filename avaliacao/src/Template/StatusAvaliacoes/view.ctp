<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Status Avaliaco'), ['action' => 'edit', $statusAvaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Status Avaliaco'), ['action' => 'delete', $statusAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statusAvaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Status Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Avaliaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="statusAvaliacoes view large-9 medium-8 columns content">
    <h3><?= h($statusAvaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($statusAvaliaco->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($statusAvaliaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($statusAvaliaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($statusAvaliaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $statusAvaliaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
