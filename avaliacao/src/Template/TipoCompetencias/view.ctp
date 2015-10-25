<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tipo Competencia'), ['action' => 'edit', $tipoCompetencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tipo Competencia'), ['action' => 'delete', $tipoCompetencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tipoCompetencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Competencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Competencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tipoCompetencias view large-9 medium-8 columns content">
    <h3><?= h($tipoCompetencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($tipoCompetencia->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($tipoCompetencia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Ordenacao') ?></th>
            <td><?= $this->Number->format($tipoCompetencia->ordenacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($tipoCompetencia->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($tipoCompetencia->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Generica') ?></th>
            <td><?= $tipoCompetencia->flag_generica ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Gerencial') ?></th>
            <td><?= $tipoCompetencia->flag_gerencial ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Especifica') ?></th>
            <td><?= $tipoCompetencia->flag_especifica ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $tipoCompetencia->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Competencias') ?></h4>
        <?php if (!empty($tipoCompetencia->competencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Desempenho Id') ?></th>
                <th><?= __('Tipo Competencia Id') ?></th>
                <th><?= __('Grau Relevancia Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tipoCompetencia->competencias as $competencias): ?>
            <tr>
                <td><?= h($competencias->id) ?></td>
                <td><?= h($competencias->avaliacao_desempenho_id) ?></td>
                <td><?= h($competencias->tipo_competencia_id) ?></td>
                <td><?= h($competencias->grau_relevancia_id) ?></td>
                <td><?= h($competencias->nome) ?></td>
                <td><?= h($competencias->descricao) ?></td>
                <td><?= h($competencias->created) ?></td>
                <td><?= h($competencias->modified) ?></td>
                <td><?= h($competencias->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Competencias', 'action' => 'view', $competencias->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Competencias', 'action' => 'edit', $competencias->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Competencias', 'action' => 'delete', $competencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencias->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
