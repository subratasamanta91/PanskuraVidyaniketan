<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentmaster $studentmaster
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $studentmaster->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $studentmaster->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Studentmasters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="studentmasters form content">
            <?= $this->Form->create($studentmaster) ?>
            <fieldset>
                <legend><?= __('Edit Studentmaster') ?></legend>
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
