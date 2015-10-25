<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Media Avaliaco'), ['action' => 'edit', $mediaAvaliaco->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Media Avaliaco'), ['action' => 'delete', $mediaAvaliaco->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediaAvaliaco->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mediaAvaliacoes view large-9 medium-8 columns content">
    <h3><?= h($mediaAvaliaco->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Avaliacao Desempenho') ?></th>
            <td><?= $mediaAvaliaco->has('avaliacao_desempenho') ? $this->Html->link($mediaAvaliaco->avaliacao_desempenho->id, ['controller' => 'AvaliacaoDesempenhos', 'action' => 'view', $mediaAvaliaco->avaliacao_desempenho->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario') ?></th>
            <td><?= $mediaAvaliaco->has('usuario') ? $this->Html->link($mediaAvaliaco->usuario->id, ['controller' => 'Usuarios', 'action' => 'view', $mediaAvaliaco->usuario->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliadore') ?></th>
            <td><?= $mediaAvaliaco->has('avaliacao_avaliadore') ? $this->Html->link($mediaAvaliaco->avaliacao_avaliadore->id, ['controller' => 'AvaliacaoAvaliadores', 'action' => 'view', $mediaAvaliaco->avaliacao_avaliadore->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Feedback') ?></th>
            <td><?= h($mediaAvaliaco->feedback) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliador Id') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Auto Avaliacao') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_auto_avaliacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Auto Avaliacao') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->peso_auto_avaliacao) ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliador Superior 1 Id') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_superior_1_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Superior 1') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_superior_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Superior') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->peso_superior) ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliador Par 1 Id') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_par_1_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Par 1') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_par_1) ?></td>
        </tr>
        <tr>
            <th><?= __('Avaliacao Avaliador Par 2 Id') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->avaliacao_avaliador_par_2_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Par 2') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_par_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Pares') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->peso_pares) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Media Pares') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_media_pares) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Final') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_final) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Superior 2') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_superior_2) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Media Superior') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_media_superior) ?></td>
        </tr>
        <tr>
            <th><?= __('Nota Criterio') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->nota_criterio) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Criterio') ?></th>
            <td><?= $this->Number->format($mediaAvaliaco->peso_criterio) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($mediaAvaliaco->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($mediaAvaliaco->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Feedback Concluido') ?></th>
            <td><?= $mediaAvaliaco->flag_feedback_concluido ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $mediaAvaliaco->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
</div>
