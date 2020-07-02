<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Studentmaster[]|\Cake\Collection\CollectionInterface $studentmasters
 */
?>
<div class="studentmasters index content">
    <?= $this->Html->link(__('New Studentmaster'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Studentmasters') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('father_name') ?></th>
                    <th><?= $this->Paginator->sort('dob') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('blood_group') ?></th>
                    <th><?= $this->Paginator->sort('photo') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($studentmasters as $studentmaster): ?>
                <tr>
                    <td><?= $this->Number->format($studentmaster->id) ?></td>
                    <td><?= h($studentmaster->name) ?></td>
                    <td><?= h($studentmaster->father_name) ?></td>
                    <td><?= h($studentmaster->dob) ?></td>
                    <td><?= h($studentmaster->mobile) ?></td>
                    <td><?= h($studentmaster->blood_group) ?></td>
                    <td><?= h($studentmaster->photo) ?></td>
                    <td><?= $this->Number->format($studentmaster->status) ?></td>
                    <td><?= h($studentmaster->created) ?></td>
                    <td><?= h($studentmaster->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $studentmaster->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studentmaster->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studentmaster->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studentmaster->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
