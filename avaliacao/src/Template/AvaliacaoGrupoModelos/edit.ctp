<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $avaliacaoGrupoModelo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $avaliacaoGrupoModelo->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Grupo Modelos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grupos'), ['controller' => 'Grupos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grupo'), ['controller' => 'Grupos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Modelo Tipo Avaliacoes'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Modelo Tipo Avaliaco'), ['controller' => 'ModeloTipoAvaliacoes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoGrupoModelos form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliacaoGrupoModelo) ?>
    <fieldset>
        <legend><?= __('Edit Avaliacao Grupo Modelo') ?></legend>
        <?php
            echo $this->Form->input('avaliacao_desempenho_id', ['options' => $avaliacaoDesempenhos]);
            echo $this->Form->input('grupo_id', ['options' => $grupos]);
            echo $this->Form->input('modelo_tipo_avaliacao_id', ['options' => $modeloTipoAvaliacoes]);
            echo $this->Form->input('peso_real');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
