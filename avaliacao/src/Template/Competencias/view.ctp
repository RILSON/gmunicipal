<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Competencia'), ['action' => 'edit', $competencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Competencia'), ['action' => 'delete', $competencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Competencias'), ['controller' => 'TipoCompetencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Competencia'), ['controller' => 'TipoCompetencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grau Relevancias'), ['controller' => 'GrauRelevancias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grau Relevancia'), ['controller' => 'GrauRelevancias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="competencias view large-9 medium-8 columns content">
    <h3><?= h($competencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Desempenho') ?></th>
            <td><?= $competencia->has('avaliacao_desempenho') ? $this->Html->link($competencia->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $competencia->avaliacao_desempenho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Competencia') ?></th>
            <td><?= $competencia->has('tipo_competencia') ? $this->Html->link($competencia->tipo_competencia->id, ['controller' => 'TipoCompetencias', 'action' => 'view', $competencia->tipo_competencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Grau Relevancia') ?></th>
            <td><?= $competencia->has('grau_relevancia') ? $this->Html->link($competencia->grau_relevancia->id, ['controller' => 'GrauRelevancias', 'action' => 'view', $competencia->grau_relevancia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($competencia->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($competencia->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($competencia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($competencia->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($competencia->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $competencia->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evidencias') ?></h4>
        <?php if (!empty($competencia->evidencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Desempenho Id') ?></th>
                <th><?= __('Competencia Id') ?></th>
                <th><?= __('Cargo Id') ?></th>
                <th><?= __('Grupo Id') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($competencia->evidencias as $evidencias): ?>
            <tr>
                <td><?= h($evidencias->id) ?></td>
                <td><?= h($evidencias->avaliacao_desempenho_id) ?></td>
                <td><?= h($evidencias->competencia_id) ?></td>
                <td><?= h($evidencias->cargo_id) ?></td>
                <td><?= h($evidencias->grupo_id) ?></td>
                <td><?= h($evidencias->descricao) ?></td>
                <td><?= h($evidencias->created) ?></td>
                <td><?= h($evidencias->modified) ?></td>
                <td><?= h($evidencias->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Evidencias', 'action' => 'view', $evidencias->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Evidencias', 'action' => 'edit', $evidencias->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Evidencias', 'action' => 'delete', $evidencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencias->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
