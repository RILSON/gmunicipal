<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Nivel Proficiencia'), ['action' => 'edit', $nivelProficiencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Nivel Proficiencia'), ['action' => 'delete', $nivelProficiencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $nivelProficiencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Nivel Proficiencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivel Proficiencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="nivelProficiencias view large-9 medium-8 columns content">
    <h3><?= h($nivelProficiencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($nivelProficiencia->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Sigla') ?></th>
            <td><?= h($nivelProficiencia->sigla) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($nivelProficiencia->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Divisor') ?></th>
            <td><?= $this->Number->format($nivelProficiencia->divisor) ?></td>
        </tr>
        <tr>
            <th><?= __('Inicio Escala') ?></th>
            <td><?= $this->Number->format($nivelProficiencia->inicio_escala) ?></td>
        </tr>
        <tr>
            <th><?= __('Fim Escala') ?></th>
            <td><?= $this->Number->format($nivelProficiencia->fim_escala) ?></td>
        </tr>
        <tr>
            <th><?= __('Ordenacao') ?></th>
            <td><?= $this->Number->format($nivelProficiencia->ordenacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($nivelProficiencia->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($nivelProficiencia->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Ab') ?></th>
            <td><?= $nivelProficiencia->flag_ab ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Ap') ?></th>
            <td><?= $nivelProficiencia->flag_ap ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Ae') ?></th>
            <td><?= $nivelProficiencia->flag_ae ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Ee') ?></th>
            <td><?= $nivelProficiencia->flag_ee ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Sb') ?></th>
            <td><?= $nivelProficiencia->flag_sb ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $nivelProficiencia->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avaliacao Desempenho Itens') ?></h4>
        <?php if (!empty($nivelProficiencia->avaliacao_desempenho_itens)): ?>
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
            <?php foreach ($nivelProficiencia->avaliacao_desempenho_itens as $avaliacaoDesempenhoItens): ?>
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
