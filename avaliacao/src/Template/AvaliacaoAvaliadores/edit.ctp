<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avaliacaoAvaliadore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoAvaliadore->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Grupo Modelo'), ['controller' => 'AvaliacaoGrupoModelos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoAvaliadores form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliacaoAvaliadore) ?>
    <fieldset>
        <legend><?= __('Edit Avaliacao Avaliadore') ?></legend>
        <?php
            echo $this->Form->input('avaliacao_grupo_modelo_id', ['options' => $avaliacaoGrupoModelos]);
            echo $this->Form->input('usuario_avaliador_id');
            echo $this->Form->input('usuario_avaliado_id', ['options' => $usuarios]);
            echo $this->Form->input('valor_avaliacao');
            echo $this->Form->input('flag_finalizado');
            echo $this->Form->input('flag_superior_imediato');
            echo $this->Form->input('flag_auto_avaliacao');
            echo $this->Form->input('flag_subordinado');
            echo $this->Form->input('flag_cliente_interno');
            echo $this->Form->input('flag_fornecedor_interno');
            echo $this->Form->input('flag_360');
            echo $this->Form->input('flag_pares');
            echo $this->Form->input('flag_avaliador_aprovado');
            echo $this->Form->input('flag_avaliacao_concluida');
            echo $this->Form->input('valor_criterio');
            echo $this->Form->input('flag_criterio_finalizado');
            echo $this->Form->input('flag_avaliacao_iniciada');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
