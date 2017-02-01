<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Carriers Model
 *
 * @property \Cake\ORM\Association\HasMany $Patients
 *
 * @method \App\Model\Entity\Carrier get($primaryKey, $options = [])
 * @method \App\Model\Entity\Carrier newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Carrier[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Carrier|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Carrier patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Carrier[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Carrier findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CarriersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('carriers');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Patients', [
            'foreignKey' => 'carrier_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('carrier_code', 'create')
            ->notEmpty('carrier_code');

        return $validator;
    }
}
