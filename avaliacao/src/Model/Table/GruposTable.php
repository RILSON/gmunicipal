<?php
namespace App\Model\Table;

use App\Model\Entity\Grupo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Grupos Model
 *
 * @property \Cake\ORM\Association\HasMany $AvaliacaoGrupoModelos
 * @property \Cake\ORM\Association\HasMany $Cargos
 * @property \Cake\ORM\Association\HasMany $Criterios
 * @property \Cake\ORM\Association\HasMany $Evidencias
 */
class GruposTable extends Table
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

        $this->table('grupos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AvaliacaoGrupoModelos', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('Cargos', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('Criterios', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('Evidencias', [
            'foreignKey' => 'grupo_id'
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
            ->add('flag_estrategico', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_estrategico', 'create')
            ->notEmpty('flag_estrategico');

        $validator
            ->add('flag_tatico', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_tatico', 'create')
            ->notEmpty('flag_tatico');

        $validator
            ->add('flag_operacional', 'valid', ['rule' => 'boolean'])
            ->requirePresence('flag_operacional', 'create')
            ->notEmpty('flag_operacional');

        $validator
            ->add('peso_generica', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_generica', 'create')
            ->notEmpty('peso_generica');

        $validator
            ->add('peso_gerencial', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_gerencial', 'create')
            ->notEmpty('peso_gerencial');

        $validator
            ->add('peso_especifica', 'valid', ['rule' => 'numeric'])
            ->requirePresence('peso_especifica', 'create')
            ->notEmpty('peso_especifica');

        $validator
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
