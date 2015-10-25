<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Cargos'), ['controller' => 'Cargos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cargo'), ['controller' => 'Cargos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Departamentos'), ['controller' => 'Departamentos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Departamento'), ['controller' => 'Departamentos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['controller' => 'MediaAvaliacoes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Media Avaliaco'), ['controller' => 'MediaAvaliacoes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuarios view large-9 medium-8 columns content">
    <h3><?= h($usuario->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Cargo') ?></th>
            <td><?= $usuario->has('cargo') ? $this->Html->link($usuario->cargo->id, ['controller' => 'Cargos', 'action' => 'view', $usuario->cargo->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= $usuario->has('departamento') ? $this->Html->link($usuario->departamento->id, ['controller' => 'Departamentos', 'action' => 'view', $usuario->departamento->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Nome') ?></th>
            <td><?= h($usuario->nome) ?></td>
        </tr>
        <tr>
            <th><?= __('Matricula') ?></th>
            <td><?= h($usuario->matricula) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($usuario->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Login') ?></th>
            <td><?= h($usuario->login) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($usuario->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Perfil Id') ?></th>
            <td><?= $this->Number->format($usuario->perfil_id) ?></td>
        </tr>
        <tr>
            <th><?= __('Data Admissao') ?></th>
            <td><?= h($usuario->data_admissao) ?></tr>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($usuario->created) ?></tr>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($usuario->modified) ?></tr>
        </tr>
        <tr>
            <th><?= __('Flag First Login') ?></th>
            <td><?= $usuario->flag_first_login ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Trocar Senha') ?></th>
            <td><?= $usuario->flag_trocar_senha ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Avaliador') ?></th>
            <td><?= $usuario->flag_avaliador ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Demitido') ?></th>
            <td><?= $usuario->flag_demitido ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Flag Administrador') ?></th>
            <td><?= $usuario->flag_administrador ? __('Yes') : __('No'); ?></td>
         </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= $usuario->status ? __('Yes') : __('No'); ?></td>
         </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Media Avaliacoes') ?></h4>
        <?php if (!empty($usuario->media_avaliacoes)): ?>
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
            <?php foreach ($usuario->media_avaliacoes as $mediaAvaliacoes): ?>
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
