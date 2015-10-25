<?php
namespace App\Model\Table;

use App\Model\Entity\Evidencia;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Evidencias Model
 *
 * @property \Cake\ORM\Association\BelongsTo $AvaliacaoDesempenhos
 * @property \Cake\ORM\Association\BelongsTo $Competencias
 * @property \Cake\ORM\Association\BelongsTo $Cargos
 * @property \Cake\ORM\Association\BelongsTo $Grupos
 * @property \Cake\ORM\Association\HasMany $AvaliacaoDesempenhoItens
 */
class EvidenciasTable extends Table
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

        $this->table('evidencias');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('AvaliacaoDesempenhos', [
            'foreignKey' => 'avaliacao_desempenho_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Competencias', [
            'foreignKey' => 'competencia_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Cargos', [
            'foreignKey' => 'cargo_id'
        ]);
        $this->belongsTo('Grupos', [
            'foreignKey' => 'grupo_id'
        ]);
        $this->hasMany('AvaliacaoDesempenhoItens', [
            'foreignKey' => 'evidencia_id'
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
            ->add('status', 'valid', ['rule' => 'boolean'])
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['avaliacao_desempenho_id'], 'AvaliacaoDesempenhos'));
        $rules->add($rules->existsIn(['competencia_id'], 'Competencias'));
        $rules->add($rules->existsIn(['cargo_id'], 'Cargos'));
        $rules->add($rules->existsIn(['grupo_id'], 'Grupos'));
        return $rules;
    }
}
