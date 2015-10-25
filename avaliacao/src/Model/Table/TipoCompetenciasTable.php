<?php
namespace App\Model\Table;

use App\Model\Entity\TipoCompetencia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoCompetencias Model
 *
 * @property \Cake\ORM\Association\HasMany $Competencias
 */
class TipoCompetenciasTable extends Table
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

        $this->table('tipo_competencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Competencias', [
            'foreignKey' => 'tipo_competencia_id'
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
            ->add('flag_generica', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_generica', 'create')
            ->notEmpty('flag_generica');

        $validator
            ->add('flag_gerencial', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_gerencial', 'create')
            ->notEmpty('flag_gerencial');

        $validator
            ->add('flag_especifica', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_especifica', 'create')
            ->notEmpty('flag_especifica');

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
