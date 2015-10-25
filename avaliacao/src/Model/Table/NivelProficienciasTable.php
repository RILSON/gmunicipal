<?php
namespace App\Model\Table;

use App\Model\Entity\NivelProficiencia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NivelProficiencias Model
 *
 * @property \Cake\ORM\Association\HasMany $AvaliacaoDesempenhoItens
 */
class NivelProficienciasTable extends Table
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

        $this->table('nivel_proficiencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AvaliacaoDesempenhoItens', [
            'foreignKey' => 'nivel_proficiencia_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->requirePresence('sigla', 'create')
            ->notEmpty('sigla');

        $validator
            ->add('divisor', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('divisor');

        $validator
            ->add('inicio_escala', 'valid', ['rule' => 'numeric'])
            ->requirePresence('inicio_escala', 'create')
            ->notEmpty('inicio_escala');

        $validator
            ->add('fim_escala', 'valid', ['rule' => 'numeric'])
            ->requirePresence('fim_escala', 'create')
            ->notEmpty('fim_escala');

        $validator
            ->add('flag_ab', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_ab', 'create')
            ->notEmpty('flag_ab');

        $validator
            ->add('flag_ap', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_ap', 'create')
            ->notEmpty('flag_ap');

        $validator
            ->add('flag_ae', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_ae', 'create')
            ->notEmpty('flag_ae');

        $validator
            ->add('flag_ee', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_ee', 'create')
            ->notEmpty('flag_ee');

        $validator
            ->add('flag_sb', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_sb', 'create')
            ->notEmpty('flag_sb');

        $validator
            ->add('ordenacao', 'valid', ['rule' => 'numeric'])
            ->requirePresence('ordenacao', 'create')
            ->notEmpty('ordenacao');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
