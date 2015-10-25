<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grau Relevancia'), ['action' => 'edit', $grauRelevancia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grau Relevancia'), ['action' => 'delete', $grauRelevancia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grauRelevancia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grau Relevancias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grau Relevancia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grauRelevancias view large-9 medium-8 columns content">
    <h3><?= h($grauRelevancia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($grauRelevancia->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($grauRelevancia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso') ?></th>
            <td><?= $this->Number->format($grauRelevancia->peso) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($grauRelevancia->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($grauRelevancia->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $grauRelevancia->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Competencias') ?></h4>
        <?php if (!empty($grauRelevancia->competencias)): ?>
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
            <?php foreach ($grauRelevancia->competencias as $competencias): ?>
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
