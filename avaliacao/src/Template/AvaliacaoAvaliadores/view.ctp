<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliacao Avaliadore'), ['action' => 'edit', $avaliacaoAvaliadore->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliacao Avaliadore'), ['action' => 'delete', $avaliacaoAvaliadore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoAvaliadore->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacaoAvaliadores view large-9 medium-8 columns content">
    <h3><?= h($avaliacaoAvaliadore->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Grupo Modelo') ?></th>
            <td><?= $avaliacaoAvaliadore->has('avaliacao_grupo_modelo') ? $this->Html->link($avaliacaoAvaliadore->avaliacao_grupo_modelo->id, ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'view', $avaliacaoAvaliadore->avaliacao_grupo_modelo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $avaliacaoAvaliadore->has('usuario') ? $this->Html->link($avaliacaoAvaliadore->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $avaliacaoAvaliadore->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliacaoAvaliadore->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario Avaliador Id') ?></th>
            <td><?= $this->Number->format($avaliacaoAvaliadore->usuario_avaliador_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Avaliacao') ?></th>
            <td><?= $this->Number->format($avaliacaoAvaliadore->valor_avaliacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Valor Criterio') ?></th>
            <td><?= $this->Number->format($avaliacaoAvaliadore->valor_criterio) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($avaliacaoAvaliadore->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($avaliacaoAvaliadore->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Finalizado') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_finalizado ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Superior Imediato') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_superior_imediato ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Auto Avaliacao') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_auto_avaliacao ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Subordinado') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_subordinado ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Cliente Interno') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_cliente_interno ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Fornecedor Interno') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_fornecedor_interno ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag 360') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_360 ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Pares') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_pares ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Avaliador Aprovado') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_avaliador_aprovado ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Avaliacao Concluida') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_avaliacao_concluida ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Criterio Finalizado') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_criterio_finalizado ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Avaliacao Iniciada') ?></th>
            <td><?= $avaliacaoAvaliadore->flag_avaliacao_iniciada ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $avaliacaoAvaliadore->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
