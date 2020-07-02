<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentmaster $studentmaster
 */ 
//jgjgjgjg
?> 
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Studentmasters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="studentmasters form content">
            <?= $this->Form->create($studentmaster) ?>
            <fieldset>
                <legend><?= __('Add Studentmaster') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('father_name');
                    echo $this->Form->control('address');
                    echo $this->Form->control('dob');
                    echo $this->Form->control('mobile');
                    echo $this->Form->control('blood_group');
                    echo $this->Form->control('photo');
                    echo $this->Form->control('status');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
