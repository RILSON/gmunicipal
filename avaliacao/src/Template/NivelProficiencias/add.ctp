<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Nivel Proficiencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Avaliacao Desempenho Itens'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Avaliacao Desempenho Iten'), ['controller' => 'AvaliacaoDesempenhoItens', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="nivelProficiencias form large-9 medium-8 columns content">
    <?= $this->Form->create($nivelProficiencia) ?>
    <fieldset>
        <legend><?= __('Add Nivel Proficiencia') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('sigla');
            echo $this->Form->input('divisor');
            echo $this->Form->input('inicio_escala');
            echo $this->Form->input('fim_escala');
            echo $this->Form->input('flag_ab');
            echo $this->Form->input('flag_ap');
            echo $this->Form->input('flag_ae');
            echo $this->Form->input('flag_ee');
            echo $this->Form->input('flag_sb');
            echo $this->Form->input('ordenacao');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
