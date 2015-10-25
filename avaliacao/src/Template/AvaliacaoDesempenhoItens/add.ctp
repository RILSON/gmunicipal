<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Evidencias'), ['controller' => 'Evidencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Evidencia'), ['controller' => 'Evidencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Nivel Proficiencias'), ['controller' => 'NivelProficiencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Nivel Proficiencia'), ['controller' => 'NivelProficiencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="avaliacaoDesempenhoItens form large-9 medium-8 columns content">
    <?= $this->Form->create($avaliacaoDesempenhoIten) ?>
    <fieldset>
        <legend><?= __('Add Avaliacao Desempenho Iten') ?></legend>
        <?php
            echo $this->Form->input('avaliacao_avaliador_id', ['options' => $avaliacaoAvaliadores]);
            echo $this->Form->input('evidencia_id', ['options' => $evidencias]);
            echo $this->Form->input('nivel_proficiencia_id', ['options' => $nivelProficiencias, 'empty' => true]);
            echo $this->Form->input('observacao');
            echo $this->Form->input('peso_competencia_cargo');
            echo $this->Form->input('somatorio_relevancia_competencia');
            echo $this->Form->input('quantidade_competencia_tipo');
            echo $this->Form->input('grau_relevancia_competencia');
            echo $this->Form->input('qtde_perguntas_competencia');
            echo $this->Form->input('valor_maximo_evidencia');
            echo $this->Form->input('valor_resposta');
            echo $this->Form->input('valor_maximo_competencia');
            echo $this->Form->input('divisor_nivel');
            echo $this->Form->input('valor_resposta_peso');
            echo $this->Form->input('peso_real');
            echo $this->Form->input('quantidade_superior_imediato');
            echo $this->Form->input('quantidade_pares');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
