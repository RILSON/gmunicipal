<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $competencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $competencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Competencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Competencias'), ['controller' => 'TipoCompetencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Competencia'), ['controller' => 'TipoCompetencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Grau Relevancias'), ['controller' => 'GrauRelevancias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Grau Relevancia'), ['controller' => 'GrauRelevancias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="competencias form large-9 medium-8 columns content">
    <?= $this->Form->create($competencia) ?>
    <fieldset>
        <legend><?= __('Edit Competencia') ?></legend>
        <?php
            echo $this->Form->input('avaliacao_desempenho_id', ['options' => $avaliacaoDesempenhos]);
            echo $this->Form->input('tipo_competencia_id', ['options' => $tipoCompetencias]);
            echo $this->Form->input('grau_relevancia_id', ['options' => $grauRelevancias]);
            echo $this->Form->input('nome');
            echo $this->Form->input('descricao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
