<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Criterio Iten'), ['action' => 'edit', $criterioIten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Criterio Iten'), ['action' => 'delete', $criterioIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterioIten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Criterio Itens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio Iten'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterio Pontuacoes'), ['controller' => 'CriterioPontuacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio Pontuaco'), ['controller' => 'CriterioPontuacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="criterioItens view large-9 medium-8 columns content">
    <h3><?= h($criterioIten->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Criterio') ?></th>
            <td><?= $criterioIten->has('criterio') ? $this->Html->link($criterioIten->criterio->id, ['controller' => 'Criterios', 'action' => 'view', $criterioIten->criterio->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Criterio Pontuaco') ?></th>
            <td><?= $criterioIten->has('criterio_pontuaco') ? $this->Html->link($criterioIten->criterio_pontuaco->id, ['controller' => 'CriterioPontuacoes', 'action' => 'view', $criterioIten->criterio_pontuaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliadore') ?></th>
            <td><?= $criterioIten->has('avaliacao_avaliadore') ? $this->Html->link($criterioIten->avaliacao_avaliadore->id, ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $criterioIten->avaliacao_avaliadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($criterioIten->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Pontuacao') ?></th>
            <td><?= $this->Number->format($criterioIten->pontuacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($criterioIten->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($criterioIten->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $criterioIten->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
