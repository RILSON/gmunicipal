<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cargo'), ['action' => 'edit', $cargo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cargo'), ['action' => 'delete', $cargo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cargo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="cargos view large-9 medium-8 columns content">
    <h3><?= h($cargo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Grupo') ?></th>
            <td><?= $cargo->has('grupo') ? $this->Html->link($cargo->grupo->id, ['controller' => 'Grupos', 'action' => 'view', $cargo->grupo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($cargo->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($cargo->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($cargo->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($cargo->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $cargo->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Evidencias') ?></h4>
        <?php if (!empty($cargo->evidencias)): ?>
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
            <?php foreach ($cargo->evidencias as $evidencias): ?>
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
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($cargo->usuarios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('Cargo Id') ?></th>
                <th><?= __('Departamento Id') ?></th>
                <th><?= __('Perfil Id') ?></th>
                <th><?= __('Nome') ?></th>
                <th><?= __('Matricula') ?></th>
                <th><?= __('Data Admissao') ?></th>
                <th><?= __('Email') ?></th>
                <th><?= __('Login') ?></th>
                <th><?= __('Password') ?></th>
                <th><?= __('Flag First Login') ?></th>
                <th><?= __('Flag Trocar Senha') ?></th>
                <th><?= __('Flag Avaliador') ?></th>
                <th><?= __('Flag Demitido') ?></th>
                <th><?= __('Flag Administrador') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th><?= __('Status') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($cargo->usuarios as $usuarios): ?>
            <tr>
                <td><?= h($usuarios->id) ?></td>
                <td><?= h($usuarios->cargo_id) ?></td>
                <td><?= h($usuarios->departamento_id) ?></td>
                <td><?= h($usuarios->perfil_id) ?></td>
                <td><?= h($usuarios->nome) ?></td>
                <td><?= h($usuarios->matricula) ?></td>
                <td><?= h($usuarios->data_admissao) ?></td>
                <td><?= h($usuarios->email) ?></td>
                <td><?= h($usuarios->login) ?></td>
                <td><?= h($usuarios->password) ?></td>
                <td><?= h($usuarios->flag_first_login) ?></td>
                <td><?= h($usuarios->flag_trocar_senha) ?></td>
                <td><?= h($usuarios->flag_avaliador) ?></td>
                <td><?= h($usuarios->flag_demitido) ?></td>
                <td><?= h($usuarios->flag_administrador) ?></td>
                <td><?= h($usuarios->created) ?></td>
                <td><?= h($usuarios->modified) ?></td>
                <td><?= h($usuarios->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Usuarios', 'action' => 'view', $usuarios->id]) ?>

                    <?= $this->Html->link(__('Edit'), ['controller' => 'Usuarios', 'action' => 'edit', $usuarios->id]) ?>

                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Usuarios', 'action' => 'delete', $usuarios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuarios->id)]) ?>

                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
    </div>
</div>
