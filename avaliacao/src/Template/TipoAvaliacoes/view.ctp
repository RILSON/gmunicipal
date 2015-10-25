<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Avaliaco'), ['action' => 'edit', $tipoAvaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Avaliaco'), ['action' => 'delete', $tipoAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoAvaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Avaliaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoAvaliacoes view large-9 medium-8 columns content">
    <h3><?= h($tipoAvaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($tipoAvaliaco->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoAvaliaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tipoAvaliaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tipoAvaliaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Superior Imediato') ?></th>
            <td><?= $tipoAvaliaco->flag_superior_imediato ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Auto Avaliacao') ?></th>
            <td><?= $tipoAvaliaco->flag_auto_avaliacao ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Subordinado') ?></th>
            <td><?= $tipoAvaliaco->flag_subordinado ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Cliente Interno') ?></th>
            <td><?= $tipoAvaliaco->flag_cliente_interno ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Fornecedor Interno') ?></th>
            <td><?= $tipoAvaliaco->flag_fornecedor_interno ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag 360') ?></th>
            <td><?= $tipoAvaliaco->flag_360 ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Pares') ?></th>
            <td><?= $tipoAvaliaco->flag_pares ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $tipoAvaliaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
