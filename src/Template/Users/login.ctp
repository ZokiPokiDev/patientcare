<div class="index large-4 medium-4 large-offset-4 columns content">
    <div class="panel">
        <h3 class="text-center">Patientcare Login System</h3>
        <?= $this->Form->create(); ?>
            <?= $this->Form->input('email'); ?>
            <?= $this->Form->input('password', array('type' => 'password')); ?>
            <?= $this->Form->submit('Login', array('class' => 'button')); ?>            
        <?= $this->Form->end(); ?>
    </div>
</div>