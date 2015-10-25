<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modelo Avaliaco'), ['action' => 'edit', $modeloAvaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modelo Avaliaco'), ['action' => 'delete', $modeloAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeloAvaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modelo Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo Avaliaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modeloAvaliacoes view large-9 medium-8 columns content">
    <h3><?= h($modeloAvaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($modeloAvaliaco->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($modeloAvaliaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($modeloAvaliaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($modeloAvaliaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag 360') ?></th>
            <td><?= $modeloAvaliaco->flag_360 ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag 270') ?></th>
            <td><?= $modeloAvaliaco->flag_270 ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag 180') ?></th>
            <td><?= $modeloAvaliaco->flag_180 ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Por Comite') ?></th>
            <td><?= $modeloAvaliaco->flag_por_comite ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Top Down') ?></th>
            <td><?= $modeloAvaliaco->flag_top_down ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $modeloAvaliaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
