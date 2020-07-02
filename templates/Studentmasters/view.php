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
            <?= $this->Html->link(__('Edit Studentmaster'), ['action' => 'edit', $studentmaster->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Studentmaster'), ['action' => 'delete', $studentmaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentmaster->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Studentmasters'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Studentmaster'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="studentmasters view content">
            <h3><?= h($studentmaster->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($studentmaster->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Father Name') ?></th>
                    <td><?= h($studentmaster->father_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($studentmaster->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Blood Group') ?></th>
                    <td><?= h($studentmaster->blood_group) ?></td>
                </tr>
                <tr>
                    <th><?= __('Photo') ?></th>
                    <td><?= h($studentmaster->photo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($studentmaster->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($studentmaster->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dob') ?></th>
                    <td><?= h($studentmaster->dob) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($studentmaster->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($studentmaster->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($studentmaster->address)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
