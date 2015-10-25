<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Departamento'), ['action' => 'edit', $departamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="departamentos view large-9 medium-8 columns content">
    <h3><?= h($departamento->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Descricao') ?></th>
            <td><?= h($departamento->descricao) ?></td>
        </tr>
        <tr>
            <th><?= __('Apelido') ?></th>
            <td><?= h($departamento->apelido) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($departamento->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($departamento->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($departamento->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $departamento->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Usuarios') ?></h4>
        <?php if (!empty($departamento->usuarios)): ?>
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
            <?php foreach ($departamento->usuarios as $usuarios): ?>
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
