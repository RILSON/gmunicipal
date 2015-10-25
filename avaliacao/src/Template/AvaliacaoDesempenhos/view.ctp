<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Avaliacao Desempenho'), ['action' => 'edit', $avaliacaoDesempenho->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Avaliacao Desempenho'), ['action' => 'delete', $avaliacaoDesempenho->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoDesempenho->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Status Avaliacoes'), ['controller' => 'StatusAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Status Avaliaco'), ['controller' => 'StatusAvaliacoes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Competencias'), ['controller' => 'Competencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Competencia'), ['controller' => 'Competencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Emails'), ['controller' => 'Emails', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Email'), ['controller' => 'Emails', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="avaliacaoDesempenhos view large-9 medium-8 columns content">
    <h3><?= h($avaliacaoDesempenho->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Status Avaliaco') ?></th>
            <td><?= $avaliacaoDesempenho->has('status_avaliaco') ? $this->Html->link($avaliacaoDesempenho->status_avaliaco->id, ['controller' => 'StatusAvaliacoes', 'action' => 'view', $avaliacaoDesempenho->status_avaliaco->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($avaliacaoDesempenho->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($avaliacaoDesempenho->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($avaliacaoDesempenho->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($avaliacaoDesempenho->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $avaliacaoDesempenho->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avaliacao Grupo Modelos') ?></h4>
        <?php if (!empty($avaliacaoDesempenho->avaliacao_grupo_modelos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Desempenho Id') ?></th>
                <th><?= __('Grupo Id') ?></th>
                <th><?= __('Modelo Tipo Avaliacao Id') ?></th>
                <th><?= __('Peso Real') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($avaliacaoDesempenho->avaliacao_grupo_modelos as $avaliacaoGrupoModelos): ?>
            <tr>
                <td><?= h($avaliacaoGrupoModelos->id) ?></td>
                <td><?= h($avaliacaoGrupoModelos->avaliacao_desempenho_id) ?></td>
                <td><?= h($avaliacaoGrupoModelos->grupo_id) ?></td>
                <td><?= h($avaliacaoGrupoModelos->modelo_tipo_avaliacao_id) ?></td>
                <td><?= h($avaliacaoGrupoModelos->peso_real) ?></td>
                <td><?= h($avaliacaoGrupoModelos->created) ?></td>
                <td><?= h($avaliacaoGrupoModelos->modified) ?></td>
                <td><?= h($avaliacaoGrupoModelos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'view', $avaliacaoGrupoModelos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'edit', $avaliacaoGrupoModelos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'delete', $avaliacaoGrupoModelos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoGrupoModelos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Competencias') ?></h4>
        <?php if (!empty($avaliacaoDesempenho->competencias)): ?>
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
            <?php foreach ($avaliacaoDesempenho->competencias as $competencias): ?>
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
    <div class="related">
        <h4><?= __('Related Emails') ?></h4>
        <?php if (!empty($avaliacaoDesempenho->emails)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Desempenho Id') ?></th>
                <th><?= __('Para') ?></th>
                <th><?= __('Cc') ?></th>
                <th><?= __('Texto') ?></th>
                <th><?= __('Assunto') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($avaliacaoDesempenho->emails as $emails): ?>
            <tr>
                <td><?= h($emails->id) ?></td>
                <td><?= h($emails->avaliacao_desempenho_id) ?></td>
                <td><?= h($emails->para) ?></td>
                <td><?= h($emails->cc) ?></td>
                <td><?= h($emails->texto) ?></td>
                <td><?= h($emails->assunto) ?></td>
                <td><?= h($emails->created) ?></td>
                <td><?= h($emails->modified) ?></td>
                <td><?= h($emails->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Emails', 'action' => 'view', $emails->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Emails', 'action' => 'edit', $emails->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Emails', 'action' => 'delete', $emails->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emails->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidencias') ?></h4>
        <?php if (!empty($avaliacaoDesempenho->evidencias)): ?>
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
            <?php foreach ($avaliacaoDesempenho->evidencias as $evidencias): ?>
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
    <div class="related">
        <h4><?= __('Related Media Avaliacoes') ?></h4>
        <?php if (!empty($avaliacaoDesempenho->media_avaliacoes)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Avaliacao Desempenho Id') ?></th>
                <th><?= __('Usuario Id') ?></th>
                <th><?= __('Avaliacao Avaliador Id') ?></th>
                <th><?= __('Nota Auto Avaliacao') ?></th>
                <th><?= __('Peso Auto Avaliacao') ?></th>
                <th><?= __('Avaliacao Avaliador Superior 1 Id') ?></th>
                <th><?= __('Nota Superior 1') ?></th>
                <th><?= __('Peso Superior') ?></th>
                <th><?= __('Avaliacao Avaliador Par 1 Id') ?></th>
                <th><?= __('Nota Par 1') ?></th>
                <th><?= __('Avaliacao Avaliador Par 2 Id') ?></th>
                <th><?= __('Nota Par 2') ?></th>
                <th><?= __('Peso Pares') ?></th>
                <th><?= __('Nota Media Pares') ?></th>
                <th><?= __('Nota Final') ?></th>
                <th><?= __('Avaliacao Avaliador Superior 2 Id') ?></th>
                <th><?= __('Nota Superior 2') ?></th>
                <th><?= __('Nota Media Superior') ?></th>
                <th><?= __('Feedback') ?></th>
                <th><?= __('Flag Feedback Concluido') ?></th>
                <th><?= __('Nota Criterio') ?></th>
                <th><?= __('Peso Criterio') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($avaliacaoDesempenho->media_avaliacoes as $mediaAvaliacoes): ?>
            <tr>
                <td><?= h($mediaAvaliacoes->id) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_desempenho_id) ?></td>
                <td><?= h($mediaAvaliacoes->usuario_id) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_avaliador_id) ?></td>
                <td><?= h($mediaAvaliacoes->nota_auto_avaliacao) ?></td>
                <td><?= h($mediaAvaliacoes->peso_auto_avaliacao) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_avaliador_superior_1_id) ?></td>
                <td><?= h($mediaAvaliacoes->nota_superior_1) ?></td>
                <td><?= h($mediaAvaliacoes->peso_superior) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_avaliador_par_1_id) ?></td>
                <td><?= h($mediaAvaliacoes->nota_par_1) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_avaliador_par_2_id) ?></td>
                <td><?= h($mediaAvaliacoes->nota_par_2) ?></td>
                <td><?= h($mediaAvaliacoes->peso_pares) ?></td>
                <td><?= h($mediaAvaliacoes->nota_media_pares) ?></td>
                <td><?= h($mediaAvaliacoes->nota_final) ?></td>
                <td><?= h($mediaAvaliacoes->avaliacao_avaliador_superior_2_id) ?></td>
                <td><?= h($mediaAvaliacoes->nota_superior_2) ?></td>
                <td><?= h($mediaAvaliacoes->nota_media_superior) ?></td>
                <td><?= h($mediaAvaliacoes->feedback) ?></td>
                <td><?= h($mediaAvaliacoes->flag_feedback_concluido) ?></td>
                <td><?= h($mediaAvaliacoes->nota_criterio) ?></td>
                <td><?= h($mediaAvaliacoes->peso_criterio) ?></td>
                <td><?= h($mediaAvaliacoes->created) ?></td>
                <td><?= h($mediaAvaliacoes->modified) ?></td>
                <td><?= h($mediaAvaliacoes->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MediaAvaliacoes', 'action' => 'view', $mediaAvaliacoes->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'MediaAvaliacoes', 'action' => 'edit', $mediaAvaliacoes->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MediaAvaliacoes', 'action' => 'delete', $mediaAvaliacoes->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mediaAvaliacoes->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
