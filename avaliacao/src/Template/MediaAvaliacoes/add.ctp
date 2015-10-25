<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Media Avaliacoes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenhos'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho'), ['controller' => 'AvaliacaoDesempenhos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Usuarios'), ['controller' => 'Usuarios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Usuario'), ['controller' => 'Usuarios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Avaliadores'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Avaliadore'), ['controller' => 'AvaliacaoAvaliadores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mediaAvaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($mediaAvaliaco) ?>
    <fieldset>
        <legend><?= __('Add Media Avaliaco') ?></legend>
        <?php
            echo $this->Form->input('avaliacao_desempenho_id', ['options' => $avaliacaoDesempenhos]);
            echo $this->Form->input('usuario_id', ['options' => $usuarios]);
            echo $this->Form->input('avaliacao_avaliador_id');
            echo $this->Form->input('nota_auto_avaliacao');
            echo $this->Form->input('peso_auto_avaliacao');
            echo $this->Form->input('avaliacao_avaliador_superior_1_id');
            echo $this->Form->input('nota_superior_1');
            echo $this->Form->input('peso_superior');
            echo $this->Form->input('avaliacao_avaliador_par_1_id');
            echo $this->Form->input('nota_par_1');
            echo $this->Form->input('avaliacao_avaliador_par_2_id');
            echo $this->Form->input('nota_par_2');
            echo $this->Form->input('peso_pares');
            echo $this->Form->input('nota_media_pares');
            echo $this->Form->input('nota_final');
            echo $this->Form->input('avaliacao_avaliador_superior_2_id', ['options' => $avaliacaoAvaliadores, 'empty' => true]);
            echo $this->Form->input('nota_superior_2');
            echo $this->Form->input('nota_media_superior');
            echo $this->Form->input('feedback');
            echo $this->Form->input('flag_feedback_concluido');
            echo $this->Form->input('nota_criterio');
            echo $this->Form->input('peso_criterio');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
