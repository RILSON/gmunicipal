<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Grupo'), ['action' => 'edit', $grupo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Grupo'), ['action' => 'delete', $grupo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $grupo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Criterios'), ['controller' => 'Criterios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Criterio'), ['controller' => 'Criterios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="grupos view large-9 medium-8 columns content">
    <h3><?= h($grupo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($grupo->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($grupo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Generica') ?></th>
            <td><?= $this->Number->format($grupo->peso_generica) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Gerencial') ?></th>
            <td><?= $this->Number->format($grupo->peso_gerencial) ?></td>
        </tr>
        <tr>
            <th><?= __('Peso Especifica') ?></th>
            <td><?= $this->Number->format($grupo->peso_especifica) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($grupo->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($grupo->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag Estrategico') ?></th>
            <td><?= $grupo->flag_estrategico ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Tatico') ?></th>
            <td><?= $grupo->flag_tatico ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Operacional') ?></th>
            <td><?= $grupo->flag_operacional ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $grupo->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Avaliacao Grupo Modelos') ?></h4>
        <?php if (!empty($grupo->avaliacao_grupo_modelos)): ?>
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
            <?php foreach ($grupo->avaliacao_grupo_modelos as $avaliacaoGrupoModelos): ?>
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
        <h4><?= __('Related Cargos') ?></h4>
        <?php if (!empty($grupo->cargos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Grupo Id') ?></th>
                <th><?= __('Descricao') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grupo->cargos as $cargos): ?>
            <tr>
                <td><?= h($cargos->id) ?></td>
                <td><?= h($cargos->grupo_id) ?></td>
                <td><?= h($cargos->descricao) ?></td>
                <td><?= h($cargos->created) ?></td>
                <td><?= h($cargos->modified) ?></td>
                <td><?= h($cargos->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Cargos', 'action' => 'view', $cargos->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Cargos', 'action' => 'edit', $cargos->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cargos', 'action' => 'delete', $cargos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cargos->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Criterios') ?></h4>
        <?php if (!empty($grupo->criterios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Grupo Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($grupo->criterios as $criterios): ?>
            <tr>
                <td><?= h($criterios->id) ?></td>
                <td><?= h($criterios->grupo_id) ?></td>
                <td><?= h($criterios->nome) ?></td>
                <td><?= h($criterios->created) ?></td>
                <td><?= h($criterios->modified) ?></td>
                <td><?= h($criterios->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Criterios', 'action' => 'view', $criterios->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Criterios', 'action' => 'edit', $criterios->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Criterios', 'action' => 'delete', $criterios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $criterios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Evidencias') ?></h4>
        <?php if (!empty($grupo->evidencias)): ?>
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
            <?php foreach ($grupo->evidencias as $evidencias): ?>
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
