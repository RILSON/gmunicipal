<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliacao Desempenho Iten'), ['action' => 'edit', $avaliacaoDesempenhoIten->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliacao Desempenho Iten'), ['action' => 'delete', $avaliacaoDesempenhoIten->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoDesempenhoIten->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Nivel Proficiencias'), ['controller' => 'NivelProficiencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Nivel Proficiencia'), ['controller' => 'NivelProficiencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacaoDesempenhoItens view large-9 medium-8 columns content">
    <h3><?= h($avaliacaoDesempenhoIten->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Avaliadore') ?></th>
            <td><?= $avaliacaoDesempenhoIten->has('avaliacao_avaliadore') ? $this->Html->link($avaliacaoDesempenhoIten->avaliacao_avaliadore->id, ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $avaliacaoDesempenhoIten->avaliacao_avaliadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Evidencia') ?></th>
            <td><?= $avaliacaoDesempenhoIten->has('evidencia') ? $this->Html->link($avaliacaoDesempenhoIten->evidencia->id, ['controller' => 'Evidencias', 'action' => 'view', $avaliacaoDesempenhoIten->evidencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nivel Proficiencia') ?></th>
            <td><?= $avaliacaoDesempenhoIten->has('nivel_proficiencia') ? $this->Html->link($avaliacaoDesempenhoIten->nivel_proficiencia->id, ['controller' => 'NivelProficiencias', 'action' => 'view', $avaliacaoDesempenhoIten->nivel_proficiencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Observacao') ?></th>
            <td><?= h($avaliacaoDesempenhoIten->observacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Competencia Cargo') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->peso_competencia_cargo) ?></td>
        </tr>
        <tr>
            <th><?= __('Somatorio Relevancia Competencia') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->somatorio_relevancia_competencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade Competencia Tipo') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->quantidade_competencia_tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Grau Relevancia Competencia') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->grau_relevancia_competencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Qtde Perguntas Competencia') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->qtde_perguntas_competencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Maximo Evidencia') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->valor_maximo_evidencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Resposta') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->valor_resposta) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Maximo Competencia') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->valor_maximo_competencia) ?></td>
        </tr>
        <tr>
            <th><?= __('Divisor Nivel') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->divisor_nivel) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Resposta Peso') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->valor_resposta_peso) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Real') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->peso_real) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade Superior Imediato') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->quantidade_superior_imediato) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantidade Pares') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenhoIten->quantidade_pares) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($avaliacaoDesempenhoIten->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($avaliacaoDesempenhoIten->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $avaliacaoDesempenhoIten->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
