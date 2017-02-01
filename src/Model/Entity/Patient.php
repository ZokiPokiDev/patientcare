<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity
 *
 * @property int $id
 * @property string $name
 * @property int $carrier_id
 * @property string $street_address
 * @property string $city
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property string $state
 * @property string $zipcode
 * @property string $email
 * @property string $phone
 *
 * @property \App\Model\Entity\Carrier $carrier
 * @property \App\Model\Entity\Appointment[] $appointments
 * @property \App\Model\Entity\Invoice[] $invoices
 */
class Patient extends Entity
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
        '*' => true,
        'id' => false
    ];
}
