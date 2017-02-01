<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Carrier', 'typePlural' => 'Carriers')); ?>
</nav>
<div class="carriers form large-9 medium-8 columns content">
    <?= $this->Form->create($carrier) ?>
    <fieldset>
        <legend><?= __('Edit Carrier') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('carrier_code');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
