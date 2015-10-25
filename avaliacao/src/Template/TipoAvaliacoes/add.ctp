<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipo Avaliacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="tipoAvaliacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoAvaliaco) ?>
    <fieldset>
        <legend><?= __('Add Tipo Avaliaco') ?></legend>
        <?php
            echo $this->Form->input('descricao');
            echo $this->Form->input('flag_superior_imediato');
            echo $this->Form->input('flag_auto_avaliacao');
            echo $this->Form->input('flag_subordinado');
            echo $this->Form->input('flag_cliente_interno');
            echo $this->Form->input('flag_fornecedor_interno');
            echo $this->Form->input('flag_360');
            echo $this->Form->input('flag_pares');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
