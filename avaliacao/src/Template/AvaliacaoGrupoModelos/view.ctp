<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliacao Grupo Modelo'), ['action' => 'edit', $avaliacaoGrupoModelo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliacao Grupo Modelo'), ['action' => 'delete', $avaliacaoGrupoModelo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoGrupoModelo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Modelo Tipo Avaliacoes'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Modelo Tipo Avaliaco'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacaoGrupoModelos view large-9 medium-8 columns content">
    <h3><?= h($avaliacaoGrupoModelo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Desempenho') ?></th>
            <td><?= $avaliacaoGrupoModelo->has('avaliacao_desempenho') ? $this->Html->link($avaliacaoGrupoModelo->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $avaliacaoGrupoModelo->avaliacao_desempenho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Grupo') ?></th>
            <td><?= $avaliacaoGrupoModelo->has('grupo') ? $this->Html->link($avaliacaoGrupoModelo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $avaliacaoGrupoModelo->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Modelo Tipo Avaliaco') ?></th>
            <td><?= $avaliacaoGrupoModelo->has('modelo_tipo_avaliaco') ? $this->Html->link($avaliacaoGrupoModelo->modelo_tipo_avaliaco->id, ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'view', $avaliacaoGrupoModelo->modelo_tipo_avaliaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliacaoGrupoModelo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Real') ?></th>
            <td><?= $this->Number->format($avaliacaoGrupoModelo->peso_real) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($avaliacaoGrupoModelo->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($avaliacaoGrupoModelo->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $avaliacaoGrupoModelo->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avaliacao Avaliadores') ?></h4>
        <?php if (!empty($avaliacaoGrupoModelo->avaliacao_avaliadores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Grupo Modelo Id') ?></th>
                <th><?= __('Usuario Avaliador Id') ?></th>
                <th><?= __('Usuario Avaliado Id') ?></th>
                <th><?= __('Valor Avaliacao') ?></th>
                <th><?= __('Flag Finalizado') ?></th>
                <th><?= __('Flag Superior Imediato') ?></th>
                <th><?= __('Flag Auto Avaliacao') ?></th>
                <th><?= __('Flag Subordinado') ?></th>
                <th><?= __('Flag Cliente Interno') ?></th>
                <th><?= __('Flag Fornecedor Interno') ?></th>
                <th><?= __('Flag 360') ?></th>
                <th><?= __('Flag Pares') ?></th>
                <th><?= __('Flag Avaliador Aprovado') ?></th>
                <th><?= __('Flag Avaliacao Concluida') ?></th>
                <th><?= __('Valor Criterio') ?></th>
                <th><?= __('Flag Criterio Finalizado') ?></th>
                <th><?= __('Flag Avaliacao Iniciada') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($avaliacaoGrupoModelo->avaliacao_avaliadores as $avaliacaoAvaliadores): ?>
            <tr>
                <td><?= h($avaliacaoAvaliadores->id) ?></td>
                <td><?= h($avaliacaoAvaliadores->avaliacao_grupo_modelo_id) ?></td>
                <td><?= h($avaliacaoAvaliadores->usuario_avaliador_id) ?></td>
                <td><?= h($avaliacaoAvaliadores->usuario_avaliado_id) ?></td>
                <td><?= h($avaliacaoAvaliadores->valor_avaliacao) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_finalizado) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_superior_imediato) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_auto_avaliacao) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_subordinado) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_cliente_interno) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_fornecedor_interno) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_360) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_pares) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_avaliador_aprovado) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_avaliacao_concluida) ?></td>
                <td><?= h($avaliacaoAvaliadores->valor_criterio) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_criterio_finalizado) ?></td>
                <td><?= h($avaliacaoAvaliadores->flag_avaliacao_iniciada) ?></td>
                <td><?= h($avaliacaoAvaliadores->created) ?></td>
                <td><?= h($avaliacaoAvaliadores->modified) ?></td>
                <td><?= h($avaliacaoAvaliadores->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $avaliacaoAvaliadores->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'edit', $avaliacaoAvaliadores->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'delete', $avaliacaoAvaliadores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoAvaliadores->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
