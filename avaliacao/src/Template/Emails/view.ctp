<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Email'), ['action' => 'edit', $email->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Email'), ['action' => 'delete', $email->id], ['confirm' => __('Are you sure you want to delete # {0}?', $email->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emails view large-9 medium-8 columns content">
    <h3><?= h($email->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Desempenho') ?></th>
            <td><?= $email->has('avaliacao_desempenho') ? $this->Html->link($email->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $email->avaliacao_desempenho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Para') ?></th>
            <td><?= h($email->para) ?></td>
        </tr>
        <tr>
            <th><?= __('Cc') ?></th>
            <td><?= h($email->cc) ?></td>
        </tr>
        <tr>
            <th><?= __('Texto') ?></th>
            <td><?= h($email->texto) ?></td>
        </tr>
        <tr>
            <th><?= __('Assunto') ?></th>
            <td><?= h($email->assunto) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($email->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($email->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($email->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $email->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
