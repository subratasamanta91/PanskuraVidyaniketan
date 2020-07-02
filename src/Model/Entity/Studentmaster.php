<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Studentmaster Entity
 *
 * @property int $id
 * @property string $name
 * @property string $father_name
 * @property string $address
 * @property \Cake\I18n\FrozenDate $dob
 * @property string $mobile
 * @property string|null $blood_group
 * @property string $photo
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class Studentmaster extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'father_name' => true,
        'address' => true,
        'dob' => true,
        'mobile' => true,
        'blood_group' => true,
        'photo' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
    ];
}
