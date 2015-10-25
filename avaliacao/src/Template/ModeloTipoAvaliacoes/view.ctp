<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Modelo Tipo Avaliaco'), ['action' => 'edit', $modeloTipoAvaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Modelo Tipo Avaliaco'), ['action' => 'delete', $modeloTipoAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $modeloTipoAvaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modelo Tipo Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo Tipo Avaliaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modelo Avaliacoes'), ['controller' => 'ModeloAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo Avaliaco'), ['controller' => 'ModeloAvaliacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Avaliacoes'), ['controller' => 'TipoAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Avaliaco'), ['controller' => 'TipoAvaliacoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modeloTipoAvaliacoes view large-9 medium-8 columns content">
    <h3><?= h($modeloTipoAvaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Modelo Avaliaco') ?></th>
            <td><?= $modeloTipoAvaliaco->has('modelo_avaliaco') ? $this->Html->link($modeloTipoAvaliaco->modelo_avaliaco->id, ['controller' => 'ModeloAvaliacoes', 'action' => 'view', $modeloTipoAvaliaco->modelo_avaliaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Avaliaco') ?></th>
            <td><?= $modeloTipoAvaliaco->has('tipo_avaliaco') ? $this->Html->link($modeloTipoAvaliaco->tipo_avaliaco->id, ['controller' => 'TipoAvaliacoes', 'action' => 'view', $modeloTipoAvaliaco->tipo_avaliaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($modeloTipoAvaliaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Sugerido') ?></th>
            <td><?= $this->Number->format($modeloTipoAvaliaco->peso_sugerido) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($modeloTipoAvaliaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($modeloTipoAvaliaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $modeloTipoAvaliaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
