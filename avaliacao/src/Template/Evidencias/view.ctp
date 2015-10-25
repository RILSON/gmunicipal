<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Evidencia'), ['action' => 'edit', $evidencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Evidencia'), ['action' => 'delete', $evidencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $evidencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="evidencias view large-9 medium-8 columns content">
    <h3><?= h($evidencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Desempenho') ?></th>
            <td><?= $evidencia->has('avaliacao_desempenho') ? $this->Html->link($evidencia->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $evidencia->avaliacao_desempenho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Competencia') ?></th>
            <td><?= $evidencia->has('competencia') ? $this->Html->link($evidencia->competencia->id, ['controller' => 'Competencias', 'action' => 'view', $evidencia->competencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= $evidencia->has('cargo') ? $this->Html->link($evidencia->cargo->id, ['controller' => 'Cargos', 'action' => 'view', $evidencia->cargo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Grupo') ?></th>
            <td><?= $evidencia->has('grupo') ? $this->Html->link($evidencia->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $evidencia->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($evidencia->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($evidencia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($evidencia->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($evidencia->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $evidencia->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avaliacao Desempenho Itens') ?></h4>
        <?php if (!empty($evidencia->avaliacao_desempenho_itens)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Avaliador Id') ?></th>
                <th><?= __('Evidencia Id') ?></th>
                <th><?= __('Nivel Proficiencia Id') ?></th>
                <th><?= __('Observacao') ?></th>
                <th><?= __('Peso Competencia Cargo') ?></th>
                <th><?= __('Somatorio Relevancia Competencia') ?></th>
                <th><?= __('Quantidade Competencia Tipo') ?></th>
                <th><?= __('Grau Relevancia Competencia') ?></th>
                <th><?= __('Qtde Perguntas Competencia') ?></th>
                <th><?= __('Valor Maximo Evidencia') ?></th>
                <th><?= __('Valor Resposta') ?></th>
                <th><?= __('Valor Maximo Competencia') ?></th>
                <th><?= __('Divisor Nivel') ?></th>
                <th><?= __('Valor Resposta Peso') ?></th>
                <th><?= __('Peso Real') ?></th>
                <th><?= __('Quantidade Superior Imediato') ?></th>
                <th><?= __('Quantidade Pares') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($evidencia->avaliacao_desempenho_itens as $avaliacaoDesempenhoItens): ?>
            <tr>
                <td><?= h($avaliacaoDesempenhoItens->id) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->avaliacao_avaliador_id) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->evidencia_id) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->nivel_proficiencia_id) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->observacao) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->peso_competencia_cargo) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->somatorio_relevancia_competencia) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->quantidade_competencia_tipo) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->grau_relevancia_competencia) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->qtde_perguntas_competencia) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->valor_maximo_evidencia) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->valor_resposta) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->valor_maximo_competencia) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->divisor_nivel) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->valor_resposta_peso) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->peso_real) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->quantidade_superior_imediato) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->quantidade_pares) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->created) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->modified) ?></td>
                <td><?= h($avaliacaoDesempenhoItens->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'view', $avaliacaoDesempenhoItens->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'edit', $avaliacaoDesempenhoItens->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'delete', $avaliacaoDesempenhoItens->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoDesempenhoItens->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
