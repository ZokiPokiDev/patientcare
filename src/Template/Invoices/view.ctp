<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <?= $this->Element('actions', array('type' => 'Invoice', 'typePlural' => 'Invoices')); ?>
</nav>
<div class="invoices view large-9 medium-8 columns content">
    <h3><?= h($invoice->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Patient') ?></th>
            <td><?= $invoice->has('patient') ? $this->Html->link($invoice->patient->name, ['controller' => 'Patients', 'action' => 'view', $invoice->patient->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Services') ?></th>
            <td><?= h($invoice->services) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($invoice->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount') ?></th>
            <td><?= $this->Number->format($invoice->amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Due') ?></th>
            <td><?= h($invoice->due) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($invoice->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($invoice->modified) ?></td>
        </tr>
    </table>
</div>
